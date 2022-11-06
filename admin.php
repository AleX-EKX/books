<?session_start();?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<Title>Администратор</Title>
<style>
.bd-placeholder-img{font-size:1.25rem;
text-anchor:middle;
-webkit-user-select:none;
user-select: none;
}

@media(min-width: 768px)
{
	.bd-placeholder-omg-lg{
		font-size: 3.5em;
	}
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
	<main class="form-signin">
		<?
if(isset($_POST['submit'])){
  $db = mysqli_connect('localhost','root','','vp31-13793_bd');

  $Login=$_POST['Login'];
  $password=$_POST['password'];

  $sql="SELECT * FROM admins WHERE Login='$Login' and password='$password'";

 $result = mysqli_query($db, $sql);
 if( mysqli_num_rows($result)!=0){
 	$_SESSION['Login']=$Login;
 	

 	echo"<script type='text/javascript'>";
 	echo"window.location.href='admin_panel.php';";
 	echo "</script>";
 }


else{
	echo"<div class='shadow p-3 mb-2 bg-body rounder'>
	<centre><div class='alert-danger'><b>Не верный логин или пароль</b></div></centre><br>
	<div class='checkbox mb-3'>
	<a href='admin.php'>Вернуться к авторизации</a>
	</div>
	</div>";
	
	
exit;
}

unset($_POST);
mysqli_free_result($result);
mysql_close($db);
}
		?>



<form method="post" action="admin.php">
	<img class="mb-4" src="Books/image_560906170028049980771.jpg" alt="" width="72" height="77">
	<h1 class="h3 mb-3 fw-normal">Авторизация</h1>
	<div class="container">
	<div>
		<input type="text" name="Login" id="floatingInput" required autofocus placeholder="Логин">
		<label for="floatingInput">Логин</label>
	</div>
	<div>
		<input type="password" name="password" id="floatingpassword" required autofocus placeholder="Пароль">
		<label for="floatingpassword">Пароль</label>
	</div>
</div>
	<div class="container">
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
      <input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Войти">
    
    
  </div>
      </div>
		<a href="new.php">Вернуться на главную</a>
		</div>
		<p class="mt-5 mb-3 text-muted">&copy;2021</p>

</form>
</main>
<script type="js/bootstrap.min.js"></script>
<script type="js/jquery-3.4.1.min.js"></script>
<script type="js/popper.min.js"></script>
</body>
</html>
