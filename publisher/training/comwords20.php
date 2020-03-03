<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Личные местоимения</h3> 	
			<p><img src="images/toi.png" class="cardpic"><p>	
			<p>Tôi, ông, bà, có личные местоимения. Их можно использовать для объктов или субъектов. Личные местоимения не изменяют свою форму. </p>
			<p>Внизу таблица с распространенными личными местоимениями и правилами их использования.</p>
  <div class="row">

    <div class="col-lg-6 col-sm-6 col-xs-6" >
    <!-- Блоки для перемещения--> 
		<p  class="btn-light btn-lg btn-block" ><span class="textweight"> Единственное число</span></p> 	
		<p  class="btn-light btn-lg btn-block" >Tôi(Я, меня) </p> 			                       
		<p  class="btn-light btn-lg btn-block" >Ông(Ты: женатый мужчина) </p>								
		<p  class="btn-light btn-lg btn-block" >Bà(Ты: замужняя женщина) </p>		 
		<p  class="btn-light btn-lg btn-block" >Anh(Ты: молодой мужчина) </p>										 
		<p  class="btn-light btn-lg btn-block" >Chi(Ты: старшая по возрасту женщина) </p>								 
		<p  class="btn-light btn-lg btn-block" >Cô(Ты: незамужняя женщина) </p>	
		<p  class="btn-light btn-lg btn-block" >Em(Ты:младший по возрасту) </p>	
		<p  class="btn-light btn-lg btn-block" >Ông ấy(Он, его:женатый мужчина) </p>	
		<p  class="btn-light btn-lg btn-block" >Anh ấy(Он, его:юноша)</p>	
		<p  class="btn-light btn-lg btn-block" >Cậu ấy(Он, его:юноша)</p>	
		<p  class="btn-light btn-lg btn-block" >Bà ấy (Она, ее: старшая по возрасту женщина) </p>	
		<p  class="btn-light btn-lg btn-block" >Cô ấy (Она, ее: незамужняя женщина) </p>		
		<p  class="btn-light btn-lg btn-block" >Em ấy (Он, она: молодый люди) </p>
		<p  class="btn-light btn-lg btn-block" >Nó (Он или она: животные и дети)</p>		
    </div>
		<!--Блоки ответов-->
<div class="col-lg-6 col-sm-6 col-xs-6" > 
	<p  class="btn-light btn-lg btn-block" ><span class="textweight"> Множественное число</span></p> 
	<p  class="btn-light btn-lg btn-block" >Các ông (Ты: женатые мужчины)</p>
	<p class="btn-light btn-lg btn-block" >Các bà (Ты: замужние женщины)</p>
	<p class="btn-light btn-lg btn-block" >Các anh (Ты: юноши)</p>
	<p class="btn-light btn-lg btn-block" >Các chị(Ты: старшие по возрасту женщины)</p>
	<p class="btn-light btn-lg btn-block" >Các con(Ты: незамужние женщины)</p>
	<p class="btn-light btn-lg btn-block" >Các em (Ты: молодые люди)</p>	
	<p class="btn-light btn-lg btn-block" >Quý vị(леди и джентельмены)</p>		
	<p  class="btn-light btn-lg btn-block" >Các ông ấy(Они, их: замужние мужчины)</p>
	<p  class="btn-light btn-lg btn-block" >Các anh ấy(Они, их: юные мужчины)</p>
	<p  class="btn-light btn-lg btn-block" >Các cậu ấy(Они, их: юные мужчины)</p>
	<p  class="btn-light btn-lg btn-block" >Các bà ấy (Они, их: старшие по возрасту женщины)</p>
	<p  class="btn-light btn-lg btn-block" >Các cô ấy(Они, их: незамужние женщины)</p>
	<p  class="btn-light btn-lg btn-block" >Các em ấy(Они, их: молодые люди)</p>	
	<p  class="btn-light btn-lg btn-block" >Họ(Они, в общем)</p>
</div>



	</div>
     			<h3>Прослушайте как звучат личные местоимения на вьетнамском языке</h3> 
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" width="200" height="200"></button>				
			<p><button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>	</p>			
     </div>			
	</div>
	
</div>




<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/mestoimenia.mp3'; // путь к файлу
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
	location.href = 'index.php?comwords21=value'; //переадресация на новую тренировку
//history.back(); 

 });
</script>