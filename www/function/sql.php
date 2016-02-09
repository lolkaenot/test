<?php

function sqlConnect(){
    return mysqli_connect('localhost', 'root', '', 'test');
}

function sql_request($str){
    $link = sqlConnect();
    mysqli_query($link,$str);
}

function sql_getAll($str){
    $link = sqlConnect();
    $res = mysqli_query($link,$str);

    $arr = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $arr[] = $row;
    }
    return $arr;
}