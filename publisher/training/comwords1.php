<?php
require_once 'training/iconcomwords.php';

?>
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Прослушайте диалог еще раз.</h3> 	
			
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
			
			<h3 >Ответьте на вопросы.</h3> 
		<div class="post3 text-left">
			<h3>1. Ông qua Nga bao lâu? Tôi qua Nga  <input name="input1" id="input1" SIZE=2 step="any" onkeyup="PressEnter()" > tháng. </h3>  	<h2 class="text-danger" id="result1"></h2>   <!--3-->  
			<h3>2. Bà ở đâu? Tôi ở <input name="input2" id="input2" SIZE=20 step="any" onkeyup="PressEnter()" >.</h3>                			<h2 class="text-danger" id="result2"></h2>   <!--Footscray-->  
			<h3>3. Bà làm việc ở đâu? Tôi làm việc ở hãng <input name="input3" id="input3" SIZE=9 step="any" onkeyup="PressEnter()" >.</h3>		<h2 class="text-danger" id="result3"></h2>	 <!--Holden-->  	
	
		</div>	
			<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>				
			<button id="help1" class="btn-lg" onclick="myFunction('helpresult1')"> ПОДСКАЗКА</button>		
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		

     </div>			
	</div>
	
</div>




<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/comword3.mp3'; // путь к файлу
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

//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1=3; //правильный ответ на первый вопрос
var rightanswer2="Footscray"; //правильный ответ на второй вопрос
var rightanswer3="Holden"; //правильный ответ на третий вопрос
//var a ="index.php?var3=value"; //возвращение на страницу 6


document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 var answer1 = document.getElementById('input1').value.trim();
 var answer2 = document.getElementById('input2').value.trim(); 
 var answer3 = document.getElementById('input3').value.trim(); 
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
	
 });
 //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords2=value'; //переадресация на новую тренировку
//history.back(); 

 });
// ВЫВОД ПОДСКАЗКИ
help1.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
     var element= document.querySelector('#helpresult1').textContent = "Я живу три года в городе Футстрай, и работаю на фабрике Холден. ";
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
