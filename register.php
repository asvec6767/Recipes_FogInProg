<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <!-- <link rel="stylesheet" type="text/css" href="style_work.css"> -->
</head>


<body class="body_enter">
<?php include "header.php";?>
<div class="block_under_header">

  <div class="header_enter">
  	<h2>Регистрация</h2>
  </div>
	
  <form class="form_enter" method="post" action="register.php">
  	<!--  -->
  	<div class="input-group">
  	  <label>Логин</label>
  	  <input type="text" name="login" value="<?php echo $login; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn_enter" name="reg_user">Регистрация</button>
  	</div>
  	<p>
	  Уже зарегистрированы?</p> <a href="login.php" class="btn_enter">Войти</a>
  	
  </form>

</div>
</body>
</html>