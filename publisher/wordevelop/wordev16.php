<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">	
	<div class="row">	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">		
		<h3>Наречие</h3>  	
		<div class="post3">
			<p>Для выражения оценки качества во вьетнамском языке существуют специальные наречия.</p>
			<p>Наречия оченки качества ставятся перед глаголом, прилагательным или другим наречием.</p>
			<p></p>
			<p>Наречие: <span class="textweight">rất</span> обозначает самую высокую оценку качества - очень.</p>
			<p>Наречие: <span class="textweight">khá</span> обозначает достаточно высокую оценку качества - достаточно.</p>
			<p>Наречие:<span class="textweight">tương đối</span>обозначает сравнительно высокую оценку качества - сравнительно.</p>
			<p>Наречие:<span class="textweight">không ... lắm</span> обозначает не очень высокую оценку качества.</p>
		
		<h3>Таблица распространенных наречий:</h3> 	

		<div class="post3">	
			<table class="table table-striped">
			<tr><td><span class="textweight">Перевод</span></td> <td><span class="textweight">Наречие</span></td> <td><span class="textweight">Произношение</span></td></tr>
			<tr><td>уже</td> <td>rồi</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound1"><img src="iconsound.png" class="soundpic" ></button></td></tr>
			<tr><td>немедленно</td> <td>ngay lập tức</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound2"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>никогда</td> <td>không bao giờ</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound3"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>позже</td> <td>lát nữa</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound4"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>медленно</td> <td>từ từ</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound5"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>сейчас</td> <td>bây giờ</td><td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound6"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>скоро</td> <td>sớm</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound7"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>иногда</td> <td>đôi khi</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound8"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>очень</td> <td>rất</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound9"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>сегодня</td> <td>hôm nay </td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound10"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>завтра</td> <td>ngày mai</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound11"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>всегда</td> <td>luôn luôn</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound12"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>вчера</td> <td>hôm qua</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound13"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>еще</td> <td>vẫn còn</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound14"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>везде</td> <td>ở khắp mọi nơi</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound15"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>здесь</td> <td>đây</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound16"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>там</td> <td>đó</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound17"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>почти</td> <td>gần như</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound18"><img src="iconsound.png" class="soundpic"></button></td></tr>
			<tr><td>быстро</td> <td>nhanh chóng</td> <td><button onclick = "listenaudio" class="btn-light btn-lg"  id="sound19"><img src="iconsound.png" class="soundpic"></button></td></tr>			
			</table>
		</div>
		
		
		
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; // 
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; // 

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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; // 
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
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
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
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
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
	}
});

var audiobutton16 = document.getElementById("sound16"); 
var audio16 = new Audio(); //объект для хранения аудиофайла 
audio16.src = 'audio/wordev/sound16.mp3'; // путь к файлу
audiobutton16.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio16.paused==true){
	audio16.play(); // запускаем/	
	document.getElementById('sound16').innerHTML='pause';
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
	document.getElementById('sound15').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
	}else{
	audio16.pause(); // 	
	document.getElementById('sound16').innerHTML='play';
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
	document.getElementById('sound15').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
	}
});

var audiobutton17 = document.getElementById("sound17"); 
var audio17 = new Audio(); //объект для хранения аудиофайла 
audio17.src = 'audio/wordev/sound17.mp3'; // путь к файлу
audiobutton17.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio17.paused==true){
	audio17.play(); // запускаем/	
	document.getElementById('sound17').innerHTML='pause';
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
	document.getElementById('sound15').disabled = true; // 
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
	}else{
	audio17.pause(); // 	
	document.getElementById('sound17').innerHTML='play';
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
	document.getElementById('sound15').disabled = false; // 
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound18').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
	}
});

var audiobutton18 = document.getElementById("sound18"); 
var audio18 = new Audio(); //объект для хранения аудиофайла 
audio18.src = 'audio/wordev/sound18.mp3'; // путь к файлу
audiobutton18.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio18.paused==true){
	audio18.play(); // запускаем/	
	document.getElementById('sound18').innerHTML='pause';
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
	document.getElementById('sound15').disabled = true; // 
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound19').disabled = true; // 
	
	}else{
	audio18.pause(); // 	
	document.getElementById('sound18').innerHTML='play';
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
	document.getElementById('sound15').disabled = false; // 
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound19').disabled = false; //
	
	}
});

var audiobutton19 = document.getElementById("sound19"); 
var audio19 = new Audio(); //объект для хранения аудиофайла 
audio19.src = 'audio/wordev/sound19.mp3'; // путь к файлу
audiobutton19.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio19.paused==true){
	audio19.play(); // запускаем/	
	document.getElementById('sound19').innerHTML='pause';
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
	document.getElementById('sound15').disabled = true; // 
	document.getElementById('sound16').disabled = true; // 
	document.getElementById('sound17').disabled = true; // 
	document.getElementById('sound18').disabled = true; // 
	
	}else{
	audio19.pause(); // 	
	document.getElementById('sound19').innerHTML='play';
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
	document.getElementById('sound15').disabled = false; // 
	document.getElementById('sound16').disabled = false; // 
	document.getElementById('sound17').disabled = false; // 
	document.getElementById('sound18').disabled = false; //
	
	
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 	location.href = 'index.php?wordev17=value'; //переадресация на новую тренировку
 });
</script>