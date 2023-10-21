<!doctype html>
<html>
    <head>
        <meta charset = "utf8" />
        <title>Бесконечный скроллинг с JavaScript</title>
         <!---<link rel="stylesheet" type="text/css" href="style1.css">--->
        <link rel="stylesheet" href="style_recipes.css"><!---Ванин--->
    </head>
    <body>
   
 <?php include "header.php";?>
 
        <?php
        session_start(); 
        $db = mysqli_connect("localhost", "root", "", "recipe");
	    $log=$_SESSION['login'];
	    //$relaxes = mysqli_query($db, "SELECT relaxes FROM users WHERE login='$log'");//получение ресурса объекта
	    //$row = mysqli_fetch_array($relaxes);//преобразование ресурса в массив текста
        //$array_names=array("Физический","Ментальный","Эмоциональный","Социальный","Сенсорный","Творческий","Духовный");
        ?>
        <!--<p>Вы выбрали <strong><?php// echo $array_names[$row[0]]; ?></strong> отдых</p>-->
        <div id="infinite-scroll">
            <!--<div>-->
     <!--<script>
	 //var relax = '//< ?php echo $row[0];?>';
	 //var array=["Ph","Ment","Emot","Soc","Sensor","Art","Spir"];
	 //var folder=array[relax-1];
		//read file
		//var array = ["Иван","Соня","Семен","Говно","Сам говно","Собоофолвф фврмрфш фвм"];
		//import { array } from './relaxes.js'
		//print first text-->
        <?php
		for( $i = 1; $i < 10; $i++ ) {
			
			$names = mysqli_query($db, "SELECT name FROM recipes WHERE id='$i'");//получение ресурса объекта
			$descriptions = mysqli_query($db, "SELECT description FROM recipes WHERE id='$i'");//получение ресурса объекта
			$name = mysqli_fetch_array($names);//преобразование ресурса в массив текста
			$description = mysqli_fetch_array($descriptions);
			?>
			<script>
			
			var name = '<?php echo $name[0];?>';
			var text = '<?php echo $description[0];?>';
			var i = '<?php echo $i;?>';
            document.write('<div class="card"> <img src="img/'+ i + '.jpg" alt="img' + i + '"/>');
			document.write('<div class= "card-content" ><h3 class="card-name">'+name+'</h3>'+'<br>');
			document.write('<h6 class="card-text">'+text+'</h6>'+"</div></div>");
			document.write('<form method="post"><input class="cook" type="submit" name="cook'+i+'" id="cook'+i+'" value="Приготовить"/><br></form>');</script>
		<?php } 
			for( $i = 1; $i < 10; $i++ ) {
				if(array_key_exists('cook' . $i,$_POST)){
					$recipe_3=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_3 FROM users WHERE login='$log'"));
					$recipe_2=mysqli_fetch_array(mysqli_query($db, "SELECT recipe_2 FROM users WHERE login='$log'"));

					mysqli_query($db, "UPDATE users SET recipe_3 = '$i' WHERE login='$log'");
					mysqli_query($db, "UPDATE users SET recipe_2 = '$recipe_3[0]' WHERE login='$log'");
					mysqli_query($db, "UPDATE users SET recipe_1 = '$recipe_2[0]' WHERE login='$log'");
				}
			}
		?>
     
          <!-- </div>-->
        </div>
        <!--<div>-->
        <script>
       
            window.addEventListener("scroll", function(){
           
                var block = document.getElementById('infinite-scroll');
                var counter = 1;
               
                var contentHeight = block.offsetHeight;      // 1) высота блока контента вместе с границами
                var yOffset       = window.pageYOffset;      // 2) текущее положение скролбара
                var window_height = window.innerHeight;      // 3) высота внутренней области окна документа
                var y             = yOffset + window_height;
               
                // если пользователь достиг конца
                if(y >= contentHeight)
                {for( let i = 0; i < 10; i++ ) {
                    //загружаем новое содержимое в элемент
                    block.innerHTML = block.innerHTML + '<div class="card"> <img src="img/'+folder+'/' + i%7 + '.jpg" alt="img' + i%7 + '"/>'+'<div class= "card-content" ><h3 class="card-name">'+names[i%7]+'</h3>'+'<br>'+'<h6 class="card-text">'+textes[i%7]+'</h6>'+"</div></div>";
                    //block.innerHTML = block.innerHTML + names[i%7]+'<br>';
					//block.innerHTML = block.innerHTML + textes[i%7]+"</div>";
					}<?php
						for( $i = 1; $i < 10; $i++ ) {
							$names = mysqli_query($db, "SELECT name FROM recipes WHERE id='$i'");//получение ресурса объекта
							$descriptions = mysqli_query($db, "SELECT description FROM recipes WHERE id='$i'");//получение ресурса объекта
							$name = mysqli_fetch_array($names);//преобразование ресурса в массив текста
							$description = mysqli_fetch_array($descriptions);
					?>
			
			var name = '<?php echo $name[0];?>';
			var text = '<?php echo $description[0];?>';
			var i = '<?php echo $i;?>';
            document.write('<div class="card"> <img src="img/'+ i + '.jpg" alt="img' + i + '"/>');
			document.write('<div class= "card-content" ><h3 class="card-name">'+name+'</h3>'+'<br>');
			document.write('<h6 class="card-text">'+text+'</h6>'+"</div></div>");
					<?php } ?>
                }
            });
           
        </script>
    
    </body>
</html>