<?
require('header.inc')
?>
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

       
        echo '<center><table class="table table-bordered border-primary"><tr><th></th><th>Код</th><th>Название</th><th>Автор</th><th>Цена</th><th>Категория</th><th>Фото</th><th></th></tr>';
        for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo '<tr>';
            echo '<td>' . "<input type='checkbox' name='isdelete[" . $row['id_Book'] . "]'>" . '</td>';

            echo '<td>' . $row['id_Book'] . '</td>';
            echo '<td>' . $row['Title'] . '</td>';
            echo '<td>' . $row['Author'] . '</td>';
            echo '<td>' . $row['Price'] . '</td>';
            echo '<td>' . $row['Name_Kat'] . '</td>';
           
            echo '<td>'.'<img width="50" height="65" src="' . $row['uploaddir'] . '">'. '</td>';
			echo '<td><a href="update_book.php?id_updt=' . $row['id_Book'] . '">'.'<img  width="30" height="30" src="red.png">'. '</td>';

            echo '</tr>';
        }
        
        mysqli_free_result($result);
    ?>
</table>
</section>
<form action="del.php" >
 <div class="container">
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Удалить">
    
    
  </div>
      </div>
</form>
</form>
</div>
   <section class="mt-5">
<div class="d-flex justify-content-between align-items-baseline mb-4">
     
    </div>


<form action="createBooks.php" method="post" enctype="multipart/form-data">

<div class="container">
   
    
    <div class="row">
    <div class="col-md-3 mb-3">
      <label for="validationServer03">Код книги</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Код книги" required="Заполните поле" name="id_Book">
      <div class="invalid-feedback">
        Введите код книги
      </div>
    </div>
        
        <div class="col-md-3 mb-3">
      <label for="validationServer04">Название</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Название" required="Заполните поле" name="Title">
      <div class="invalid-feedback">
        Введите название книги
      </div>
    </div>
        
        <div class="col-md-3 mb-3">
      <label for="validationServer04">Автор</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Автор" required="Заполните поле" name="Author">
      <div class="invalid-feedback">
        Введите автора книги  
      </div>
    </div>
        
        <div class="col-md-3 mb-3">
      <label for="validationServer04">Цена</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Цена" required="Заполните поле"name="Price">
      <div class="invalid-feedback">
        Введите цену

      </div>

    </div>
        <div class="col-md- mb-12" for="validationServer04">
           
      <?
      $db = mysqli_connect('localhost','root','','vp31-13793_bd');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {
       
        $query = "select * from `kategor`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        }
echo'<select class="btn btn-secondary dropdown-toggle" name="kategor">';
for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
          
            echo ' <option  class="btn btn-secondary dropdown-toggle" value="'.$row['id_Kat'].'">'.$row['Name_Kat'].'</option>';     
        }
        echo '</select>';
 mysqli_close($db);
      ?>
      </div>
      
 <br>

</br>
  <div class="col-md- mb-12" for="validationServer04">
           
      <?
      $db = mysqli_connect('localhost','root','','vp31-13793_bd');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {
        $query = "select * from `izdat`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        }
echo'<select class="btn btn-secondary dropdown-toggle" name="izdat">';
for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo ' <option  class="btn btn-secondary dropdown-toggle" value="'.$row['id_iz'].'">'.$row['name_iz'].'</option>';
            
           
        }
        echo '</select>';
 mysqli_close($db);

      ?>
      </div>

 <br>

</br>
    </div>
<div class="col-12 col-12 mt-12 mt-12">
        <input type="file" name="uploaddir" accept="Books/png,Books/bmp,Books/jpeg,Books/jpeg,Books/PNG">
      </div>   
  <div class="col-12 col-x1-2 mt-3 mt-x1-0">
      
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Добавить">
      </div>
    </div>
    </div>
      
      </form>
      <form action="new_table.php" >
 <div class="container">
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
      
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Добавить категорию">
    
    
  </div>
      </div>
</form>
    </section>
    <form action="iiz.php" >
 <div class="container">
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
      
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="добавить издательство">
    
    
  </div>
      </div>
</form>
    </section>
    <form method="post" action="admin.php" >
 <div class="container">
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
      <? echo (' '.$_SESSION['Login'].' ')?>
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="1submit" id="submit" value="Выйти">
    
    
  </div>
      </div>
</form>
    </section>
 <?
 if(isset($_POST['1submit'])){
unset($_SESSION);
var_dump($_SESSION);
 }
require('footer.inc');
?>




      
        
    
   