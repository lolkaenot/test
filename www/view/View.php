<?php

class View {
    public $category;
    public $data;

    public function data($category, $data) {
        $this->category=$category;
        $this->data = $data;
    }

    public function display($file) {
        include __DIR__ . '/' . $this->category . '/' . $file;
    }

    public static function mainPage() {
        header('Location: /../index.php');
    }
}