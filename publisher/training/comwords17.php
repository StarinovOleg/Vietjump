<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid ">
	<div class="row ">
	

	<div class="col-lg-12 col-sm-12col-xs-12  post2  text-left text-md-center bg-primary ">
		
		<h3>Số điện thoại</h3>
     	<h3>Телефонные номера</h3> 
 
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>	
	  	<h3>Прослушайте и впишите номер телефонов цифрами</h3>
		<div class="post3">
		<h3 class="text-danger" id="result1"></h3>			
		<h3><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound1"><img src="iconsound.png" class="soundpic"></button> 1. Pi-za Hà nội: <input name="input1" id="input1" SIZE=15 step="any" onkeyup="PressEnter()" > </h3>
		</div>
		<div class="post3">
		<h3 class="text-danger" id="result2"></h3>
		<h3><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound2"><img src="iconsound.png" class="soundpic""></button>2. Khách sạn Safari: <input name="input2" id="input2" SIZE=15 step="any" onkeyup="PressEnter()" > </h3>
		</div>
		<div class="post3">
		<h3 class="text-danger" id="result3"></h3>
		<h3><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound3"><img src="iconsound.png" class="soundpic"></button>3. Văn phòng bác sĩ: <input name="input3" id="input3" SIZE=15 step="any" onkeyup="PressEnter()" > </h3>
		</div>
		<div class="post3">
		<h3 class="text-danger" id="result4"></h3>
 		<h3><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound4"><img src="iconsound.png" class="soundpic"></button>4. Đại sứ quán: <input name="input4" id="input4" SIZE=15 step="any" onkeyup="PressEnter()" > </h3>
		</div>
		<div class="post3">
		<h3 class="text-danger" id="result5"></h3>
		<h3><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound5"><img src="iconsound.png" class="soundpic"></button>5. Hiệu thuốc: <input name="input5" id="input5" SIZE=15 step="any" onkeyup="PressEnter()" > </h3>	
		</div>	
			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>					
     </div>	

	</div>
	
</div>




<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="709853"; //правильный ответ на первый вопрос
var rightanswer2="509815";
var rightanswer3="804035";
var rightanswer4="166066";
var rightanswer5="015098";
document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.querySelector('#input4').value = ""; // очистка
document.querySelector('#input5').value = ""; // очистка
document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
var answer1 = document.getElementById('input1').value.trim();
var answer2 = document.getElementById('input2').value.trim();
var answer3 = document.getElementById('input3').value.trim();
var answer4 = document.getElementById('input4').value.trim();
var answer5 = document.getElementById('input5').value.trim();

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
	if(rightanswer5==answer5){
		document.querySelector('#result5').textContent = "Правильно";
	}else if(rightanswer5!=answer5){
		document.querySelector('#result5').textContent = "Неправильно";		
	};
 });

			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); 
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/companysphone.mp3'; // путь к файлу
audiobutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio.paused==true){
	audio.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
	document.getElementById('sound1').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	document.getElementById('sound1').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 	
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА

			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton1 = document.getElementById("sound1"); 
var audio1 = new Audio(); //объект для хранения аудиофайла 
audio1.src = 'audio/sound1.mp3'; // путь к файлу
audiobutton1.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio1.paused==true){
	audio1.play(); // запускаем/	
	document.getElementById('sound1').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 	
	}else{
	audio1.pause(); // 	
	document.getElementById('sound1').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 	
	}
});

var audiobutton2 = document.getElementById("sound2"); 
var audio2 = new Audio(); //объект для хранения аудиофайла 
audio2.src = 'audio/sound2.mp3'; // путь к файлу
audiobutton2.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio2.paused==true){
	audio2.play(); // запускаем/	
	document.getElementById('sound2').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 	
	}else{
	audio2.pause(); // 	
	document.getElementById('sound2').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 	
	}
});
var audiobutton3 = document.getElementById("sound3"); 
var audio3 = new Audio(); //объект для хранения аудиофайла 
audio3.src = 'audio/sound3.mp3'; // путь к файлу
audiobutton3.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio3.paused==true){
	audio3.play(); // запускаем/	
	document.getElementById('sound3').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound1').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 	
	}else{
	audio3.pause(); // 	
	document.getElementById('sound3').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; //
	}
});
var audiobutton4 = document.getElementById("sound4"); 
var audio4 = new Audio(); //объект для хранения аудиофайла 
audio4.src = 'audio/sound4.mp3'; // путь к файлу
audiobutton4.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio4.paused==true){
	audio4.play(); // запускаем/	
	document.getElementById('sound4').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 	
	}else{
	audio4.pause(); // 	
	document.getElementById('sound4').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound5').disabled = false; //
	}
});
var audiobutton5 = document.getElementById("sound5"); 
var audio5 = new Audio(); //объект для хранения аудиофайла 
audio5.src = 'audio/sound5.mp3'; // путь к файлу
audiobutton5.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio5.paused==true){
	audio5.play(); // запускаем/	
	document.getElementById('sound5').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 	
	}else{
	audio5.pause(); // 	
	document.getElementById('sound5').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА
			
 // ПРОДОЛЖИТЬ ТРЕНИРОВКУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords18=value'; //переадресация на новую тренировку
//history.back(); 

 });
</script>