<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">
	
	<div class="row">
	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
		<h3>Единственное и множественное число существительных</h3>  	
		<div class="post3">
			<p>Во вьетнамском языке существительные не имеют единственное и множественное число. </p>
			<p>Однако, для обозначения множественного числа во вьетнамском языке существует специальное слово.</p>
			<p>Специальные слова <span class="textweight">những</span> и <span class="textweight">các</span> ставятся перед существительными.</p>
			<p>За этим словом идет уточняющее определение.</p>
			<p>Слово <span class="textweight">những</span> используется для сопоставления множественного числа.</p>
			<p>Слово <span class="textweight">những</span> используется перед вопросительными местоимениями <span class="textweight">ai</span> кто? <span class="textweight">đầu</span> где? <span class="textweight">gì</span>что?</p>
			<p>Слово <span class="textweight">các</span> определяет множество, как единое целое и не требует специального определения.</p>
			<p> Примеры:</p>
			<p><span class="textweight">Những quyển sách này.</span> (Эти книги.)</p>
			<p><span class="textweight">Những người này là ai?</span>  (Кто эти люди?)</p>
			<p><span class="textweight">Những con chim xinh đẹp.</span>(Красивые птицы)</p>
			<p><span class="textweight">Các sinh viên.</span> (Студенты) </p>
			<p><span class="textweight">Các con trong gia đình.</span> (Дети в семье) </p>
			<p><span class="textweight">Các tháng trong năm.</span> (Месяцы в году)</p>
		</div>
		<h3>Упражнение "Основы грамматики" №2:</h3> 	

		<div class="post3">	
			<h3>Вставьте в пропущенном месте слова những и các.</h3>	
				<h3><input name="input1" id="input1" SIZE=5 step="any" onkeyup="PressEnter()" > con chim (Птицы) </h3>   <h3 class="text-danger" id="result1"></h3>
				<h3><input name="input2" id="input2" SIZE=5 step="any" onkeyup="PressEnter()" > bạn(Друзья) 		</h3>	 <h3 class="text-danger" id="result2"></h3>	
				<h3><input name="input3" id="input3" SIZE=5 step="any" onkeyup="PressEnter()" > con mèo(Кошки)</h3>      <h3 class="text-danger" id="result3"></h3>
				<h3><input name="input4" id="input4" SIZE=5 step="any" onkeyup="PressEnter()" > cháu(внуки)</h3>			 <h3 class="text-danger" id="result4"></h3>

		</div>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>




<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="những"; //правильный ответ на первый вопрос
var rightanswer2="các"; //правильный ответ на второй вопрос
var rightanswer3="những"; //правильный ответ на третий вопрос
var rightanswer4="các"; //правильный ответ на четвертый вопрос



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
	location.href = 'index.php?wordev4=value'; //переадресация на новую тренировку


 });

</script>