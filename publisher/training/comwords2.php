<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Строим предложения.</h3> 	
			
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
			
			<h3 >Подберите в пару предложения, которые слышите, и их переводы. </h3> 

  <div class="row" style="margin-bottom:1%">

    <div class="col-4 " >
    <!-- Блоки для перемещения-->  																																<!-- результат проверки-->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag1" data-div="drop1">Chào bà Mai!</div> 			                        <h2 class="text-danger" id="result1"></h2>  
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag2" data-div="drop3" >Bà khỏe không?</div>								
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag3" data-div="drop6">Cảm ơn ông, tôi vẫn thường, ông thế nào?</div>		 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag4" data-div="drop2">Bà ở đâu?</div>										 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag5" data-div="drop5">Tôi ở Footscray.</div>								 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag6" data-div="drop4">Bà làm việc ở đâu?</div>							
    </div>
		<!--Блоки ответов-->
<div class="col-4" > 
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop1"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop2"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop3"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop4"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop6"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop5"></div>	
</div>
		<!--Блоки вопросов-->
    <div class="col-4 text-left">
		<div class="height_div btn-light btn-lg btn-block" id="mir1"> Добрый вечер мисис Мэй</div>
		<div class="height_div btn-light btn-lg btn-block">Где ты работаешь?</div>	
		<div class="height_div btn-light btn-lg btn-block">Как твои дела?</div>
		<div class="height_div btn-light btn-lg btn-block">Где ты живешь?</div>	
		<div class="height_div btn-light btn-lg btn-block">У меня все хорошо, спасибо, как у тебя?</div>
		<div class="height_div btn-light btn-lg btn-block">Я живу в Футстрее.</div>

    </div>

	</div>
			<button onclick='window.location.reload(true)' class=" btn-lg"> ПОПРОБОВАТЬ СНОВА</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	</div>
	
</div>




<script>



			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/comword4.mp3'; // путь к файлу
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

			
			
//тренировка ОТВЕТЫ НА ВОПРОСЫ
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("content", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var answer = ev.dataTransfer.getData("content");
      if (ev.target.id == document.getElementById(answer).getAttribute('data-div')) {
        document.querySelector('#result1').textContent = "Правильно";
        ev.target.appendChild(document.getElementById(answer));
      } else {
        document.querySelector('#result1').textContent = "Неправильно";	
      }
    }
  //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords3=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>
