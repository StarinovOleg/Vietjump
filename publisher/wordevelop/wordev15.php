<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">
	
	<div class="row">
	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		

		<h3>Таблица распространенных глаголов:</h3> 	

		<div class="post3">	
			<table class="table table-striped">
			<tr><td><span class="textweight">Перевод</span></td> <td><span class="textweight">Глагол</span></td> <td><span class="textweight">Произношение</span></td></tr>
			<tr><td>находить</td> <td>tim thấy</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound1"><img src="iconsound.png" class="soundpic" ></button></td></tr>
			<tr><td>давать</td> <td>đưa cho</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound2"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>иметь</td> <td>có</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound3"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>знать</td> <td>biết</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound4"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>изучать</td> <td>học</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound5"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>любить</td> <td>yêu</td><td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound6"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>играть</td> <td>chơi</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound7"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>читать</td> <td>đọc</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound8"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>видеть</td> <td>nhìn</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound9"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>улыбаться</td> <td>cười </td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound10"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>говорить</td> <td>nói</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound11"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>думать</td> <td>nghĩ</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound12"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>понимать</td> <td>hiểu</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound13"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>работать</td> <td>làm việc</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound14"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>писать</td> <td>viết</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound15"><img src="iconsound.png" class="soundpic"></button></td></tr>

			</table>
		</div>

			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>




<script>
		

			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton1 = document.getElementById("sound1"); 
var audio1 = new Audio(); //объект для хранения аудиофайла 
audio1.src = 'audio/wordev/sound1.mp3'; // путь к файлу
audiobutton1.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio1.paused==true){
	audio1.play(); // запускаем/	
	document.getElementById('sound1').innerHTML='pause';
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio1.pause(); // 	
	document.getElementById('sound1').innerHTML='play';
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	}
});

var audiobutton2 = document.getElementById("sound2"); 
var audio2 = new Audio(); //объект для хранения аудиофайла 
audio2.src = 'audio/wordev/sound2.mp3'; // путь к файлу
audiobutton2.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio1.paused==true){
	audio1.play(); // запускаем/	
	document.getElementById('sound2').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio1.pause(); // 	
	document.getElementById('sound2').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 


	}
});

var audiobutton3 = document.getElementById("sound3"); 
var audio3 = new Audio(); //объект для хранения аудиофайла 
audio3.src = 'audio/wordev/sound3.mp3'; // путь к файлу
audiobutton3.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio3.paused==true){
	audio3.play(); // запускаем/	
	document.getElementById('sound3').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio3.pause(); // 	
	document.getElementById('sound3').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	}
});




var audiobutton4 = document.getElementById("sound4"); 
var audio4 = new Audio(); //объект для хранения аудиофайла 
audio4.src = 'audio/wordev/sound4.mp3'; // путь к файлу
audiobutton4.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio4.paused==true){
	audio4.play(); // запускаем/	
	document.getElementById('sound4').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio4.pause(); // 	
	document.getElementById('sound4').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	}
});

var audiobutton5 = document.getElementById("sound5"); 
var audio5 = new Audio(); //объект для хранения аудиофайла 
audio5.src = 'audio/wordev/sound5.mp3'; // путь к файлу
audiobutton5.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio5.paused==true){
	audio5.play(); // запускаем/	
	document.getElementById('sound5').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio5.pause(); // 	
	document.getElementById('sound5').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	}
});

var audiobutton6 = document.getElementById("sound6"); 
var audio6 = new Audio(); //объект для хранения аудиофайла 
audio6.src = 'audio/wordev/sound6.mp3'; // путь к файлу
audiobutton6.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio6.paused==true){
	audio6.play(); // запускаем/	
	document.getElementById('sound6').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio6.pause(); // 	
	document.getElementById('sound6').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	}
});

var audiobutton7 = document.getElementById("sound7"); 
var audio7 = new Audio(); //объект для хранения аудиофайла 
audio7.src = 'audio/wordev/sound7.mp3'; // путь к файлу
audiobutton7.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio7.paused==true){
	audio7.play(); // запускаем/	
	document.getElementById('sound7').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio7.pause(); // 	
	document.getElementById('sound7').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	}
});

var audiobutton8 = document.getElementById("sound8 "); 
var audio8  = new Audio(); //объект для хранения аудиофайла 
audio8.src = 'audio/wordev/sound8.mp3'; // путь к файлу
audiobutton5.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio8.paused==true){
	audio8.play(); // запускаем/	
	document.getElementById('sound8').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio8.pause(); // 	
	document.getElementById('sound8').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	
	}
});

var audiobutton9 = document.getElementById("sound9"); 
var audio9 = new Audio(); //объект для хранения аудиофайла 
audio9.src = 'audio/wordev/sound9.mp3'; // путь к файлу
audiobutton9.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio9.paused==true){
	audio9.play(); // запускаем/	
	document.getElementById('sound9').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio9.pause(); // 	
	document.getElementById('sound9').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	}
});

var audiobutton10 = document.getElementById("sound10"); 
var audio10 = new Audio(); //объект для хранения аудиофайла 
audio10.src = 'audio/wordev/sound10.mp3'; // путь к файлу
audiobutton10.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio10.paused==true){
	audio10.play(); // запускаем/	
	document.getElementById('sound10').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio10.pause(); // 	
	document.getElementById('sound10').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	}
});

var audiobutton11 = document.getElementById("sound11"); 
var audio11 = new Audio(); //объект для хранения аудиофайла 
audio11.src = 'audio/wordev/sound11.mp3'; // путь к файлу
audiobutton11.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio11.paused==true){
	audio11.play(); // запускаем/	
	document.getElementById('sound11').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio11.pause(); // 	
	document.getElementById('sound11').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	}
});

var audiobutton12 = document.getElementById("sound12"); 
var audio12 = new Audio(); //объект для хранения аудиофайла 
audio12.src = 'audio/wordev/sound12.mp3'; // путь к файлу
audiobutton12.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio12.paused==true){
	audio12.play(); // запускаем/	
	document.getElementById('sound12').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio12.pause(); // 	
	document.getElementById('sound12').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	}
});

var audiobutton13 = document.getElementById("sound13"); 
var audio13 = new Audio(); //объект для хранения аудиофайла 
audio13.src = 'audio/wordev/sound13.mp3'; // путь к файлу
audiobutton13.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio13.paused==true){
	audio13.play(); // запускаем/	
	document.getElementById('sound13').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio13.pause(); // 	
	document.getElementById('sound13').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	
	}
});

var audiobutton14 = document.getElementById("sound14"); 
var audio14 = new Audio(); //объект для хранения аудиофайла 
audio14.src = 'audio/wordev/sound14.mp3'; // путь к файлу
audiobutton14.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio14.paused==true){
	audio14.play(); // запускаем/	
	document.getElementById('sound14').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound15').disabled = true; // 

	
	}else{
	audio14.pause(); // 	
	document.getElementById('sound13').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound15').disabled = false; // 

	}
});

var audiobutton15 = document.getElementById("sound15"); 
var audio15 = new Audio(); //объект для хранения аудиофайла 
audio15.src = 'audio/wordev/sound15.mp3'; // путь к файлу
audiobutton15.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio15.paused==true){
	audio15.play(); // запускаем/	
	document.getElementById('sound15').innerHTML='pause';
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound2').disabled = true; //
	document.getElementById('sound3').disabled = true; // 
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 
	document.getElementById('sound12').disabled = true; // 
	document.getElementById('sound13').disabled = true; // 
	document.getElementById('sound14').disabled = true; // 

	
	}else{
	audio15.pause(); // 	
	document.getElementById('sound15').innerHTML='play';
	document.getElementById('sound1').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound3').disabled = false; // 
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 
	document.getElementById('sound7').disabled = false; // 
	document.getElementById('sound8').disabled = false; // 
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	document.getElementById('sound12').disabled = false; // 
	document.getElementById('sound13').disabled = false; // 
	document.getElementById('sound14').disabled = false; // 

	
	}
});


});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 	location.href = 'index.php?wordev16=value'; //переадресация на новую тренировку
 });

</script>