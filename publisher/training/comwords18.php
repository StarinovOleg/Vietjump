<?php
require_once 'training/iconcomwords.php';

?>
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Знакомство</h3>
			<h3>Мистер Старинов и мисис Хай знакомятся друг с другом.</h3> 
			<h3 >Мистер Старинов знакомит мистера Нам с мисис Хай.</h3> 	
			
			
			<p><img src="images/word.png" class="cardpic"><p>	
			<h3>Прослушайте диалог и расставьте предложения в правильном порядке </h3> 
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"style="margin:10px;"><img src="images/audio.png" class="cardpic" ></button>				
  <div class="row">
	<div class="col-2">
	
	</div>
    <div class="col-4" >
    <!-- Блоки для перемещения--> 
    <!-- Блоки для перемещения-->  																																<!-- результат проверки-->
 		
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag1" data-div="drop3">Ông Starinov: Cảm ơn bà, tôi khỏe; con bà thế nào?</div><!--3 --> <h2 class="text-danger" id="result1"></h2>  
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag2" data-div="drop5" >Ông Starinov: Bà Hai, đây là ông Nam</div>		<!--5 -->						
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag3" data-div="drop7">Ông Starinov: Ông Biết bà Hải không?</div>		<!--7 -->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag4" data-div="drop1">Ông Starinov: Chào Bà Hai!</div>		<!--1 -->								 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag5" data-div="drop2">Bà Hai: Chào ông Starinov!Ông khỏe không? </div>		<!--2  -->						 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag6" data-div="drop6">Bà Hai: Chào ông Nam! Hân hạnh gặp ông.</div>	<!--  6-->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag7" data-div="drop8">Ông Nam: Hân hạnh gặp bà</div>		<!-- 8 -->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag8" data-div="drop4">Bà Hai: Dạ, cảm ơn ông. Tôi vẫn thường.</div>		<!--  4-->
		
    </div>
		<!--Блоки ответов-->
<div class="col-4" style="margin:10px;" > 
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop1"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop2"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop3"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop4"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop5"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop6"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop7"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop8"></div>


</div>

		<!--Блоки вопросов-->
    <div class="col-2 text-left">    </div>

	</div>

			<p><button onclick='window.location.reload(true)' class=" btn-lg"> ПОПРОБОВАТЬ СНОВА</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>			</p>	
     </div>			
	</div>
	
</div>




<script>
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
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/comdialog.mp3'; // путь к файлу
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
	location.href = 'index.php?comwords19=value'; //переадресация на новую тренировку
//history.back(); 

 });
</script>
