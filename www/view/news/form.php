<form action="" method="post">
    <input type="hidden" name="id" value="<?=$this->data->id;?>">
    Заголовок статьи:<br>
    <input type="text" name="title" value="<?=$this->data->title;?>"><br>
    Содержание:<br>
    <textarea name="text" rows="10"><?=$this->data->text;?></textarea><br>
    <input type="submit" name="<?=empty($this->data) ? 'add' : 'edit';?>" value="Добавить">
</form>



