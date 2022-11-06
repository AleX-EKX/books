
<?
require('header.inc')
?>
</div>
<div class="container">
  <section class="mt-5">
<table class="table table-bordered border-primary">
<?php
    $db = mysqli_connect('localhost','root','','vp31-13793_bd');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {
        $query = "select * from `kategor`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        }
        echo "<p>&nbsp;</p>";
        ?>
<div class="container">
  <section class="mt-5">
<?php
     echo "<form method='post' action='dal_kat.php'>";
        $query = "select * from `kategor`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        echo '<center><table class="table table-bordered border-primary"><tr><th></th><th>Код</th><th>Название категории </th></tr>';
        for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo '<tr>';
            echo '<td><input type="checkbox" name="isdelated[' . $row["id_Kat"] . ']"></td>';
            echo '<td>' . $row['id_Kat'] . '</td>';
            echo '<td>' . $row['Name_Kat'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        mysqli_close($db);
   ?>
</table>
      <form  method='post' action="dal_kat.php" >
 <div class="container">
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
      
<table class="table table-bordered border-primary">
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit"  value="Удалить">
  </div>
      </div>
      </form>
</section>

   <section class="mt-5">
<div class="d-flex justify-content-between align-items-baseline mb-4">    
  </div>
<form action="table.php" method="post">
<div class="container">
    <div class="row">
    <div class="col-md-3 mb-3">
      <label for="validationServer03">Код</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Код книги" required="Заполните поле" name="id_Kat">
      <div class="invalid-feedback">
        Введите код 
      </div>
    </div>  
    <div class="col-md-3 mb-3">
      <label for="validationServer04">Категория</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Категория" required="Заполните поле"name="Name_Kat">
      <div class="invalid-feedback">
        Введите название категории
      </div> 
     <div class="col-12 col-12 mt-12 mt-12">
</section>
<form action="new_table.php" method="post">
<div class="container">
<input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Добавить">
</div>  
    </form>
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
    <form action="showBooks.php" >
<div class="container">
<input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Назад">
</div> 
    </form>  

<?
require('footer.inc');
?>