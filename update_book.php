<?
require('header.inc');
echo"</div>";
        $code = $_POST['id_Book']; 
        $name = $_POST['Title']; 
        $autor = $_POST['Author']; 
        $price = $_POST['Price'];
        $priqe = $_POST['kategor'];
        
       
        

         $db = mysqli_connect('localhost','root','','vp31-13793_bd');
         
   if(isset($_GET['id_updt'])){
    $id_updt=$_GET['id_updt'];
 
 $sql="SELECT * FROM book where id_Book=".$id_updt;
 $result=mysqli_query($db,$sql);
 $book=mysqli_fetch_assoc($result);
 echo"<form method='post' action='UPDAT_BOOK.php'>";
 echo'<div class="container">
   
    
    <div class="row">
    <div class="col-md-3 mb-3">
      <label for="validationServer03">Код книги</label>
      <input type="'.$book['id_Book'].'"  class="form-control is-invalid" id="validationServer03" placeholder="'.$book['id_Book'].'"  name="id_Book" value"'.$book['id_Book'].'">
      <div class="invalid-feedback">
       
      </div>
    </div>';
        
     echo'   <div class="col-md-3 mb-3">
      <label for="validationServer04">Название</label>
      <input type="id_updt" class="form-control is-invalid" id="validationServer04" placeholder="Название" required="Заполните поле" name="Title" value"'.$book['Title'].'">
      <div class="invalid-feedback">
        Введите название книги
      </div>
    </div>';
        
    echo'    <div class="col-md-3 mb-3">
      <label for="validationServer04">Автор</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Автор" required="Заполните поле" name="Author"  value"'.$book['Author'].'">
      <div class="invalid-feedback">
        Введите автора книги  
      </div>
    </div>';
        
    echo'    <div class="col-md-3 mb-3">
      <label for="validationServer04">Цена</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Цена" required="Заполните поле"name="Price"  value"'.$book['Price'].'">
      <div class="invalid-feedback">
        Введите цену

      </div>

    </div>'

?>
      <div class="col-md- mb-12" for="validationServer04">

      <?
      $db = mysqli_connect('localhost','root','','vp31-13793_bd');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $db->connect_error);
    }
    else {
       echo "<form method='post' >";
        $query = "select * from `kategor`";
        $result = mysqli_query($db, $query);
        $num_results = mysqli_num_rows($result);
        }
echo'<select class="btn btn-secondary dropdown-toggle" name="kategor">';
for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
          
            echo ' <option  class="btn btn-secondary dropdown-toggle" value="'.$row['id_Kat'].'">'.$row['Name_Kat'].'</option>';

            
           
        }
   echo'</form>';
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
}
      
     

      

      ?>
      <br>
    </br>
  </div>

      <div class="col-12 col-12 mt-12 mt-12">
       
      
        <input type="file" name="uploaddir" accept="Books/png,Books/bmp,Books/jpeg,Books/jpeg,Books/PNG">
        
      
      </div>
</div>

    <div class="container">
        <div class="col-12 col-x1-2 mt-3 mt-x1-0">
                <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Внести изменения">
       </div>
      </div>
</form>
    </section>
</>
<?
 require('footer.inc');
?>