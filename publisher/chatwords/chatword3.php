

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
			<h3>Anh tên là gì?</h3>
			<h3>Как тебя зовут?</h3> 
				<div class="post3">
					<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>
					<p class="text">Прослушайте диалог:</p>
					<h3>Nhân viên lễ tân: Chào bà!</h3>
					<p class="text">Портье: Здравствуйте!</p> 
					<h3>Khách: Chào cô.</h3>
					<p class="text">Гость: Здравствйте.</p>
					<h3>Nhân viên lễ tân: Xin lỗi, bà tên là gì?</h3>
					<p class="text">Портье:Извините, как Вас зовут?</p>
					<h3>Khách: Tôi tên là Annа.</h3>
					<p class="text">Гость: Меня зовут Анна.</p>					
					
					<div class="col-lg-12 col-sm-12 col-xs-12 newwords" >
						<h3>Новые слова и фразы:</h3>
						<br>
						<h3>Nhân viên lễ tân : Портье</h3>
						<br>						
						<h3>Khách : Гость</h3>
						<br>						
						<h3>Chào ba. Chào cô: Здравствуйте </h3>
						<br>						
						<h3>Xin lỗi : Извините</h3>	
						<br>
						<h3>bà tên là gì? : Как Вас зовут</h3>
						<br>						
						<h3>Tôi tên là : Меня зовут</h3>	

					</div>					
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
document.getElementById('hideBlockIcon2').style.display = 'block'; //блок  меню курса
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/chatwords/chatword3.mp3'; // путь к файлу
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
	location.href = 'index.php?chatword4=value'; //переадресация на новую тренировку
 });	
</script>