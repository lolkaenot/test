<?php

class ControllerNews
{
    public function actionAll() {
        $items = News::getAll();
        $view = new View();
        $view->data('news', $items);
        $view->display('all.php');

    }
    public function actionOne() {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->data('news', $item);
        $view->display('one.php');
    }

    public function actionDel() {
        $id = $_GET['id'];
        News::delete($id);
        View::mainPage();

    }

    public function actionAdd() {
        if (isset($_POST['add'])) {
            if (!empty($_POST['title']) && !empty($_POST['text'])) {
                News::add($_POST['title'], $_POST['text']);
                View::mainPage();
            }
        }
        $view = new View();
        $view->data('news', '');
        $view->display('form.php');
    }

    public function actionEdit() {
        if (isset($_POST['edit'])) {
            if (!empty($_POST['title']) && !empty($_POST['text'])) {
                News::edit($_POST['id'], $_POST['title'], $_POST['text']);
                View::mainPage();
            }
        }
        $item = News::getOne($_GET['id']);
        $view = new View();
        $view->data('news', $item);
        $view->display('form.php');
    }

}

?>