<?php
require __DIR__ . '/model/news.php';

$arrNews=news_getAll();

include __DIR__ . '/view/index.php';