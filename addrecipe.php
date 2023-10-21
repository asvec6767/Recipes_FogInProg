<?php 
	session_start(); 

  if (!isset($_SESSION['login'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['login']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Adding ur recipe</title>
  <link rel="stylesheet" type="text/css" href="style_addrecipe.css">
</head>
<body class="body_add">

<!---<header>
	<a href="#" class="logo"> Ease </a> 
    <ul class="navlist">
	<li> <a href="#">Главная</a> </li>
	<li> <a href="#">Использование</a> </li>
	<li> <a href="#">О сайте</a> </li>
  <li></li>
  </ul>
	<div class="bx bx-menu" id="menu-icon"></div>
 </header>--->


 <?php include "header.php";?>
 <div class="block_under_header_lk">
  <div class="header_add">
  
  	<!-- <h1>Добавьте свой рецепт!</h1> -->
  </div>
	 
  <form class="form_add" method="post" action="addrecipe.php" enctype="multipart/form-data">
  	<!-- <?php include('errors.php'); ?> -->
	  
	  <h2>Добавьте свой рецепт!</h2>
  	<div class="input-group">
  		<label>Название</label>
  		<input type="text" name="name" required>
  	</div>
  	<div class="input-group">
  		<label>Описание</label>
  		<textarea type="text" name="description" cols="45" rows="8" required></textarea>
  	</div>
	<div class="input-group">
  		<label>Фотография</label>
  		<input type="file" name="file" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn">Добавить</button>
  	</div>  	
	</p><a href="lobby.php" class="btn" >Назад</a>
  </form>
</div>
</body>
</html>
<?php
	$db = mysqli_connect("localhost", "root", "", "recipe");
	$log=$_SESSION['login'];
	if (isset($_SESSION['login'])) :

	$name=mysqli_real_escape_string($db,$_POST['name']);
	$description=mysqli_real_escape_string($db,$_POST['description']);
	$id=mysqli_fetch_array(mysqli_query($db,"SELECT id FROM recipes ORDER BY id DESC LIMIT 1"))[0];
	//echo $id;
	$id++;
	if (!empty($_FILES['file'])){
		$file=$_FILES['file'];
		//$name=$file['name'];
		$pathFile=__DIR__.'/img/'.$id.'.jpg';
		
		if(!move_uploaded_file($file['tmp_name'], $pathFile)){
			echo 'The file was no uploaded';
		}
		else mysqli_query($db, "INSERT INTO recipes (id, name, description) VALUES ('$id', '$name', '$description')");
	}
	
	
	endif
?>