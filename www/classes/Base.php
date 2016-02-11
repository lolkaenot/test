<?php
class Base {

    protected $dbn;
    protected $className = 'stdClass';

    public function __construct() {
        $this->dbn = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }

    public function setClassName($name) {
        $this->className = $name;
    }

    public function sql_query($str, $param=[]){
        $sth = $this->dbn->prepare($str);
        $sth->execute($param);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);

    }

    public function sql_execute($str, $param=[]){
        $sth = $this->dbn->prepare($str);
        return $sth->execute($param);


    }
//    public function getAllEntry($str,$class='stdClass') {
//        $res = mysqli_query($this->link,$str);
//        if ($res === false) {
//            return false;
//        }
//        $arrBase = [];
//        while ($row = mysqli_fetch_object($res,$class)) {
//            $arrBase[] = $row;
//        }
//        return $arrBase;
//    }
//
//    public function getOneEntry($str, $class='stdClass') {
//        $res = mysqli_query($this->link, $str);
//        return mysqli_fetch_object($res, $class);
//    }
}

