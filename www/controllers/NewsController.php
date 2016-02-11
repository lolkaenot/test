<?php

class NewsController
{
    public function actionAll() {
        $items = News::getAllReverseSort('date');
        $view = new View();
        $view->news = $items;
        $view->display('news/all.php');

    }

    public function actionOne() {
        $id = $_GET['id'];
        $item = News::getOneById($id);
        $view = new View();
        $view->news = $item;
        $view->display('news/one.php');
    }
}

