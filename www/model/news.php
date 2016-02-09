<?php
require __DIR__ . '/../function/sql.php';

/** Получить все новости отсортированные по дате в обратном порядке */
function news_getAll(){

    $str = 'SELECT * FROM news ORDER BY date DESC';
    return sql_getAll($str);
}

/** Удалить новость по ее id */
function news_delete($id){
    $str = "DELETE FROM news WHERE id='" . $id . "'";
    sql_request($str);
}

/** Добавть новость */
function news_add($title, $article){
    $date = date("Y.m.d H:i:s");
    $str = "INSERT INTO news (date, title, article)
            VALUES ('" . $date . "', '" . $title . "', '" . $article . "')";
    sql_request($str);
}

/** Изменить новость по ее id */
function news_edit($id, $title, $article){
    $date = date("Y.m.d H:i:s");
    $str = "UPDATE news
            SET date='" . $date . "', title='" . $title . "', article='" . $article . "'
            WHERE id='". $id . "'";
    sql_request($str);
}
function news_get($id){

    $str = "SELECT * FROM news WHERE id='" . $id . "'";
    return sql_getAll($str);
}