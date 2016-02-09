<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="index.php">Назад</a>
<?php foreach($arr as $a):?>
    <h1><?=$a['title']?></h1>
        <div style="width: 400px"><?=$a['article'];?></div>
    <a href="article.php?edit=<?=$a['id'];?>">Редактировать</a>
    <a href="article.php?del=<?=$a['id'];?>">Удалить</a>
<?php endforeach;?>
</body>
</html>