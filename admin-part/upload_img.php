<?php 
///var_dump($_SERVER['DOCUMENT_ROOT']);die;
/*$name = $_FILES['upload']['name'];
move_uploaded_file($_FILES['upload']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/img/news/".$name);
$full_path = 'http://vopobuwek.pro/img/news/'.$name;
echo 'Готово '.$full_path;*/
function getex($filename) {
return end(explode(".", $filename));
}


if($_FILES['upload'])
{
if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) )
{
$message = "Вы не выбрали файл";
}
else if ($_FILES['upload']["size"] == 0 OR $_FILES['upload']["size"] > 2050000)
{
$message = "Размер файла не соответствует нормам";
}
else if (!is_uploaded_file($_FILES['upload']["tmp_name"]))
{
$message = "Что-то пошло не так. Попытайтесь загрузить файл ещё раз.";
}
else{

$name = $_FILES['upload']['name'];
getex($full_path);
move_uploaded_file($_FILES['upload']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/img/news/".$name);
$full_path = 'http://www.redmiplus.com/img/news/'.$name;
$message = "Файл ".$_FILES['upload']['name']." загружен";
$size=@getimagesize('images/'.$name);
}
$callback = $_REQUEST['CKEditorFuncNum'];
echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$callback.'", "'.$full_path.'", "'.$message.'" );</script>';
}
/*$message = "Файл ".$_FILES['upload']['name']." загружен";
$size=@getimagesize('userfiles/'.$name);
if($size[0]<50 OR $size[1]<50){
unlink('userfiles/'.$name);*/