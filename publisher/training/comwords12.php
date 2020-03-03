<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Пришло время выучить дни недели:</h3> 	
			
			
			<p><img src="images/week.png" class="cardpic"><p>	

  <div class="row">
	<div class="col-lg-3 col-sm-3 col-xs-3">
	
	</div>
    <div class="col-lg-3 col-sm-3 col-xs-3" >

		<div  class="btn-light btn-lg btn-block" ><span class="textweight">День недели</span></div> 	
		<div  class="btn-light btn-lg btn-block" >Thứ hai </div> 			                       
		<div  class="btn-light btn-lg btn-block" >Thứ ba</div>								
		<div  class="btn-light btn-lg btn-block" >Thứ tư</div>		 
		<div  class="btn-light btn-lg btn-block" >Thứ năm</div>										 
		<div  class="btn-light btn-lg btn-block" >Thứ sáu</div>								 
		<div  class="btn-light btn-lg btn-block" >Thứ bảy</div>	
		<div  class="btn-light btn-lg btn-block" >Chủ nhật</div>	
		
    </div>

<div class="col-lg-3 col-sm-3 col-xs-3" > 
	<div  class="btn-light btn-lg btn-block" ><span class="textweight">Перевод</span></div> 
	<div  class="btn-light btn-lg btn-block" >Понедельник</div>
	<div class="btn-light btn-lg btn-block" >Вторник</div>
	<div class="btn-light btn-lg btn-block" >Среда</div>
	<div class="btn-light btn-lg btn-block" >Четверг</div>
	<div class="btn-light btn-lg btn-block" >Пятница</div>
	<div class="btn-light btn-lg btn-block" >Суббота</div>	
	<div class="btn-light btn-lg btn-block" >Воскресенье</div>		


</div>

    <div class="col-lg-3 col-sm-3 col-xs-3 ">    </div>

	</div>
     			<h3>Прослушайте как звучат дни недели на вьетнамском языке</h3> 
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" width="200" height="200"></button>				
			<p><button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>	</p>			
     </div>			
	</div>
	
</div>




<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/comweek.mp3'; // путь к файлу
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
	location.href = 'index.php?comwords13=value'; //переадресация на новую тренировку
//history.back(); 

 });
</script>
