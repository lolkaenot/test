<!DOCTYPE html>
<html lang="en">
<head>
    <link href="view/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="function/processing.php" method="post">
        Заголовок статьи:<br>
        <input type="text" name="title"><br>
        Содержание:<br>
        <textarea name="text" rows="10"></textarea><br>
        <input type="submit" name="add" value="Добавить">
    </form>

</body>
</html>