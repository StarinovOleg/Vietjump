<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">	
	<div class="row">	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">		
		<h3>Глаголы</h3>  	
		<div class="post3">
			
			<h3>Образование глаголов из прилагательных:</h3>
			<p>Существуют глаголы, которые образуются от прилагательных</p>
			<p>Например, по аналогии с русским языком: худой (прилагательное) предобразуется в глагол (худеть).</p>
			<p>Или, по аналогии с русским языком: полный(прилагательное) преобразуется в глагол (полнеть).</p>
			
			<p>Переведем примеры:</p>
			
			<p>Худой (прилагательное) :<span class="textweight">ốm</span> преобразуется в  Худеть (глагол):<span class="textweight">ốm đi</span>.</p>
			<p>Полный (прилагательное):<span class="textweight">mập</span>преобразуется в  Полнеть (глагол):<span class="textweight">mập ra</span>.</p>
			<p>Наверное, вы заметили, что слова после прилагательных разные - это объясняется улучшением или ухудшением признака (прилагательного), после его преобразования в глагол.</p>
			<p>Если происходит ухудшение признака (худеть), то после прилагательного ставят слово <span class="textweight">đi</span></p>
			<p>Если происходит улучшение признака (полнеть), то после прилагательного ставят слово <span class="textweight">ra</span></p>
		
		</div>
		<p>Упражнение "Основы грамматики" №5:</p> 	

		<div class="post3">
			<h3>Определите ухудшение или улучшение признака</h3>
			<p>После прилагательного впишите нужное слово</p>
			<h3 >Хороший(xinh)</h3>
			<h3 >Хорошеть (xinh): <input name="input1" id="input1" SIZE=20 step="any" onkeyup="PressEnter()" > .</h3>    <h3 class="text-danger" id="result1"></h3>
			<h3 >Безобразный (xấu)</h3>
			<h3 >Безобразничать(xấu): <input name="input2" id="input2" SIZE=20 step="any" onkeyup="PressEnter()" > .</h3>    <h3 class="text-danger" id="result2"></h3>
			


		</div>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>			
		
		
		
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>
<script>
//проверка на хороший плохой
var buttonSubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightАnswer1="ra"; //правильный ответ на первый вопрос
var rightАnswer2="đi"; //правильный ответ на второй вопрос



document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка

document.getElementById('BackWordPage').disabled = true; // кнопка продолжить недоступна для выбора - отключена

submit.addEventListener("mousedown", function cheking(event) {
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса активна
 var answer1 = document.getElementById('input1').value.trim(); // извлечение ответов из поля ввода
 var answer2 = document.getElementById('input2').value.trim(); 

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
 });

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 	location.href = 'index.php?wordev11=value'; //переадресация на новую тренировку
 });
</script>