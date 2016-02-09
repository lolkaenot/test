<!DOCTYPE html>
<html lang="en">
<head>
    <link href="view/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="function/processing.php" method="post">
    <input type="hidden" name="id" value="<?=$news->getId();?>">
    Заголовок статьи:<br>
    <input type="text" name="title" value="<?=$news->getTitle();?>"><br>
    Содержание:<br>
    <textarea name="text" rows="10" ><?=$news->getText();?></textarea><br>
    <input type="submit" name="edit" value="добавить">
</form>
</body>
</html>