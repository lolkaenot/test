<?php
require __DIR__ . '/model/news.php';

/** Добавление */
if (isset($_GET['add'])) {
    if (isset($_POST['add'])) {
        news_add($_POST['title'], $_POST['article']);
        header('Location: index.php');
        die;
    }
    include __DIR__ . '/view/add.php';
}

/** Редактирование */
if (isset($_GET['edit'])) {
    $arr = news_get($_GET['edit']);

    if (isset($_POST['edit'])) {
        news_edit($_GET['edit'],$_POST['title'], $_POST['article']);
        header('Location: index.php');
        die;
    }

    include __DIR__ . '/view/edit.php';
}

/** Удаление */
if (isset($_GET['del'])) {
    news_delete($_GET['del']);
    header('Location: index.php');
    die;
}

/** Показ  */
if (isset($_GET['art'])) {
    $arr = news_get($_GET['art']);
    include __DIR__ . '/view/article.php';
}


