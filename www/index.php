<?php
require __DIR__ . '/model/classNews.php';

$arrNews = News::getAllNews();

include __DIR__ . '/view/index.php';