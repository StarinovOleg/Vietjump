<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12  text-left text-md-center">
<h1 id="time">B̀e ở nhà
	<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound1">
		<img src="iconsound.png" class="soundpic">
	</button>  
</h1>
</div>
</div>

<div class="row">
<div class="post2 col-lg-12 col-sm-12col-xs-12 text-left text-md-center">
	<h3>Bà đi chợ.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound2">
			<img src="iconsound.png" class="soundpic">
		</button> 	
	
	
	Bố và mẹ đi xa.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound3">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Chỉ có bé ở nhà.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound4">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Bé đi xe.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound5">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Bé cho cả chó Xù đi xe.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound6">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Xe bị đổ.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound7">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Cả bé và Xù bị ngã.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound8">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Bé đỗ Xù.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound9">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Bé bế Xù ra hè.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound10">
			<img src="iconsound.png" class="soundpic">
		</button> 		
		
	
	Ở đó có chú gà cồ.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound11">
			<img src="iconsound.png" class="soundpic">
		</button> 
	
	</h3>
	<h3>Прослушайте весь текст.</h3>
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio">
			<img src="images/audio.png" 
		</button>
</div>
</div>
</div>
<script>
//listen 1
//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton1 = document.getElementById("sound1"); 
var audio1 = new Audio(); //объект для хранения аудиофайла 
audio1.src = 'audio/material/sound1.mp3'; // путь к файлу
audiobutton1.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio1.paused==true){
	audio1.play(); // запускаем/	
	document.getElementById('sound1').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
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
	}else{
	audio1.pause(); // 	
	document.getElementById('sound1').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; //
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
	}
});

var audiobutton2 = document.getElementById("sound2"); 
var audio2 = new Audio(); //объект для хранения аудиофайла 
audio2.src = 'audio/material/sound2.mp3'; // путь к файлу
audiobutton2.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio2.paused==true){
	audio2.play(); // запускаем/	
	document.getElementById('sound2').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
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
	}else{
	audio2.pause(); // 	
	document.getElementById('sound2').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
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
	}
});
var audiobutton3 = document.getElementById("sound3"); 
var audio3 = new Audio(); //объект для хранения аудиофайла 
audio3.src = 'audio/material/sound3.mp3'; // путь к файлу
audiobutton3.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio3.paused==true){
	audio3.play(); // запускаем/	
	document.getElementById('sound3').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound1').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound5').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; // 	
	}else{
	audio3.pause(); // 	
	document.getElementById('sound3').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
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
	}
});
var audiobutton4 = document.getElementById("sound4"); 
var audio4 = new Audio(); //объект для хранения аудиофайла 
audio4.src = 'audio/material/sound4.mp3'; // путь к файлу
audiobutton4.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio4.paused==true){
	audio4.play(); // запускаем/	
	document.getElementById('sound4').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio4.pause(); // 	
	document.getElementById('sound4').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound5').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 	
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});
var audiobutton5 = document.getElementById("sound5"); 
var audio5 = new Audio(); //объект для хранения аудиофайла 
audio5.src = 'audio/material/sound5.mp3'; // путь к файлу
audiobutton5.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio5.paused==true){
	audio5.play(); // запускаем/	
	document.getElementById('sound5').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; //
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio5.pause(); // 	
	document.getElementById('sound5').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 	
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});
var audiobutton6 = document.getElementById("sound6"); 
var audio6 = new Audio(); //объект для хранения аудиофайла 
audio6.src = 'audio/material/sound6.mp3'; // путь к файлу
audiobutton6.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio6.paused==true){
	audio6.play(); // запускаем/	
	document.getElementById('sound6').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //	
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio6.pause(); // 	
	document.getElementById('sound6').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 	
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});

var audiobutton7 = document.getElementById("sound7"); 
var audio7 = new Audio(); //объект для хранения аудиофайла 
audio7.src = 'audio/material/sound7.mp3'; // путь к файлу
audiobutton7.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio7.paused==true){
	audio7.play(); // запускаем/	
	document.getElementById('sound7').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //	
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio7.pause(); // 	
	document.getElementById('sound7').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 	
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});

var audiobutton8 = document.getElementById("sound8"); 
var audio8 = new Audio(); //объект для хранения аудиофайла 
audio8.src = 'audio/material/sound8.mp3'; // путь к файлу
audiobutton8.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio8.paused==true){
	audio8.play(); // запускаем/	
	document.getElementById('sound8').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //	
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio8.pause(); // 	
	document.getElementById('sound8').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 	
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});

var audiobutton9 = document.getElementById("sound9"); 
var audio9 = new Audio(); //объект для хранения аудиофайла 
audio9.src = 'audio/material/sound9.mp3'; // путь к файлу
audiobutton9.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio9.paused==true){
	audio9.play(); // запускаем/	
	document.getElementById('sound9').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //	
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound10').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio9.pause(); // 	
	document.getElementById('sound9').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound10').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});

var audiobutton10 = document.getElementById("sound10"); 
var audio10 = new Audio(); //объект для хранения аудиофайла 
audio10.src = 'audio/material/sound10.mp3'; // путь к файлу
audiobutton10.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio10.paused==true){
	audio10.play(); // запускаем/	
	document.getElementById('sound10').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //	
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound11').disabled = true; //  	
	}else{
	audio10.pause(); // 	
	document.getElementById('sound10').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound11').disabled = false; // 
	}
});

var audiobutton11 = document.getElementById("sound11"); 
var audio11 = new Audio(); //объект для хранения аудиофайла 
audio11.src = 'audio/material/sound11.mp3'; // путь к файлу
audiobutton11.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio11.paused==true){
	audio11.play(); // запускаем/	
	document.getElementById('sound11').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; //	
	document.getElementById('sound5').disabled = true; //
	document.getElementById('sound2').disabled = true; // 
	document.getElementById('sound3').disabled = true; //
	document.getElementById('sound4').disabled = true; // 
	document.getElementById('sound1').disabled = true; // 
	document.getElementById('sound6').disabled = true; // 
	document.getElementById('sound7').disabled = true; // 
	document.getElementById('sound8').disabled = true; // 
	document.getElementById('sound9').disabled = true; // 
	document.getElementById('sound10').disabled = true; //  	
	}else{
	audio11.pause(); // 	
	document.getElementById('sound11').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
	document.getElementById('sound7').disabled = false; // 	
	document.getElementById('sound8').disabled = false; // 	
	document.getElementById('sound9').disabled = false; // 
	document.getElementById('sound10').disabled = false; // 
	}
});

var audiobutton = document.getElementById("listenaudio"); 
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/material/sound12.mp3'; // путь к файлу
audiobutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio.paused==true){
	audio.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
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
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
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
	}
});
</script>