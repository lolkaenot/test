<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="index.php">&larr;&nbsp;Назад</a>
    <h1><?=$news->getTitle();?></h1>
        <div style="width: 400px"><?=$news->getText();?></div><br/>
    <p style="font-size: 12px; margin: 0; padding: 0;"><?=$news->getDate();?></p>
    <a href="article.php?edit=<?=$news->getId();?>">Редактировать</a>
    <a href="article.php?del=<?=$news->getId();?>">Удалить</a>

</body>
</html>