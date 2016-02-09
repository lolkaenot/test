<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php foreach ($arrNews as $new):?>
    <div style="margin: 10px; border: 1px solid black; width: 300px">
        <span><a href="article.php?art=<?=$new['id'];?>"><?= $new['title']; ?></a></span><br>
        <div style="width: 300px;"><?= substr($new['article'],0,151)?>
            <?php if(strlen($new['article'])>150):?>
            &nbsp;...&nbsp;
            <a href="article.php?art=<?=$new['id']; ?>">>>>&nbsp;Читать далее</a>
            <?php endif;?>
        </div><br>
        <p style="font-size: 12px; margin: 0; padding: 0;"><?=$new['date'];?></p>
        <a href="article.php?edit=<?=$new['id'];?>">Редактировать</a>
        <a href="article.php?del=<?=$new['id'];?>">Удалить</a>
    </div>
    <?php endforeach;?>
    <a href="article.php?add=1" style="margin: 10px;">Добавить статью</a>
</div>
</body>
</html>