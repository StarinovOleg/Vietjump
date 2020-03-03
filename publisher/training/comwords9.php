<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>А теперь выучим месяцы:</h3> 	
			
			
			<p><img src="images/calendar.png" class="cardpic"><p>	

  <div class="row" style="margin-bottom:1%">
	<div class="col-3">
	
	</div>
    <div class="col-3" >

		<div  class="btn-light btn-lg btn-block" ><strong>Месяц</strong></div> 	
		<div  class="btn-light btn-lg btn-block" >Tháng một</div> 			                       
		<div  class="btn-light btn-lg btn-block" >Tháng hai</div>								
		<div  class="btn-light btn-lg btn-block" >Tháng ba</div>		 
		<div  class="btn-light btn-lg btn-block" >Tháng tư</div>										 
		<div  class="btn-light btn-lg btn-block" >Tháng năm</div>								 
		<div  class="btn-light btn-lg btn-block" >Tháng sáu</div>	
		<div  class="btn-light btn-lg btn-block" >Tháng bảy</div>	
		<div  class="btn-light btn-lg btn-block" >Tháng tám</div>	
		<div  class="btn-light btn-lg btn-block" >Tháng chín</div>	
		<div  class="btn-light btn-lg btn-block" >Tháng mười</div>	
		<div  class="btn-light btn-lg btn-block" >Tháng mười một</div>	
		<div  class="btn-light btn-lg btn-block" >Tháng mười hai</div>			
    </div>
		<!--Блоки ответов-->
<div class="col-3" > 
	<div  class="btn-light btn-lg btn-block" ><strong>Перевод</strong></div> 
	<div  class="btn-light btn-lg btn-block" >Январь</div>
	<div class="btn-light btn-lg btn-block" >Февраль</div>
	<div class="btn-light btn-lg btn-block" >Март</div>
	<div class="btn-light btn-lg btn-block" >Апрель</div>
	<div class="btn-light btn-lg btn-block" >Май</div>
	<div class="btn-light btn-lg btn-block" >Июнь</div>	
	<div class="btn-light btn-lg btn-block" >Июль</div>		
	<div  class="btn-light btn-lg btn-block" >Август</div>
	<div  class="btn-light btn-lg btn-block" >Сентябрь</div>
	<div  class="btn-light btn-lg btn-block" >Октябрь</div>
	<div  class="btn-light btn-lg btn-block" >Ноябрь</div>
	<div  class="btn-light btn-lg btn-block" >Декабрь</div>

</div>

		<!--Блоки вопросов-->
    <div class="col-3 text-left">    </div>

	</div>
     			<h3>Прослушайте как звучат месяцы на вьетнамском языке</h3> 
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" width="200" height="200"></button>				
			<p><button id="BackWordPage" class=" btn-lg"  > ПРОДОЛЖИТЬ</button>	</p>			
     </div>			
	</div>
	
</div>




<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/commonths.mp3'; // путь к файлу
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
	location.href = 'index.php?comwords10=value'; //переадресация на новую тренировку
//history.back(); 

 });
</script>
