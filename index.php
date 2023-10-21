<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="Sss" content="...">
  <title> site </title>

<!-- -css file link-
<link rel="stylesheet" type="text/css" href="style_index.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style_header1.css">
<link rel="stylesheet" type="text/css" href="style_cards.css">
<link rel="stylesheet" type="text/css" href="style_search.css">
<link rel="stylesheet" type="text/css" href="style_filters.css">
<link rel="stylesheet" type="text/css" href="style_slidecontainer.css">
 -->



<!---icons link from boxicons--->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<!---icons link from remixicon--->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!---google fonts usage--->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">



<!-- -swipe-
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/> -->



</head>

<body> 


 <!-- <header>
	<a href="#" class="logo"> Рецепты </a> 
  <ul class="navlist">
	<li> <a href="register.php">регистрация</a> </li>
	<li> <a href="login.php">вход</a> </li>
   
    <li><img class="user_icon" src="photo/user.png">  </li> 
  <li></li>
  </ul>
 </header>

  -->
  <?php include "header.php";?>
 
<section class="info">
    <div class="futter" ><img src="futter5.jpg"/></div>
    

</section>







<section class="searching">
    <input type="text" placeholder="Искать здесь...">
    <button type="submit"></button>
</section>
<div class="slidecontainer">
  <p>Желаемая калорийность:</p>
  <input type="range" min="30" max="1000" value="1000" class="slider" id="myRange">
</div>

<!-- <div class="slidercontainer">
 <input type="range" min="0" max="100" value="0" class="slider" id="slider-min"> 
  <input type="range" min="0" max="100" value="100" class="slider" id="slider-max">
</div> -->


<!-- <div class="filter">
  <div>
    <span>Фильтр</span>
    <div><number>0</number><number>5</number></div>
<div id="rating" class="slider">
      <div class="block-min" onMouseDown="moveRange( this);" onTouchStart="moveRange( this);"></div>
      <div class="color-range"></div>
      <div class="block-max" onMouseDown="moveRange(this)" onTouchStart="moveRange( this);" ></div>
    </div></div></div>
 -->






    <!-- Control buttons -->
<div class="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Показать все</button>
    <button class="btn" onclick="filterSelection('time')"> Мало времени</button>
    <button class="btn" onclick="filterSelection('top')">Hit </button>
    <button class="btn" onclick="filterSelection('children')"> Детям</button> 
    <button class="btn" onclick="filterSelection('no_meat')"> Vegan</button>
    <button class="btn" onclick="filterSelection('300kk')"> До 300 ккал</button>
    <button class="btn" onclick="filterSelection('400kk')"> До 400 ккал</button>
    <button class="btn" onclick="filterSelection('500kk')"> До 500 ккал</button>
    <button class="btn" onclick="filterSelection('rice')"> Рис</button>
    <button class="btn" onclick="filterSelection('pasta')"> Паста</button>
  </div>
  <!-- 
   Фильтруемые элементы. Примечание что некоторые из них имеют несколько имен классов
    (это может быть использовано, если они принадлежат к нескольким категориям) 
  <div class="container">
    <div class="filterDiv cars">БМВ</div>
    <div class="filterDiv colors fruits">Апельсин</div>
    <div class="filterDiv cars">Вольво</div>
    <div class="filterDiv colors">Красный</div>
    <div class="filterDiv cars animals">Мустанг</div>
    <div class="filterDiv colors">Синий</div>
    <div class="filterDiv animals">Кот</div>
    <div class="filterDiv animals">Собака</div>
    <div class="filterDiv fruits">Арбуз</div>
    <div class="filterDiv fruits animals">Киви</div>
    <div class="filterDiv fruits">Банан</div>
    <div class="filterDiv fruits">Лимон</div>
    <div class="filterDiv animals">Корова</div>
  </div>
 -->


<!-- <section class="dishes"> -->
    
     
        <div class="container">
          <div class="filterDiv no_meat 400kk 500kk pasta">  <form class="text" action="index.php" method="post"><button  class="choose" name="btn_1" id="1Pic" 
        data-title="Удон с шиитаке"><img src="photo/udon.png" alt="Удон" class="round"></button>
      <p>Удон с шиитаке</p>
      <h4>30-40 мин</p>
      <h4>346 ккал</p>
      </form></div>
      <div class="filterDiv time children 300kk 400kk 500kk"><form  class="text" action="index.php" method="post"><button  class="choose" name="btn_2" id="2Pic" 
        data-title="Сырники с голубикой"><img src="photo/syrnik.png" alt="Сырники" class="round"></button>
      <p>Сырники с голубикой</p>
      <h4>15-20 мин</p>
      <h4>278 ккал</p>
      </form></div>
    <div class="filterDiv  top 400kk 500kk"> <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_3" id="3Pic" 
        data-title="Суп с креветками"><img src="photo/soup.png" alt="Суп" class="round"></button>
    <p>Суп с креветками</p>
    <h4>35-45 мин</p>
    <h4>387 ккал</p>
    </form></div>
    <div class="filterDiv top 400kk 500kk rice"> <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_4" id="4Pic"
        data-title="Рис азиатский"><img src="photo/rice.png" alt="Рис" class="round"></button>
    <p>Рис азиатский</p>
    <h4>20-30 мин</p>
    <h4>325 ккал</p>
    </form></div>
    <div class="filterDiv  top 500kk"><form  class="text" action="index.php" method="post"><button  class="choose" name="btn_5" id="5Pic" 
        data-title="Рагу в кокосе"><img src="photo/coconut.png" alt="Рагу" class="round"></button>
    <p>Рагу в кокосе</p>
    <h4>40-50 мин</p>
    <h4>432 ккал</p>
    </form></div>
    <div class="filterDiv children 400kk 500kk"> <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_6" id="6Pic" 
        data-title="Суп детский"><img src="photo/det soup.png" alt="Суп детский" class="round"></button>
      <p>Суп детский</p>
      <h4>20-30 мин</p>
    <h4>356 ккал</p>
    </form></div>
    <div class="filterDiv  time top 500kk pasta"> <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_7" id="7Pic" 
        data-title="Паста болоньезе"><img src="photo/pasta.png" alt="Паста" class="round"></button>
      <p>Паста болоньезе</p>
      <h4>20-30 мин</p>
    <h4>402 ккал</p>
    </form></div>
    <div class="filterDiv no_meat 400kk 500kk"><form  class="text" action="index.php" method="post"><button  class="choose" name="btn_2" id="8Pic" 
      data-title="Боул с нутом"><img src="photo/boul.png" alt="Боул" class="round" ></button>
    <p>Боул с нутом</p>
    <h4>35-45 мин</p>
    <h4>350 ккал</p>
    </form></div>
    <div class="filterDiv 300kk 400kk 500kk"><form  class="text" action="index.php" method="post"><button  class="choose" name="btn_2" id="9Pic" 
      data-title="Каенг лян"><img src="photo/kaeng.png" alt="Каенг" class="round" ></button>
    <p>Каенг лян</p>
    <h4>30-35 мин</p>
    <h4>245 ккал</p>
    </form></div>

        </div>

    
<!--   </section> -->

<!---js usage--->
<script src="filtration.js"></script>
<!-- <script src="slider.js"></script> -->
<script src="slider1.js"></script>
</body>
</html>
