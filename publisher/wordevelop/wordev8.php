<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">	
	<div class="row">	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">		
		<h3>Глаголы</h3>  	
		<div class="post3">
			<p>Глаголы во вьетнамском языке не спрягаются.</p>
			<p>Глаголы не обладают формами лиц, времен, наклонениями.</p>
			<p>Однако, во вьетнамском языке имеются конструкции для выражения всех этих значений.</p>
			
			<h3>Настоящее, прошедшее и будущее время:</h3>


			<p>Для выражения значения настоящего времени :<span class="textweight">đang</span> </p>
			<p>Для выражения значения прошедшего времени:<span class="textweight">đã</span></p>
			<p>Для выражения значения будущего времени:<span class="textweight">sẽ</span> </p>
		</div
		<h3>Упражнение "Основы грамматики" №4:</h3> 	

		<div class="post3">
			<h3>Прочитайте слова и определите время действия.</h3>
			<p>Напротив каждого предложения напишите или: настоящее, будущее, прошедшее</p>
			<h3 >Tôi sẽ làm viec </h3>
			<h3 >Определите время: <input name="input1" id="input1" SIZE=20 step="any" onkeyup="PressEnter()" >.</h3>    <h3 class="text-danger" id="result1"></h3>
			<h3 >Tôi đang làm viec</h3>
			<h3 >Определите время: <input name="input2" id="input2" SIZE=20 step="any" onkeyup="PressEnter()" > .</h3>    <h3 class="text-danger" id="result2"></h3>
			<h3 >Tôi đã làm viec</h3>
			<h3 >Определите время: <input name="input3" id="input3" SIZE=20 step="any" onkeyup="PressEnter()" > .</h3>    <h3 class="text-danger" id="result3"></h3>


		</div>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>
<script>
//Определение времени
var buttonSubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightАnswer1="будущее"; //правильный ответ на первый вопрос
var rightАnswer2="настоящее"; //правильный ответ на второй вопрос
var rightАnswer3="прошедшее"; //правильный ответ на третий вопрос



document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.getElementById('BackWordPage').disabled = true; // кнопка продолжить недоступна для выбора - отключена

submit.addEventListener("mousedown", function cheking(event) {
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса активна
 var answer1 = document.getElementById('input1').value.trim(); // извлечение ответов из поля ввода
 var answer2 = document.getElementById('input2').value.trim(); 
 var answer3 = document.getElementById('input3').value.trim(); 

	if(rightАnswer1===answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightАnswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
	if(rightАnswer2===answer2){
		document.querySelector('#result2').textContent = "Правильно";
	}else if(rightАnswer2!=answer2){
		document.querySelector('#result2').textContent = "Неправильно";		
	};
	if(rightАnswer3===answer3){
		document.querySelector('#result3').textContent = "Правильно";
	}else if(rightАnswer3!=answer3){
		document.querySelector('#result3').textContent = "Неправильно";		
	};
	
 });



     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 	location.href = 'index.php?wordev9=value'; //переадресация на новую тренировку
 });
</script>