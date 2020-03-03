<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
		<h1>Числа: Những con số</h1>
     	<h3>Прослушайте как звучат числа на вьетнамском языке</h3> 
		<div class="post3">
		<button style="margin:10px;" onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" class="cardpic"></button>		    
		<h3>Для проверки знаний числительных воспользуйтесь тренировкой на нашем сайте.</h3> 		
		<a href="index.php?var2=value"><img src="images/cart2.png" class="cardpic"></a>	
		</div>
    
	<div class="row post3">
		<div class="col-lg-4 col-sm-4 col-xs-4"></div>
		<div class="col-lg-2 col-sm-2 col-xs-2" >
			<p  class="btn-light btn-lg btn-block" ><span class="textweight">Число</span></p> 	
			<p  class="btn-light btn-lg btn-block" >một</p> 			                       
			<p  class="btn-light btn-lg btn-block" >hai</p>								
			<p  class="btn-light btn-lg btn-block" >ba</p>		 
			<p  class="btn-light btn-lg btn-block" >bốn</p>										 
			<p  class="btn-light btn-lg btn-block" >năm</p>								 
			<p  class="btn-light btn-lg btn-block" >sáu</p>	
			<p  class="btn-light btn-lg btn-block" >bảy</p>	
			<p  class="btn-light btn-lg btn-block" >tám</p>	
			<p  class="btn-light btn-lg btn-block" >chín</p>
			<p  class="btn-light btn-lg btn-block" >mười</p>			

		</div>
		<div class="col-lg-2 col-sm-2 col-xs-2" > 
			<p  class="btn-light btn-lg btn-block" ><span class="textweight">Перевод</span></p> 
			<p  class="btn-light btn-lg btn-block" >Один</p>
			<p class="btn-light btn-lg btn-block" >Два</p>
			<p class="btn-light btn-lg btn-block" >Три</p>
			<p class="btn-light btn-lg btn-block" >Четыре</p>
			<p class="btn-light btn-lg btn-block" >Пять</p>
			<p class="btn-light btn-lg btn-block" >Шесть</p>	
			<p class="btn-light btn-lg btn-block" >Семь</p>	
			<p class="btn-light btn-lg btn-block" >Восемь</p>
			<p class="btn-light btn-lg btn-block" >Девять</p>
			<p class="btn-light btn-lg btn-block" >Десять</p>
		</div>

    <div class="col-lg-4 col-sm-4 col-xs-4">    </div>
	</div>		

	<div class="post3">
		<p>Числительные во Вьетнаме пишут на романизированном алфавите <span class="textweight"> quốc ngữ </span> или арабскими цифирами.
		</p>
		<h2 class="textweight">Числообразование:</h2>
		<p><span class="textweight">hai</span> два</p>
		<p><span class="textweight">mười hai</span> двенадцать</p>
		<p><span class="textweight">hai mười </span> двадцать</p>		
		<p><span class="textweight">hai mươi hai</span> двадцать два</p>
		<p><span class="textweight">một trăm </span> сто</p>
		<p><span class="textweight">hai trăm </span> двести</p>
		<p><span class="textweight">hai trăm mười hai</span> двести двенадцать</p>
		<p><span class="textweight">hai trăm mươi hai</span> двести двадцать два</p>
			
	</div>

 

			<p><button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>	</p>			
     </div>			
	</div>
	
</div>




<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton = document.getElementById("listenaudio"); // событие рандома
var audio = new Audio(); //объект для хранения аудиофайла 
audio.src = 'audio/number.mp3'; // путь к файлу
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
	location.href = 'index.php?comwords16=value'; //переадресация на новую тренировку
//history.back(); 

 });
</script>
