
<?php

 $priqe = $_POST['kategor'];


    $db = mysqli_connect('localhost','root','','vp31-13793_bd');

 

    $uploaddir="Books/".$_POST['uploaddir'];
move_uploaded_file($_FILES['uploaddir']['nam'], $uploaddir);

    if (mysqli_connect_errno()) {
    die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }

    else{

      
        $query = "UPDATE  book SET  
           id_Book='".$_POST['id_Book']."',
            Author='".$_POST['Author']."', 
            Title='".$_POST['Title']."', 
            Price='".$_POST['Price']."' , 
            id_Kat='".$priqe."', 
            uploaddir='".$uploaddir."'
        WHERE 
            id_Book='".$_POST['id_Book']."'";
        
	}      
    if ($db->query($query) != TRUE) {
        die("Ошибка: " . $db->error . " (Запрос: " . $query );
    } 
 

   

move_uploaded_file($_FILES['uploaddir']['nam'], $uploaddir);

 unset($_POST);

    mysqli_close($db);


    require('showBooks.php')
?>