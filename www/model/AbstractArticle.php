<?php

abstract class AbstractArticle{

    protected static $table;
    protected static $class;

    static public function getAll(){
        $base = new Base();
        $str = 'SELECT * FROM ' . static::$table. ' ORDER BY date DESC';
        return $base->getAllEntry($str, static::$class);
    }

    static public function getOne($id) {
        $base = new Base();
        $str='SELECT * FROM ' . static::$table .' WHERE id=' . $id;
        return $base->getOneEntry($str, static::$class);
    }

    static public function delete($id) {
        $base = new Base();
        $str ='DELETE FROM ' . static::$table . ' WHERE id=' . $id;
        $base->sql_request($str);
    }
}