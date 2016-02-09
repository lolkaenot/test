<?php
require __DIR__ . '/classArticle.php';

class News extends Article{

    public function addNews() {
        if ($this->id == 0) {
            if(!empty($this->text)&&!empty($this->title)) {
                $date = date("Y.m.d H:i:s");
                $str = "INSERT INTO news (date, title, article)
                VALUES ('" . $date . "', '" . $this->title . "', '" . $this->text . "')";
                $this->base->sql_request($str);
            }
        }
    }

    public function editNews(){
        $date = date("Y.m.d H:i:s");
        $str = "UPDATE news
            SET date='" . $date . "', title='" . $this->title . "', article='" . $this->text . "'
            WHERE id='". $this->id . "'";
        $this->base->sql_request($str);
    }

    public function deleteNews(){
        $str = "DELETE FROM news WHERE id='" . $this->id . "'";
        $this->base->sql_request($str);
    }

    static public function getAllNews(){
        $base = new Base('test');
        $str = 'SELECT * FROM news ORDER BY date DESC';
        return $base->getAllEntry($str);
    }


}
