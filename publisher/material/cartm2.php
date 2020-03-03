<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12  text-left text-md-center">
<h1 id="time">Nhà bé hà
	<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound1">
		<img src="iconsound.png" class="soundpic">
	</button>  
</h1>
</div>
</div>

<div class="row">
<div class="post2 col-lg-12 col-sm-12col-xs-12 text-left text-md-center">
	<h3>Bé là Hồ Sĩ Hà.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound2">
			<img src="iconsound.png" class="soundpic">
		</button> 	
	
	
	Ba là Hồ Sĩ Gia, kĩ sư.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound3">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Mẹ là Lê Thị Mỹ Dạ, y sĩ,ở y tế xã.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound4">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Bé và bà ở nhà.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound5">
			<img src="iconsound.png" class="soundpic">
		</button> 		
	
	
	Giờ nghỉ, bà khe khẽ ru bé ngủ.
		<button onclick = "listenaudio" class="btn-light btn-lg"  id="sound6">
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
audio1.src = 'audio/material/sound21.mp3'; // путь к файлу
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
 	
	}else{
	audio1.pause(); // 	
	document.getElementById('sound1').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 	
	document.getElementById('sound6').disabled = false; // 	
		
	}
});

var audiobutton2 = document.getElementById("sound2"); 
var audio2 = new Audio(); //объект для хранения аудиофайла 
audio2.src = 'audio/material/sound22.mp3'; // путь к файлу
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

	}else{
	audio2.pause(); // 	
	document.getElementById('sound2').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound6').disabled = false; // 	
	
	}
});
var audiobutton3 = document.getElementById("sound3"); 
var audio3 = new Audio(); //объект для хранения аудиофайла 
audio3.src = 'audio/material/sound23.mp3'; // путь к файлу
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

	}else{
	audio3.pause(); // 	
	document.getElementById('sound3').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	
 
	}
});
var audiobutton4 = document.getElementById("sound4"); 
var audio4 = new Audio(); //объект для хранения аудиофайла 
audio4.src = 'audio/material/sound24.mp3'; // путь к файлу
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
	
	}else{
	audio4.pause(); // 	
	document.getElementById('sound4').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound5').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	

	}
});
var audiobutton5 = document.getElementById("sound5"); 
var audio5 = new Audio(); //объект для хранения аудиофайла 
audio5.src = 'audio/material/sound25.mp3'; // путь к файлу
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
 	
	}else{
	audio5.pause(); // 	
	document.getElementById('sound5').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //
	document.getElementById('sound6').disabled = false; // 	

	}
});
var audiobutton6 = document.getElementById("sound6"); 
var audio6 = new Audio(); //объект для хранения аудиофайла 
audio6.src = 'audio/material/sound26.mp3'; // путь к файлу
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
 	
	}else{
	audio6.pause(); // 	
	document.getElementById('sound6').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // 	
	document.getElementById('sound5').disabled = false; // 
	document.getElementById('sound1').disabled = false; // 	
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound2').disabled = false; //

	}
});

var audiobutton = document.getElementById("listenaudio"); 
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/material/fullsound2.mp3'; // путь к файлу
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

	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	document.getElementById('sound1').disabled = false; //
	document.getElementById('sound2').disabled = false; // 
	document.getElementById('sound3').disabled = false; //
	document.getElementById('sound4').disabled = false; // 
	document.getElementById('sound5').disabled = false; // 	
	document.getElementById('sound6').disabled = false; // 	

	}
});
</script>