<?php
$db = mysqli_connect('localhost', 'root', '', 'vp31-13793_bd');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else{
    
        
           
if(!preg_math('/(.)(PNG)|(jpg)|(gpeg)|(gif)|(png)|(JPG)$/',$_FILES['uploaddir']['nam']))
{
	echo"Некорректный формат файла".$_FILES['uploaddir']['nam'];
	exit;

}
$uploaddir='img/'.$_FILES['uploaddir']['nam'];
move_uploaded_file($_FILES['uploaddir']['nam'], $uploaddir);
mysql_close($db);
}
?>