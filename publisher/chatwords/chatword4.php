<?php
require_once 'chatwords/iconchatword.php';
?>

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">

				<div class="post3">
					<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
					<p class="text">Прослушайте диалог:</p>
					<h3>Bà là người nước nào?</h3>
					<p class="text">Откуда ты?</p> 
					<h3>Tôi là người Đức.</h3>
					<p class="text">Я из Германии</p>
				
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/chatwords/chatword4.mp3'; // путь к файлу
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

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?chatword5=value'; //переадресация на новую тренировку
 });	
</script>