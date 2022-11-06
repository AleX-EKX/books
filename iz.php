<?php
   
        $code = $_POST['id_iz']; 
        $name = $_POST['name_iz']; 
    
  

        
         $db = mysqli_connect('localhost','root','','vp31-13793_bd');
         
        if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {  
    
  
            $query = "INSERT INTO `izdat` (`id_iz`, `name_iz`) 
                        VALUES ("."$code".", "."'"."$name"."'".");";
               
            
            if ($db->query($query) != TRUE) {
                die("Ошибка: " . $db->error . " (Запрос: " . $query );
            } 

            mysqli_close($db);
  
   

       
}
      
        
         require('iiz.php')
        


       
?>