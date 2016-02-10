<?php
class Base {
    private $link;
    public function __construct() {
        $this->link = mysqli_connect('localhost', 'root', '', 'test');
    }

    public function sql_request($str){
        mysqli_query($this->link,$str);
    }

    public function getAllEntry($str,$class='stdClass') {
        $res = mysqli_query($this->link,$str);
        if ($res === false) {
            return false;
        }
        $arrBase = [];
        while ($row = mysqli_fetch_object($res,$class)) {
            $arrBase[] = $row;
        }
        return $arrBase;
    }

    public function getOneEntry($str, $class='stdClass') {
        $res = mysqli_query($this->link, $str);
        return mysqli_fetch_object($res, $class);
    }
}

