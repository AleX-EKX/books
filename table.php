<?php
   
        $ewq = $_POST['id_Kat']; 
        $qwe = $_POST['Name_Kat']; 
        

        
         $db = mysqli_connect('localhost','root','','vp31-13793_bd');
         
        if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {     
            $query = "INSERT INTO `kategor` (`id_Kat`, `Name_Kat`) 
                        VALUES ("."$ewq".", "."'"."$qwe"."'".");";
               
            
            if ($db->query($query) != TRUE) {
                die("Ошибка: " . $db->error . " (Запрос: " . $query );
            } 

            mysqli_close($db);
        }
  
    
       

      
        
         require('new_table.php');
        


       
?>