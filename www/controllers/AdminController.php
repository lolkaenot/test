<?php

class AdminController extends NewsController{

    public function actionDel() {
        $id = $_GET['id'];
        News::deleteById($id);
        View::mainPage();

    }

    public function actionSave() {
        if (!empty($_POST['title']) && !empty($_POST['text'])) {
            $new = new News();
            foreach ($_POST as $key => $value) {
                $new->$key = $value;
            }
            $new->date=date("Y.m.d H:i:s");
            $new->save();
            View::mainPage();
        }
    }

    public function actionForm()
    {
        $view = new View();
        if (isset($_GET['id'])) {
            $item = News::getOneById($_GET['id']);
            $view->news = $item;
        }
        $view->display('news/form.php');
    }

}









//    public function actionAdd() {
//
//    if (!empty($_POST['title']) && !empty($_POST['text'])) {
//        $new = new News();
//        foreach ($_POST as $key => $value) {
//            $new->$key = $value;
//        }
////                $new->title=$_POST['title'];
////                $new->text= $_POST['text'];
//
//        $new->date=date("Y.m.d H:i:s");
//        $new->add();
//        View::mainPage();
//    }
//
//}
//
//    public function actionEdit() {
//
//        if (!empty($_POST['title']) && !empty($_POST['text'])) {
//            $new = new News();
//            foreach ($_POST as $key => $value) {
//                $new->$key = $value;
//            }
////                $new->id = $_POST['id'];
////                $new->title=$_POST['title'];
////                $new->text= $_POST['text'];
//            $new->date=date("Y.m.d H:i:s");
//            $new->editById();
//            View::mainPage();
//        }
//    }