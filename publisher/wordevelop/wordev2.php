<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">
	
	<div class="row">
	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
		<h3>Имя существитвительное</h3>  	
		<div class="post3">
			<p>Во вьетнамском языке существительные бывают <span class="textweight">исчисляемыми</span> и <span class="textweight">неисчисляемыми</span>.</p>
			<p><span class="textweight">Исчисляемые существительные</span> - это существительные, которые можно посчитать. </p>
			<p>Исчисляемые существительные могут быть одушевленными и неодушевленными.</p>
			<p>Пример исчисляемых существительных:<span class="textweight">bút</span> ручка , <span class="textweight">gối</span> подушка , <span class="textweight">mèo</span> кошка.</p>
			<p> Если нам требуется иcпользовать существительное вместе с числительным (сосчитать), то обязательно используют:</p>
			<p> <span class="textweight">con</span>- для одушевленных существительных.</p>
			<p>Например:</p>
			<p><span class="textweight">Hai con mèo</span> : Две кошки.</p>
			<p><span class="textweight">Ba con cá vàng</span> :Три рыбки.</p>
			<p>  и </p>
			<p><span class="textweight">cái</span>- для неодушевленных существительных.</p>
			<p>Например:</p>			
			<p><span class="textweight">Hai cái bút</span> : Две ручки.</p>
			<p><span class="textweight">Một cái gối</span> : Одна подушка.</p>
			<p>Если существительные не исчисляемые, то они никогда не употребляются вместе со словами <span class="textweight">cái</span>, <span class="textweight">con</span>.</p>
		</div>
		<h3>Упражнение "Основы грамматики" №1:</h3> 		
		<div class="post3">	
			<p>Напишите какое слово <span class="textweight">con</span> или <span class="textweight">cái</span> используется в следующих предложениях:</p>
			<h3 >одна <input name="input1" id="input1" SIZE=4 step="any" onkeyup="PressEnter()" > кошка;</h3>     <h2 class="text-danger" id="result1"></h2>
			<h3 >две <input name="input2" id="input2" SIZE=4 step="any" onkeyup="PressEnter()" > машины;</h3>     <h2 class="text-danger" id="result2"></h2>
			<h3 >один <input name="input3" id="input3" SIZE=4 step="any" onkeyup="PressEnter()"> автобус;</h3>   <h2 class="text-danger" id="result3"></h2>
			<h3 >три <input name="input4" id="input4" SIZE=4 step="any" onkeyup="PressEnter()" > курицы.</h3>     <h2 class="text-danger" id="result4"></h2>
		</div>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>

<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="con"; //правильный ответ на первый вопрос
var rightanswer2="con"; //правильный ответ на второй вопрос
var rightanswer3="cái"; //правильный ответ на третий вопрос
var rightanswer4="con"; //правильный ответ на четвертый вопрос



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
	
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?wordev3=value'; //переадресация на новую тренировку


 });

</script>