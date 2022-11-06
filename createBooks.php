<?php
   
        $code = $_POST['id_Book']; 
        $name = $_POST['Title']; 
        $autor = $_POST['Author']; 
        $price = $_POST['Price'];
        $priqe = $_POST['kategor'];
        
        
         $db = mysqli_connect('localhost','root','','vp31-13793_bd');
         
        if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {  
    
$uploaddir='Books/'.$_FILES['uploaddir']['name'];
move_uploaded_file($_FILES['uploaddir']['name'], $uploaddir);
}   
            $query = "INSERT INTO `book` (`id_Book`, `Author`, `Title`, `Price`,`id_Kat`,`uploaddir`) 
                        VALUES ("."$code".", "."'"."$name"."'".", "."'"."$autor"."'".", "."$price".","."$priqe".",'".$uploaddir."');";
                         
            if ($db->query($query) != TRUE) {
                die("Ошибка: " . $db->error . " (Запрос: " . $query );
            } 
            mysqli_close($db);
    move_uploaded_file($_FILES['uploaddir']['name'], $uploaddir);

         require('showBooks.php')
        


       
?>