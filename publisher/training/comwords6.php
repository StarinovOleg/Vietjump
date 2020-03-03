<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Первые диалоги.</h3> 	
			
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
			
			<h3 >Прослушайте диалог и выберете правильные ответы.</h3><h3> Bạn từ đâu đến? </h3> 
			<div class="post3">
				<h3 ><span class="textweight">Mai từ đâu đến?</span> </h3>
				<h1 class="text-danger" id="result1"></h1>  <!-- разметка результата проверки-->
				<h3><label><input type="radio"  id="correct"    class ="offbutton" onclick="check('result1')" name="radio1"> Cô ấy đến từ Born</label></h3>
				<h3><label><input type="radio"  id="incorrect"  class ="offbutton" onclick="check('result1')" name="radio1"> Cô ấy đến từ Berlin</label></h3>
				<h3><label><input type="radio"  id="incorrect2" class ="offbutton" onclick="check('result1')" name="radio1"> Cô ấy đến từ Boston</label></h3>			
 			</div>
			<div class="post3">			
				<h3 ><span class="textweight">Oleg từ đâu đến?</span> </h3>
				<h1 class="text-danger" id="result2"></h1>  <!-- разметка результата проверки-->
				<h3><label><input type="radio"  id="correct1"    class ="offbutton" onclick="check2('result2')" name="radio2">Anh ấy đến từ Palormo</label></h3>
				<h3><label><input type="radio"  id="incorrect3"  class ="offbutton" onclick="check2('result2')" name="radio2"> Anh ấy đến từ Paris</label></h3>
				<h3><label><input type="radio"  id="incorrect4" class ="offbutton" onclick="check2('result2')" name="radio2"> Anh ấy đến từ Moscow</label></h3>				
 			</div>			

			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	</div>
	
</div>



<script>
          //ПРОВЕРКА РАДИО КНОПОК
function check(){
if(document.getElementById('correct').checked) {
    document.querySelector('#result1').textContent = "Правильно";
}else if(document.getElementById('incorrect').checked) {
    document.querySelector('#result1').textContent = "Неправильно";   
}else if(document.getElementById('incorrect2').checked){
    document.querySelector('#result1').textContent = "Неправильно"; 
}
};
function check2(){
if(document.getElementById('correct1').checked) {
    document.querySelector('#result2').textContent = "Правильно";
}else if(document.getElementById('incorrect3').checked) {
    document.querySelector('#result2').textContent = "Неправильно";   
}else if(document.getElementById('incorrect4').checked){
    document.querySelector('#result2').textContent = "Неправильно"; 
}
}; 


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
	location.href = 'index.php?comwords7=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>