<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
			<div id="deleteid">
			<img src="book.png" class="cardpic" >
			<h3>Урок 1</h3> 
			<h2>Bài 1</h2> 	
			<h3>Основы грамматики</h3> 	
			<button onclick="start" class="button  btn-light btn-lg" id="start">НАЧАТЬ</button>	
			</div>
		<!--новый блок после перехода из тренировки--> 
	</div>
	
	</div>
</div>

<script>
//НАЖАТИЕ СТАРТ
var newbutton = document.getElementById("start"); // нажатие кнопки старт
//кнопка старт
newbutton.addEventListener("mousedown", function(event) { // событие при нажатии мышью
if (event.which == 1)
	location.href = 'index.php?wordev2=value'; //переадресация на новую тренировку
});




</script>