<?php
require_once 'training/iconcomwords.php';

?>
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
	

			<h3>Ответьте на русском на вьетнамские предложения.</h3>
 			<h3>Nói với Phạm Dung(Разговариваем с Фем Зум) </h3>			
			<p><img src="images/word.png" class="cardpic" ><p>	
 			<h3 >Bạn:<span class="textweight">1. Здравствуйте, меня зовут Ричард. 2. Мне тоже приятно познакомиться. 3. Откуда вы родом? 4. Как интересно! </span></h3>
			<div class="post3">
				<h3 >Phạm: Xin chào, tên tôi là Phạm Dung. </h3>
				<h3 >Bạn: <input name="input1" id="input1" SIZE=20 step="any" onkeyup="PressEnter()" > .</h3>    <h2 class="text-danger" id="result1"></h2>
			</div>
			<div class="post3">			
  			<h3 >Phạm : Rất vui được gặp bạn.</h3>			
 			<h3 >Bạn: <input name="input2" id="input2" SIZE=20 step="any" onkeyup="PressEnter()" >.</h3>	 <h2 class="text-danger" id="result2"></h2>   
			<h3 >Bạn: <input name="input3" id="input3" SIZE=20 step="any" onkeyup="PressEnter()" >?</h3> <h2 class="text-danger" id="result3"></h2>   			
			</div> 			
			<div class="post3">			
			<h3 >Phạm:  Tối đến từ Warsaw. </h3>			
 			<h3 >Bạn: <input name="input4" id="input4" SIZE=20 step="any" onkeyup="PressEnter()" >!</h3>	<h2 class="text-danger" id="result4"></h2>   
			</div>
			<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>					
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="help1" class="btn-lg" onclick="myFunction('helpresult1')"> ПОДСКАЗКА</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	</div>
	
</div>




<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Здравствуйте, меня зовут Ричард"; //правильный ответ на первый вопрос
var rightanswer2="Мне тоже приятно познакомиться"; //правильный ответ на второй вопрос
var rightanswer3="Откуда вы родом"; //правильный ответ на третий вопрос
var rightanswer4="Как интересно"; //правильный ответ на четвертый вопрос
//var a ="index.php?var3=value"; //возвращение на страницу 6


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
	location.href = 'index.php?comwords9=value'; //переадресация на новую тренировку
//history.back(); 

 });
// ВЫВОД ПОДСКАЗКИ
help1.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
     var element= document.querySelector('#helpresult1').textContent = "Ваш собеседник говорит на вьетнамском, а вы овтечаете ему на русском, выбрав из предложенных вариантов. ";
 });
//ЗАКРЫТИЕ ПОДСКАЗКИ
function myFunction(element_id) {
//Если элемент с id-шником element_id существует
                if (document.getElementById(element_id)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(element_id); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + element_id + " не найден!"); 
}	

</script>