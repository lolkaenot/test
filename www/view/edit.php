<!DOCTYPE html>
<html lang="en">
<head>
    <link href="view/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php foreach($arr as $a):?>
<form action="" method="post">
    Заголовок статьи:<br>
    <input type="text" name="title" value="<?=$a['title'];?>"><br>
    Содержание:<br>
    <textarea name="article" rows="10" ><?=$a['article'];?></textarea><br>
    <input type="submit" name="edit" value="добавить">
</form>
<?php endforeach;?>
</body>
</html>