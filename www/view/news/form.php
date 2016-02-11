<form action="" method="post">
    <input type="hidden" name="id" value="<?=empty($news) ? '' : $news->id;?>">
    Заголовок статьи:<br>
    <input type="text" name="title" value="<?=empty($news) ? '' : $news->title;?>"><br>
    Содержание:<br>
    <textarea name="text" rows="10"><?=empty($news) ? '' : $news->text;?></textarea><br>
    <input type="submit" name="<?=empty($news) ? 'add' : 'edit';?>" value="Добавить">
</form>



