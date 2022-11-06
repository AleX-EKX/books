 <table class="table table-bordered border-primary">

  
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
        $query = "select * from `izdat`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        }
        echo "<p>&nbsp;</p>";
        ?>
<div class="container">
  <section class="mt-5">
<?php
      echo "<form method='post' action='dal_iz.php'>";
        $query = "select * from `izdat`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        echo '<center><table class="table table-bordered border-primary"><tr><th></th><th>Код</th><th>Название категории </th></tr>';
        for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo '<tr>';
          echo '<td><input type="checkbox" name="isdelated[' . $row["id_iz"] . ']"></td>';
            echo '<td>' . $row['id_iz'] . '</td>';
            echo '<td>' . $row['name_iz'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        mysqli_close($db);
   ?>
</table>
<form   action="dal_iz.php" >
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


<form action="iz.php" method="post" enctype="multipart/form-data">
<div class="container">
<div class="row">

   
    
    
        
        <div class="col-md-6 mb-6">
      <label for="validationServer04">Код здательство</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Код здательство" required="Заполните поле" name="id_iz">
      <div class="invalid-feedback">
        Код издательства
      </div>
    </div>
        
        <div class="col-md-6 mb-6">
      <label for="validationServer04">Издательство</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Издательство" required="Заполните поле" name="name_iz">
      <div class="invalid-feedback">
        Введите название издательства 
      </div>
    </div>
        </div>
      
    </div>
 <div class="container">

      
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="добавить издательство">
    
    
 
      </div>


<?
require('footer.inc');
?>




      
        
    
   