<?php


class News
    extends AbstractArticle
{

    public $id;
    public $title;
    public $text;
    public $date;

    protected static $table = 'news';
    protected static $class = 'news';


    static public function add($title, $text) {
        $base = new Base();
        $date = date("Y.m.d H:i:s");
        $str = "INSERT INTO " . static::$table. " (date, title, text)
                        VALUES ('" . $date . "', '" . $title . "', '" . $text . "')";
        $base->sql_request($str);

    }


    static public function edit($id, $title, $text){
        $base = new Base();
        $date = date("Y.m.d H:i:s");
        $str = "UPDATE news SET date='" . $date . "', title='" . $title . "', text='" . $text . "'
            WHERE id=". $id ;
        $base->sql_request($str);
    }
}
