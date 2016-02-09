<?php
require __DIR__ . '/model/classNews.php';

/** Добавление */
if (isset($_GET['add'])) {
    include __DIR__ . '/view/add.php';
}

/** Редактирование */
if (isset($_GET['edit'])) {
    $news=new News($_GET['edit']);
    include __DIR__ . '/view/edit.php';
}

/** Удаление */
if (isset($_GET['del'])) {
    $news=new News($_GET['del']);
    $news->deleteNews();
    header('Location: index.php');
    die;
}

/** Показ  */
if (isset($_GET['art'])) {
    $news=new News($_GET['art']);
    include __DIR__ . '/view/article.php';
}


