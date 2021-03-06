<?php

abstract class AbsModel{

    protected static $table;
    public $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        return $this->data[$name];
    }

    /** Перенаправление на Добавление, либо Обновление по наличию id */
    public function save() {
        if (isset($this->data['id'])) {
            self::updateById();
        }else {
            self::add();
        }
    }
    /** Получить все записи отсоритированные в обратном порядке */
    static public function getAllReverseSort($sortItem){
        $class = get_called_class();
        $bd = new Base();
        $str='SELECT * FROM ' . static::$table . ' ORDER BY ' . $sortItem . ' DESC';
        $bd->setClassName($class);
        return $bd->sql_query($str);
    }

    /** Получить запись по ее id */
    static public function getOneById($id) {
        $class = get_called_class();
        $bd = new Base();
        $bd->setClassName($class);
        $str = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        return $bd->sql_query($str, [':id' => $id])[0];

    }

    /** Удалить запись по ее id */
    static public function deleteById($id) {
        $bd = new Base();
        $str ='DELETE FROM ' . static::$table . ' WHERE id=:id';
        $bd->sql_execute($str,[':id'=>$id]);
    }

    /** Добавить запись */
    protected function add() {
        $cols= array_keys($this->data);
        $ins = [];
        foreach ($cols as $col) {
            $ins[':' . $col]=$this->data[$col];
        }
        $str = 'INSERT INTO ' . static::$table .
                '( ' . implode(', ', $cols) . ')
                VALUES
                (' . implode(', ', array_keys($ins)) . ')';

        $bd = new Base();
        $bd->sql_execute($str, $ins);
    }

    /** Изменить запись */
    protected function updateById() {
        $cols= array_keys($this->data);
        $ins = [];
        $params = [];
        foreach ($cols as $col) {
            if ($col == 'id') {
                $params[':' . $col]=$this->data[$col];
                continue;
            }
            $ins[]=$col . '=:' . $col;
            $params[':' . $col]=$this->data[$col];
        }
        $str = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $ins) . ' WHERE id=:id';
        $bd = new Base();
        $bd->sql_execute($str, $params);
    }

    /** Поиск по заданной записи */
    static public function findByColumn($column, $value) {
        $class = get_called_class();
        $str = 'SELECT * FROM ' . static::$table .
                ' WHERE ' . $column . '=:' . $column;
        $bd = new Base();
        $bd->setClassName($class);
        return $bd->sql_query($str , [':' . $column => $value]);
    }
}