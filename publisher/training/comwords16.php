<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
		<h3>Số điện thoại của bạn là gì?</h3>
     	<h3>Какой у тебя номер телефона</h3> 
 
		<button  onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>	
	  	<div class="post3">
		<h3>Прослушайте и впишите номер телефона.</h3>
		<h3 class="text-danger" id="result1"></h3>			
		<h3>Номер телефона: <input name="input1" id="input1" SIZE=15 step="any" onkeyup="PressEnter()" > </h3>
		</div>
		<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>	
		    <button id="help1" class="btn-lg" onclick="myFunction('helpresult1')"> ПОДСКАЗКА</button>
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>					
     </div>			
	</div>
	
</div>




<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="709853"; //правильный ответ на первый вопрос
document.querySelector('#input1').value = ""; // очистка
document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
var answer1 = document.getElementById('input1').value.trim();

	if(rightanswer1==answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightanswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
 });




			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/numberphone.mp3'; // путь к файлу
audiobutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio.paused==true){
	audio.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА
			

 
 
 // ПРОДОЛЖИТЬ ТРЕНИРОВКУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords17=value'; //переадресация на новую тренировку
//history.back(); 

 });
  // ВЫВОД ПОДСКАЗКИ
help1.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
     var element= document.querySelector('#helpresult1').textContent = "Пример диалога: Xin chào, số điện thoại của tôi là 709853. ";
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