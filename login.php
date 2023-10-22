<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
<link rel="stylesheet" type="php" href="redict.php"> 
</head>
<body class="body_enter">

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
 <div class="block_under_header">
  <div class="header_enter">
  	<h2>Вход</h2>
  </div>
	 
  <form class="form_enter" method="post" action="login.php">
  <!--  -->
  	<div class="input-group">
  		<label>Логин</label>
  		<input type="text" name="login" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="pass">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn_enter" name="login_user">Вход</button>
  	</div>
  	<p>
  	Вы ещё не зарегистрированы? </p><a href="register.php" class="btn_enter" >Регистрация</a>
  	
  </form>
</div>
</body>
</html>