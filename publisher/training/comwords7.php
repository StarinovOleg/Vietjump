<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
	
			<p><img src="images/word.png" class="cardpic"><p>			

			<h3>Читайте и слушайте диалог, закрепляйте правильное произношение.</h3> 			
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
			
 			<h3 >Xin chào, tên tôi là Mai.</h3>
 			<h3 >Tôi đến từ Born.</h3>
 			<h3 >Xin chào,  tên tôi là Oleg. </h3>
  			<h3 >Tôi đến từ Palermo.</h3>			
		

			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	</div>
	
</div>




<script>


			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/comwordOlegandMai.mp3'; // путь к файлу
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
	
			
			

  //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords8=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>