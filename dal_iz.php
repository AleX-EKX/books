<?php 
    $db = mysqli_connect('localhost', 'root', '', 'vp31-13793_bd');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
        else{
            $ids = array_keys($_POST['isdelated']);
            $query = "DELETE FROM `izdat`  WHERE id_iz  IN('";
            $query .= implode("','", $ids);
            $query .= "')";
            if ($db->query($query) != TRUE) {
                die("Ошибка: " . $db->error . " (Запрос: " . $query . ")");
            }    
        mysqli_close($db); 
    }
?>
<?require('iiz.php');?>