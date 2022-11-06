<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head> 
  
<body>
<div class="container-fluid bg-warning">
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="showBooks.php">Список книг</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Добавить книгу</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Еще 1 пункт</a>
  </li>
</ul>

 <div>
   
   <p align="right">Вы вошли как пользователь</p>
</div>
</div>
<?php

    
    $db = mysqli_connect('localhost','root','','vp31-13793_bd');


    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {
       
        $query = "select `id_Book`, `Author`, `Title`, `Price`, `Name_Kat` from `kategor`, `book` where kategor.id_Kat=book.id_Kat";
                       
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        }

        echo "<p>&nbsp;</p>";
        ?>

<div class="container">
  <section class="mt-5">



      <table class="table table-bordered border-primary">

  
<?php
     echo "<form method='post' action='del.php'>";
        $query = "select `id_Book`, `Author`, `Title`, `Price`, `Name_Kat` ,`book`.`uploaddir` from 
        `kategor`, `book` where kategor.id_Kat=book.id_Kat";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);

       
        echo '<center><table class="table table-bordered border-primary"><tr><th>Код</th><th>Название</th><th>Автор</th><th>Цена</th><th>Категория</th><th>Фото</th></tr>';
        for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo '<tr>';
           

            echo '<td>' . $row['id_Book'] . '</td>';
            echo '<td>' . $row['Title'] . '</td>';
            echo '<td>' . $row['Author'] . '</td>';
            echo '<td>' . $row['Price'] . '</td>';
            echo '<td>' . $row['Name_Kat'] . '</td>';
           
            echo '<td>'.'<img width="50" height="65" src="' . $row['uploaddir'] . '">'. '</td>';
            

            echo '</tr>';
        }
        

        mysqli_free_result($result);
       

    ?>
</table>
</section>




        
    
    
  

<?
require('footer.inc');
?>