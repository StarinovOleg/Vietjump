<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
	

			<h3>Переведите предложения</h3>		
			<p><img src="images/word.png" class="cardpic"><p>
			<p><span class="textweight"> Выберете следующие варианты: Ban tên gì, Tôi là Oleg, Anh khỏe không, Tôi ở  Hà Nội</span></p>
			
	<div class="row post3">
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-8 col-sm-8 col-xs-8" >			
	 		<h3 >Как тебя зовут? </h3>
			<h3 >Ты: <input name="input1" id="input1" SIZE=10 step="any" onkeyup="PressEnter()" >?</h3>    <h2 class="text-danger" id="result1"></h2>
		</div>
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
	</div>

	<div class="row post3">
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-8 col-sm-8 col-xs-8" >	
				<h3 >Меня зовут Олег</h3>			
				<h3 >Ты: <input name="input2" id="input2" SIZE=10 step="any" onkeyup="PressEnter()" >.</h3>	 <h2 class="text-danger" id="result2"></h2>
		</div>
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
	</div>

	<div class="row post3">
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-8 col-sm-8 col-xs-8" >	
				<h3 >Как твои дела?</h3>				
				<h3 >Ты: <input name="input3" id="input3" SIZE=10 step="any" onkeyup="PressEnter()" >?</h3> <h2 class="text-danger" id="result3"></h2>   			
		</div>
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
	</div>
	
	<div class="row post3">
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-8 col-sm-8 col-xs-8" >	
				<h3 >Я живу в Ха Ное</h3>				
				<h3 >Ты: <input name="input4" id="input4" SIZE=10 step="any" onkeyup="PressEnter()" >.</h3> <h2 class="text-danger" id="result4"></h2>   	
		</div>
		<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
	</div>

			<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	

			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		

	</div>
			
			
		
     </div>			
	</div>


<script>

//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Ban tên gì"; //правильный ответ на первый вопрос
var rightanswer2="Tôi là Oleg"; //правильный ответ на второй вопрос
var rightanswer3="Anh khỏe không"; //правильный ответ на третий вопрос
var rightanswer4="Tôi ở  Hà Nội"; 



document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.querySelector('#input4').value = ""; // очистка

document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 var answer1 = document.getElementById('input1').value.trim();
 var answer2 = document.getElementById('input2').value.trim(); 
 var answer3 = document.getElementById('input3').value.trim();
 var answer4 = document.getElementById('input4').value.trim(); 

	if(rightanswer1==answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightanswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
	if(rightanswer2==answer2){
		document.querySelector('#result2').textContent = "Правильно";
	}else if(rightanswer2!=answer2){
		document.querySelector('#result2').textContent = "Неправильно";		
	};
	if(rightanswer3==answer3){
		document.querySelector('#result3').textContent = "Правильно";
	}else if(rightanswer3!=answer3){
		document.querySelector('#result3').textContent = "Неправильно";		
	};
	if(rightanswer4==answer4){
		document.querySelector('#result4').textContent = "Правильно";
	}else if(rightanswer4!=answer4){
		document.querySelector('#result4').textContent = "Неправильно";		
	};
 });

  //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords25=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>