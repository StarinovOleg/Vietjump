<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

    <title>VietJump. Курсы вьетнамского языка для всех</title>
	<link rel="stylesheet" href="bootstrap.css">	
	<!--<script src="bootstrap.bundle.js"></script>-->
	<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

<!--Навигационная панель-->
<header>
		<nav class="navbar navbar-expand-lg navbar-light "> 
			<a href="index.php"><img src="logo1.png" class="cardpic" ></a>	
			<ul class="menu">
				<li><a href="index.php"class="btn btn-light"  >ГЛАВНАЯ</a></li>
				<!--<li>	<a href="index.php" class="btn btn-light" >СЛОВАРЬ</a></li>-->
				<li><a href="index.php?material=value" class="btn btn-light" >МАТЕРИАЛЫ</a></li>
				<li><a href="index.php?visualdic=value" class="btn btn-light">ВИЗУАЛЬНЫЙ СЛОВАРЬ</a></li>	
				<!--<li><a href="index.php?devlog=value" class="btn btn-light" >ДЕВЛОГ</a></li>-->
			</ul>
		</nav>
</header>
 
<!--Контент-->
<section>
<div class="container-fluid ">
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  bodypost  text-left text-md-center "> 
	
<div id="training">	
		<h2>Выбрать карточку для практики</h2>
		
		<h3>Тренировки:</h3>

		<a href="index.php?var=value" ><img src="images/cart1.png" class="cardpic animate1"></a>
		<a href="index.php?var2=value"><img src="images/cart2.png" class="cardpic animate1"></a>
		<a href="index.php?var5=value"><img src="images/cart7.png" class="cardpic animate1"></a>	
	
		<h3>Тематические курсы:</h3>

		<a href="index.php?var3=value"><img src="images/cart3.png" class="cardpic animate1" ></a>
		<a href="index.php?var6=value" ><img src="images/cart4.png" class="cardpic animate1" ></a>	
		<a href="index.php?var7=value"><img src="images/cart5.png" class="cardpic animate1" ></a>	
		<h3>Занятия по грамматике:</h3>
		<a href="index.php?var4=value"><img src="images/cart6.png" class="cardpic animate1" ></a>
		<h3>О ресурсе:</h3>
		<img src="backfoot.png" class="img-fluid ">
		<!--<button  class="btn-light btn-lg">УЗНАТЬ БОЛЬШЕ</button>-->
</div>	


<div>
 	<?php
	//СКРИПТ ОТРЫТИЯ карточек
		if(isset($_GET["var"]) && $_GET["var"] == 'value')		
		{
   		
		require_once 'dating.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');    
		} else if ((isset($_GET["var2"]) && $_GET["var2"] == 'value')) 	{
		require_once 'number.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');  	
		} else if ((isset($_GET["var3"]) && $_GET["var3"] == 'value')) 	{
		require_once 'comonwords.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		} else if ((isset($_GET["var4"]) && $_GET["var4"] == 'value')) 	{
		require_once 'wordevelop/wordev1.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		} else if ((isset($_GET["var5"]) && $_GET["var5"] == 'value')) 	{
		require_once 'adjective.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		}else if ((isset($_GET["var6"]) && $_GET["var6"] == 'value')) 	{
		require_once 'chatwords/chatword1.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		}else if ((isset($_GET["var7"]) && $_GET["var7"] == 'value')) 	{
		require_once 'developerwords/developerword1.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');		
		
		
		}else if((isset($_GET["visualdic"]) && $_GET["visualdic"] == 'value')){
		require_once 'visualdictionary.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>'); 
		}else if((isset($_GET["devlog"]) && $_GET["devlog"] == 'value')){
		require_once 'devlog.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>'); 
		 }else if((isset($_GET["material"]) && $_GET["material"] == 'value')){
		require_once 'material/iconsmaterial.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["auditor1"]) && $_GET["auditor1"] == 'value')){
		require_once 'auditor/auditor1.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		}else if((isset($_GET["comwords1"]) && $_GET["comwords1"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords1.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>'); 
		 }else if((isset($_GET["comwords2"]) && $_GET["comwords2"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords2.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 } else if((isset($_GET["comwords3"]) && $_GET["comwords3"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords3.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords4"]) && $_GET["comwords4"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords4.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords5"]) && $_GET["comwords5"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords5.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords6"]) && $_GET["comwords6"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords6.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords7"]) && $_GET["comwords7"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords7.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords8"]) && $_GET["comwords8"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords8.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords9"]) && $_GET["comwords9"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords9.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords10"]) && $_GET["comwords10"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords10.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords11"]) && $_GET["comwords11"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords11.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords12"]) && $_GET["comwords12"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords12.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords13"]) && $_GET["comwords13"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords13.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords14"]) && $_GET["comwords14"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords14.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords15"]) && $_GET["comwords15"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords15.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords16"]) && $_GET["comwords16"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords16.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords17"]) && $_GET["comwords17"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords17.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords18"]) && $_GET["comwords18"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords18.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords19"]) && $_GET["comwords19"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords19.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords20"]) && $_GET["comwords20"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords20.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords21"]) && $_GET["comwords21"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords21.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords22"]) && $_GET["comwords22"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords22.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords23"]) && $_GET["comwords23"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords23.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords24"]) && $_GET["comwords24"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords24.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords25"]) && $_GET["comwords25"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords25.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["comwords26"]) && $_GET["comwords26"] == 'value')){ //ссылка на страницу тренировки
		require_once 'training/comwords26.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 
		}else if((isset($_GET["cartm1"]) && $_GET["cartm1"] == 'value')){ //ссылка на страницу тренировки
		require_once 'material/cartm1.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>'); 
		}else if((isset($_GET["cartm2"]) && $_GET["cartm2"] == 'value')){ //ссылка на страницу тренировки
		require_once 'material/cartm2.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>'); 
		}else if((isset($_GET["cartm3"]) && $_GET["cartm3"] == 'value')){ //ссылка на страницу тренировки
		require_once 'material/cartm3.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>'); 		 
		 
		 
		 }else if((isset($_GET["wordev2"]) && $_GET["wordev2"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev2.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev3"]) && $_GET["wordev3"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev3.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev4"]) && $_GET["wordev4"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev4.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev5"]) && $_GET["wordev5"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev5.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev6"]) && $_GET["wordev6"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev6.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev7"]) && $_GET["wordev7"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev7.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev8"]) && $_GET["wordev8"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev8.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev9"]) && $_GET["wordev9"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev9.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');		 
		 }else if((isset($_GET["wordev10"]) && $_GET["wordev10"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev10.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev11"]) && $_GET["wordev11"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev11.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev12"]) && $_GET["wordev12"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev12.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev13"]) && $_GET["wordev13"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev13.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev14"]) && $_GET["wordev14"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev14.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev15"]) && $_GET["wordev15"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev15.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev16"]) && $_GET["wordev16"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev16.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["wordev17"]) && $_GET["wordev17"] == 'value')){ //ссылка на страницу тренировки
		require_once 'wordevelop/wordev17.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }
		 
		 else if((isset($_GET["chatword2"]) && $_GET["chatword2"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword2.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword3"]) && $_GET["chatword3"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword3.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword4"]) && $_GET["chatword4"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword4.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword5"]) && $_GET["chatword5"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword5.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword6"]) && $_GET["chatword6"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword6.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword7"]) && $_GET["chatword7"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword7.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword8"]) && $_GET["chatword8"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword8.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword9"]) && $_GET["chatword9"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword9.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword10"]) && $_GET["chatword10"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword10.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword11"]) && $_GET["chatword11"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword11.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["chatword12"]) && $_GET["chatword12"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/chatword12.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }
		 
		 
		 else if((isset($_GET["un2chatword1"]) && $_GET["un2chatword1"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword1.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 } else if((isset($_GET["un2chatword2"]) && $_GET["un2chatword2"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword2.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword3"]) && $_GET["un2chatword3"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword3.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword4"]) && $_GET["un2chatword4"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword4.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword5"]) && $_GET["un2chatword5"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword5.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword6"]) && $_GET["un2chatword6"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword6.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword7"]) && $_GET["un2chatword7"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword7.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword8"]) && $_GET["un2chatword8"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword8.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword9"]) && $_GET["un2chatword9"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword9.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword10"]) && $_GET["un2chatword10"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword10.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword11"]) && $_GET["un2chatword11"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword11.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword12"]) && $_GET["un2chatword12"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword12.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if((isset($_GET["un2chatword13"]) && $_GET["un2chatword13"] == 'value')){ //ссылка на страницу тренировки
		require_once 'chatwords/un2chatword13.php';
	//удаление элемента див с главной страницы 
		 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }
		 
		 
		 else if ((isset($_GET["developerword2"]) && $_GET["developerword2"] == 'value')) 	{
		require_once 'developerwords/developerword2.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if ((isset($_GET["developerword3"]) && $_GET["developerword3"] == 'value')) 	{
		require_once 'developerwords/developerword3.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if ((isset($_GET["developerword4"]) && $_GET["developerword4"] == 'value')) 	{
		require_once 'developerwords/developerword4.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if ((isset($_GET["developerword5"]) && $_GET["developerword5"] == 'value')) 	{
		require_once 'developerwords/developerword5.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if ((isset($_GET["developerword6"]) && $_GET["developerword6"] == 'value')) 	{
		require_once 'developerwords/developerword6.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if ((isset($_GET["developerword7"]) && $_GET["developerword7"] == 'value')) 	{
		require_once 'developerwords/developerword7.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }else if ((isset($_GET["developerword8"]) && $_GET["developerword8"] == 'value')) 	{
		require_once 'developerwords/developerword8.php';
	//удаление элемента див с главной страницы 
			 echo ('<script>training.parentNode.removeChild(training);	 
		 </script>');
		 }
	?>  
 </div >

	</div>
	</div>	
</div>
</section>
<!--Футер-->

<footer class="page-footer font-small blue pt-4 comwords" >
	<div class="container-fluid row ">
	    <div class="col-md-8">
			<p>Написать нам: hromoi@inbox.ru</p>
		</div>
		
	    <div class="col-md-4 text-left text-md-right">		
			<p> Copyright Starinov Oleg 0.7.4</p>
		</div>		
	</div>
 </footer>


</body>
</html>
