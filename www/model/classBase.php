<?php
class Base {
    private $link;
    public function __construct($table) {
        $this->link = mysqli_connect('localhost', 'root', '', $table);
    }

    public function sql_request($str){
        mysqli_query($this->link,$str);
    }

    public function getAllEntry($str) {
        $res = mysqli_query($this->link,$str);
        $arrBase = [];
        while ($row = mysqli_fetch_assoc($res)) {
            $arrBase[] = $row;
        }
        return $arrBase;
    }

    public function getOneEntry($str) {
        $res = mysqli_query($this->link, $str);
        return mysqli_fetch_assoc($res);
    }
}

