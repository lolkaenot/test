<?php

class AdminController extends NewsController{

    public function actionDel() {
        $id = $_GET['id'];
        News::deleteById($id);
        View::mainPage();

    }

    public function actionAdd() {
        if (isset($_POST['add'])) {
            if (!empty($_POST['title']) && !empty($_POST['text'])) {
                $new = new News();
                $new->title=$_POST['title'];
                $new->text= $_POST['text'];
                $new->date=date("Y.m.d H:i:s");
                $new->add();
                View::mainPage();
            }
        }
        $view = new View();
        $view->display('news/form.php');
    }

    public function actionEdit() {
        if (isset($_POST['edit'])) {
            if (!empty($_POST['title']) && !empty($_POST['text'])) {
                $new = new News();
                $new->id = $_POST['id'];
                $new->title=$_POST['title'];
                $new->text= $_POST['text'];
                $new->date=date("Y.m.d H:i:s");
                $new->editById();
                View::mainPage();
            }
        }
        $item = News::getOneById($_GET['id']);
        $view = new View();
        $view->news = $item;
        $view->display('news/form.php');
    }
}