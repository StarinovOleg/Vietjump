<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">	
	<div class="row">	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">		
		<h3>Превосходная степень сравнения прилагательных</h3>  	
		<div class="post3">
			<p>Превосходная степень сравнения прилагательного означает высшую степень проявления признака.</p>
			<p>Например: самый красивый, красивее.</p>
			<p>Во вьетнамском языке существует два типа образования превосходных степеней:</p>
			<p>Прилагательное: <span class="textweight">nhất</span>.</p>
			<p>Прилагательное <span class="textweight">nhất</span> аналогичное(самый).</p>
			<p>Пример:<span class="textweight">Đẹp nhất</span>(Самый красивый)</p>
			<p>Прилагательное:<span class="textweight">hơn cà</span> аналогичное добавлению суффикса в русском языке(красивЕЕ).</p>
			<p><span class="textweight">Đẹp hơn cà</span>(красивее всего)</p>
			<p>Множественная форма <span class="textweight">hơn thật cà</span> аналогиченое (красивее всех).</p>
		</div>
		<h3>Упражнение "Основы грамматики" №3:</h3> 	

		<div class="post3">
			<h3>Образуйте сравнительные степени прилагательных.</h3>
			<p>В пропущенных строках напишите исходное прилагательное вместе со степенью сравнения.</p>
			
			<table class=" table table-striped">
			<tr><td><span class="textweight">Перевод</span></td> <td><span class="textweight">Прилагательное</span></td> <td><span class="textweight">Сравнение на равном уровне (как)</span></td> <td><span class="textweight">Превосходная степень сравнения(самый)</span></td> <td><span class="textweight">Превосходная степень сравнения(...ЕЕ всего)</span></td> <td><span class="textweight">Превосходная степень сравнения(...ЕЕ всех)</span></td></tr>
			<tr>
				<td>красивый</td> <td>đẹp</td> 
				<td>đẹp như</td><td>đẹp nhất</td><td>đẹp hơn cà</td><td>đẹp hơn thật cà</td>
			</tr>			
			<tr><td>высокий</td> <td>cao</td> 
				<td><input name="input1" id="input1"    SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result1"></h3></td>
				<td><input name="input11" id="input11"   SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result11"></h3>	</td>
				<td><input name="input111" id="input111"  SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result111"></h3></td>
				<td><input name="input1111" id="input1111" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result1111"></h3></td>
			
			</tr>
			<tr><td>низкий</td> <td>ngắn</td> 
				<td><input name="input2" id="input2" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result2"></h3></td>
				<td><input name="input22" id="input22" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result22"></h3></td>
				<td><input name="input222" id="input222" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result222"></h3></td>
				<td><input name="input2222" id="input2222" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result2222"></h3></td>
			</tr>
			<tr><td>большой</td> <td>to</td> 
				<td><input name="input3" id="input3" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result3"></h3></td>
				<td><input name="input33" id="input33" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result33"></h3></td>
				<td><input name="input333" id="input333" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result333"></h3></td>
				<td><input name="input3333" id="input3333" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result3333"></h3></td>
				</tr>
			<tr><td>широкий</td> <td>rộng</td> 
				<td><input name="input4" id="input4" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result4"></h3></td>
				<td><input name="input44" id="input44" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result44"></h3></td>
				<td><input name="input444" id="input444" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result444"></h3></td>
				<td><input name="input4444" id="input4444" SIZE=10 step="any" onkeyup="PressEnter()" ><h3 class="text-danger" id="result4444"></h3>	</td>
			</tr>
			</table>
		</div>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>




<script>
								//УПРАЖНЕНИЕ
//Правильные ответы
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1=""; //правильный ответ на первый вопрос
var rightanswer11=""; //правильный ответ на второй вопрос
var rightanswer111=""; //правильный ответ на третий вопрос
var rightanswer1111=""; //правильный ответ на четвертый вопрос

var rightanswer2=""; //правильный ответ на первый вопрос
var rightanswer22=""; //правильный ответ на второй вопрос
var rightanswer222=""; //правильный ответ на третий вопрос
var rightanswer2222=""; //правильный ответ на четвертый вопрос

var rightanswer3=""; //правильный ответ на первый вопрос
var rightanswer33=""; //правильный ответ на второй вопрос
var rightanswer333=""; //правильный ответ на третий вопрос
var rightanswer3333=""; //правильный ответ на четвертый вопрос

var rightanswer4=""; //правильный ответ на первый вопрос
var rightanswer44=""; //правильный ответ на второй вопрос
var rightanswer444=""; //правильный ответ на третий вопрос
var rightanswer4444=""; //правильный ответ на четвертый вопрос

//ОЧИСТКА БЛОКОВ
document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input11').value = ""; // очистка
document.querySelector('#input111').value = ""; // очистка
document.querySelector('#input1111').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input22').value = ""; // очистка
document.querySelector('#input222').value = ""; // очистка
document.querySelector('#input2222').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.querySelector('#input33').value = ""; // очистка
document.querySelector('#input333').value = ""; // очистка
document.querySelector('#input3333').value = ""; // очистка
document.querySelector('#input4').value = ""; // очистка
document.querySelector('#input44').value = ""; // очистка
document.querySelector('#input444').value = ""; // очистка
document.querySelector('#input4444').value = ""; // очистка

document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 //ВАРИАНТЫ ПОЛЬЗОВАТЕЛЯ
 var answer1 = document.getElementById('input1').value.trim();
 var answer11 = document.getElementById('input11').value.trim(); 
 var answer111 = document.getElementById('input111').value.trim(); 
 var answer1111 = document.getElementById('input1111').value.trim();
 var answer2 = document.getElementById('input2').value.trim();
 var answer22 = document.getElementById('input22').value.trim(); 
 var answer222 = document.getElementById('input222').value.trim(); 
 var answer2222 = document.getElementById('input2222').value.trim(); 
 var answer3 = document.getElementById('input3').value.trim();
 var answer33 = document.getElementById('input33').value.trim(); 
 var answer333 = document.getElementById('input333').value.trim(); 
 var answer3333 = document.getElementById('input3333').value.trim(); 
 var answer4 = document.getElementById('input4').value.trim();
 var answer44 = document.getElementById('input44').value.trim(); 
 var answer444 = document.getElementById('input444').value.trim(); 
 var answer4444 = document.getElementById('input4444').value.trim(); 

 
//первый блок таблицы- первая строка
	if(rightanswer1==answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightanswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
	if(rightanswer11==answer11){
		document.querySelector('#result11').textContent = "Правильно";
	}else if(rightanswer11!=answer11){
		document.querySelector('#result11').textContent = "Неправильно";		
	};
	if(rightanswer111==answer111){
		document.querySelector('#result111').textContent = "Правильно";
	}else if(rightanswer111!=answer111){
		document.querySelector('#result111').textContent = "Неправильно";		
	};
	if(rightanswer1111==answer1111){
		document.querySelector('#result1111').textContent = "Правильно";
	}else if(rightanswer1111!=answer1111){
		document.querySelector('#result1111').textContent = "Неправильно";		
	}; 
// вторая строка
	if(rightanswer2==answer2 ){
		document.querySelector('#result2').textContent = "Правильно";
	}else if(rightanswer2!=answer2){
		document.querySelector('#result2').textContent = "Неправильно";	
	};
	if(rightanswer22==answer22){
		document.querySelector('#result22').textContent = "Правильно";
	}else if(rightanswer22!=answer22){
		document.querySelector('#result22').textContent = "Неправильно";		
	};
	if(rightanswer222==answer222){
		document.querySelector('#result222').textContent = "Правильно";
	}else if(rightanswer222!=answer222){
		document.querySelector('#result222').textContent = "Неправильно";		
	};
	if(rightanswer2222==answer2222){
		document.querySelector('#result2222').textContent = "Правильно";
	}else if(rightanswer2222!=answer2222){
		document.querySelector('#result2222').textContent = "Неправильно";		
	};	

	//третья строка
	if(rightanswer3==answer3 ){
		document.querySelector('#result3').textContent = "Правильно";
	}else if(rightanswer3!=answer3){
		document.querySelector('#result3').textContent = "Неправильно";	
	};
	if(rightanswer33==answer33){
		document.querySelector('#result33').textContent = "Правильно";
	}else if(rightanswer33!=answer33){
		document.querySelector('#result33').textContent = "Неправильно";		
	};
	if(rightanswer333==answer333){
		document.querySelector('#result333').textContent = "Правильно";
	}else if(rightanswer333!=answer333){
		document.querySelector('#result333').textContent = "Неправильно";		
	};
	if(rightanswer3333==answer3333){
		document.querySelector('#result3333').textContent = "Правильно";
	}else if(rightanswer3333!=answer3333){
		document.querySelector('#result3333').textContent = "Неправильно";		
	};
	
//четвертая строка
	if(rightanswer4==answer4 ){
		document.querySelector('#result4').textContent = "Правильно";
	}else if(rightanswer4!=answer4){
		document.querySelector('#result4').textContent = "Неправильно";	
	};
	if(rightanswer44==answer44){
		document.querySelector('#result44').textContent = "Правильно";
	}else if(rightanswer44!=answer44){
		document.querySelector('#result44').textContent = "Неправильно";		
	};
	if(rightanswer444==answer444){
		document.querySelector('#result444').textContent = "Правильно";
	}else if(rightanswer444!=answer444){
		document.querySelector('#result444').textContent = "Неправильно";		
	};
	if(rightanswer4444==answer4444){
		document.querySelector('#result4444').textContent = "Правильно";
	}else if(rightanswer4444!=answer4444){
		document.querySelector('#result4444').textContent = "Неправильно";		
	};		
	
	
	});
	

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?wordev7=value'; //переадресация на новую тренировку


 });

</script>