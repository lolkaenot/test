<?php
require __DIR__ . '/../model/classNews.php';

if (isset($_POST['add'])) {
    if (!empty($_POST['title']) && !empty($_POST['text'])) {
        $news = new News(0);
        $news->setTitle($_POST['title']);
        $news->setText($_POST['text']);
        $news->addNews();
        header('Location: /../index.php');
        exit;
    }

}

if (isset($_POST['edit'])) {
    if (!empty($_POST['title']) && !empty($_POST['text'])) {
        $news=new News($_POST['id']);
        $news->setTitle($_POST['title']);
        $news->setText($_POST['text']);
        $news->editNews();
        header('Location: /../index.php');
        exit;
    }
}
