<?php
require __DIR__ . '/classBase.php';

abstract class Article{
    protected $id;
    protected $title;
    protected $text;
    protected $date;
    protected $base;

    function __construct($id) {
        $this->base = new Base('test');
        if ($id != 0) {
            $str = "SELECT * FROM news WHERE id='" . $id . "'";
            $arr = $this->base->getOneEntry($str);
            if (!empty($arr)) {
                $this->id = $arr['id'];
                $this->title = $arr['title'];
                $this->text = $arr['article'];
                $this->date = $arr['date'];
            }
        }else {
            $this->id = $id;
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        if (!empty($title)) {
            $this->title = $title;
        }
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        if(!empty($text)) {
            $this->text = $text;
        }
    }

    public function getId(){
        return $this->id;
    }

    public function getDate(){
        return $this->date;
    }

}