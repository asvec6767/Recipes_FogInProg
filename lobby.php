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
  if (isset($_GET['recipe_3'])) {
	$recipe=(int)$_GET['recipe_3'];
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body class="body_lk">

<!-- <?php include "header.php";?> -->
<div class="block_under_header_lk">
<div class="header_lk">

	<h1><strong><?php echo $_SESSION['login']; ?></strong></h1>
	<img class="user_photo" src="photo/user.png">
	
</div>
<div class="content_lk">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  
	$db = mysqli_connect("localhost", "root", "", "recipe");
	$log=$_SESSION['login'];
	if (isset($_SESSION['login'])) : ?>
    	<p>Добро пожаловать <strong><?php echo $_SESSION['login']; ?></strong></p>
		<div class="history">
		<p>Ваши последние блюда <br><strong><?php
			$recipe_3=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_3 FROM users WHERE login='$log'"));//получение ресурса объекта & преобразование ресурса в массив текста
			$recipe_2=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_2 FROM users WHERE login='$log'"));
			$recipe_1=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_1 FROM users WHERE login='$log'"));
			$history.=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$recipe_3[0]'"))[0].', ';
			$history.=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$recipe_2[0]'"))[0].', ';
			$history.=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$recipe_1[0]'"))[0];
		echo $history; 
		?></strong></p></div>
		<div class="try">
		<p>Возможно вам стоит попробовать <strong><?php
		function DivDif($points,$count){
			$result=0.0;
			for ($n = 0; $n <= $count; $n++)
			{
				$multiply = 1.0;
				for ($m = 0; $m <= $count; $m++)
				{
					if ($n != $m) $multiply *= ($n-$m);
				}
				$result += $points[$n] / $multiply;
			}
			return $result;
		}
		function Newton($points, $count, $x) {
			$result = $points[0];//result=f(x0)
			for ($i = 1; $i < $count; $i++)
			{
			    $multiply = 1.0;
			    for ($j = 0; $j < $i; $j++)
			    {
					$multiply *= ($x - $j);
			    }
				$result += $multiply * DivDif($points, $i);
			}
			return $result;
		}
		
			$recipe_3=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_3 FROM users WHERE login='$log'"));//получение ресурса объекта & преобразование ресурса в массив текста
			$recipe_2=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_2 FROM users WHERE login='$log'"));
			$recipe_1=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_1 FROM users WHERE login='$log'"));
			//$history.=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$recipe_3[0]'"))[0].', ';
			//$history.=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$recipe_2[0]'"))[0].', ';
			//$history.=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$recipe_1[0]'"))[0];
		$count = 3;//Count of memory (search history)
		$points = [$recipe_1[0], $recipe_2[0], $recipe_3[0]];
		$r=3;//next Y for predict X

		$Newton= Newton($points, $count, $r);
		//echo $Newton;
		$predict=mysqli_fetch_array(mysqli_query($db, "SELECT name FROM recipes WHERE id='$Newton'"))[0];
		echo $predict; 
		?></strong></p>
		</div>
		<div class="Login-popup"><a href="recipes.php" class="registration" >Посмотреть рецепты</a></div>
		<div class="Login-popup"><a href="addrecipe.php" class="registration" >Добавить свой рецепт</a></div>
		<div class="Login-popup"><a href="index.php?logout='1'" class="registration" >Выйти из личного кабинета</a></div>
		
	<?php endif ?>
</div>
	</div>	
</body>
</html>