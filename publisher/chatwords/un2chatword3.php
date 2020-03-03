<?php
require_once 'chatwords/iconchatword.php';
?>

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
			<h3>Anh làm nghề gì?</h3>
			<h3>Кем ты работаешь?</h3> 
				<div class="post3">
					<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
					<p class="text">Прослушайте диалог:</p>
					<h3>Hùng: Chào chị. Chị tên là gì?</h3>
					<p class="text">Здравствуйте. Как вам зовут?</p> 
					<h3>An: Chào anh. Tôi tên là An.</h3>
					<p class="text">Здравствуйте. Меня зовут Ан.</p>
					<h3>Hùng: Còn tôi tên là Hùng. Chị làm nghề gi, chị An?</h3>
					<p class="text">Меня зовут Хум. Кем ты работаешь, Ан? </p>
					<h3>An: Tôi là giáo viên. Còn anh?</h3>
					<p class="text">Я работаю учителем. А ты?</p>					
					<h3>Hùng: Tôi là luật sư</h3>
					<p class="text">Я адвокат</p>
					
					<div class="col-lg-12 col-sm-12 col-xs-12 newwords " >
						<h3>Новые слова и фразы:</h3>
						<br>
						<h3>làm : делать (вспомогательный глагол)</h3>
						<br>						
						<h3>nghề : работа</h3>
						<br>						
						<h3>gì: что (используется в вопросительных предложениях) </h3>
						<br>						
						<h3>giáo viên : учитель</h3>	
						<br>
						<h3>luật sư : адвокат</h3>

					</div>					
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); 
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/chatwords/un2chatword3.mp3'; // путь к файлу
audiobutton.addEventListener("mousedown", function(event) { 
	if(audio.paused==true){
	audio.play(); // запускаем	
	document.getElementById('listenaudio').innerHTML='pause';
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?un2chatword4=value'; //переадресация на новую тренировку
 });	
</script>