<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
			<div id="deleteid">
			<img src="book.png" class="cardpic" >
			<h3>Урок 1</h3> 
			<h1>Bài 1</h1> 	
			<h3>Мои первые слова</h3> 	
			<button onclick="start" class="button  btn-light btn-lg" id="start">НАЧАТЬ</button>	
			</div>
			<div id="parent"></div>
			<div id="parent1"></div>
			<div id="parent2"></div>
			<div id="parent3"></div>
			<div id="parent4"></div>	
			<div id="parent5"></div>			<!--новый блок после перехода из тренировки--> 
	</div>
	
	</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script>

//нажатие кнопки старт
                        //СТРАНИЦА 0
var newbutton = document.getElementById("start"); // нажатие кнопки старт
//кнопка старт
newbutton.addEventListener("mousedown", function(event) { // событие при нажатии мышью
if (event.which == 1)
	deleteid.parentNode.removeChild(deleteid); //очистка от предыдущего блока

                        //СТРАНИЦА1
//создание нового блока

var parent = document.getElementById('parent');

//загрузка картинки
var img = document.createElement('img');
img.src='images/letters.png';
parent.appendChild(img);

var h3 = document.createElement('h3');
h3.innerHTML = 'Вьетнамский язык использует романизированную письменную систему и является тональным языком. ';
parent.appendChild(h3);

var h3 = document.createElement('h3');
h3.innerHTML = 'Каждый слог образован одной гласной, содержащей тон, которая очень важна для смысла слова и является частью слога.';
parent.appendChild(h3);		

var h3 = document.createElement('h3');
h3.innerHTML = 'Во вьетнамском алфавите 12 гласных и 17согласных.';
parent.appendChild(h3);	

        //ПРОИГРЫВАНИЕ АУДИОФАЙЛА
//кнопка аудиофайла
	var button = document.createElement('button');
	button.className = 'button  btn-light btn-lg';
	button.id = "listenaudio";
	button.innerHTML = '<img src="images/audio.png" width="200" height="200">';
	parent.appendChild(button);

//загрузка аудиофайла
	var audio = new Audio(); 
	audio.src = 'audio/alphabet.mp3'; // путь к файлу
	document.getElementById('listenaudio').onclick=function(){
	if(audio.paused==true){
	parent.appendChild(audio);	
	audio.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	}
	};
	    //КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА
		
		
		
var h3 = document.createElement('h3');
h3.innerHTML = 'Произносите кажду букву по отдельности. Продолжайте тренировку, пока не почувствуете, что произносите буквы правильно.';
parent.appendChild(h3);

//создание кнопки ПРОДОЛЖИТЬ	
var buttonnext = document.createElement('button');
buttonnext.className = 'button  btn-light btn-lg';
buttonnext.id = "next";
buttonnext.innerHTML = 'ПРОДОЛЖИТЬ';
parent.appendChild(buttonnext);	


//кнопка продолжение
var newbutton = document.getElementById("next"); // нажатие кнопки старт
newbutton.addEventListener("mousedown", function(event) { // событие при нажатии мышью
if (event.which == 1)	

                          //СТРАНИЦА 2

//страница контента
var parent1 = document.getElementById('parent1');
parent1.parentNode.removeChild(parent); //очистка от предыдущего блока

//загрузка картинки
var img = document.createElement('img');
img.src='iconbook.png';
parent1.appendChild(img);

var h3 = document.createElement('h3');
h3.innerHTML = 'Слушайте буквы и отрабатывайте произношение.';
parent1.appendChild(h3);

//КНОПКИ ВОСПРОИЗВЕДЕНИЯ ЗВУКОВ
var button = document.createElement('button');
button.className = 'button  btn btn btn-warning btn-sm';
button.id = "next";
button.innerHTML = 'А';
parent1.appendChild(button);
//загрузка аудиофайла
	var audio = new Audio(); 	
	document.getElementById('next').onclick=function(){

	if(audio.paused==true){

	audio.src = 'audio/100.mp3'; // путь к файлу	
	parent1.appendChild(audio);	
	audio.play(); // запускаем/	
	document.getElementById('next').innerHTML='pause';
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio.pause(); // 	
	document.getElementById('next').innerHTML='А';
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
	
var button1 = document.createElement('button');
button1.className = 'button  btn btn btn-warning btn-sm';
button1.id = "next1";
button1.innerHTML = 'Ă';
parent1.appendChild(button1);
//загрузка аудиофайла
	var audio1 = new Audio(); 	
	document.getElementById('next1').onclick=function(){

	if(audio1.paused==true){

	audio1.src = 'audio/1.mp3'; // путь к файлу	
	parent1.appendChild(audio1);	
	audio1.play(); // запускаем/	
	document.getElementById('next1').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 	
	}else{
	audio1.pause(); // 	
	document.getElementById('next1').innerHTML='Ă';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};

var button2 = document.createElement('button');
button2.className = 'button  btn btn btn-warning btn-sm';
button2.id = "next2";
button2.innerHTML = 'Â';
parent1.appendChild(button2);
//загрузка аудиофайла
	var audio2 = new Audio(); 	
	document.getElementById('next2').onclick=function(){

	if(audio2.paused==true){

	audio2.src = 'audio/2.mp3'; // путь к файлу	
	parent1.appendChild(audio2);	
	audio2.play(); // запускаем/	
	document.getElementById('next2').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 	
	}else{
	audio2.pause(); // 	
	document.getElementById('next2').innerHTML='Â';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};

var button3 = document.createElement('button');
button3.className = 'button  btn btn btn-warning btn-sm';
button3.id = "next3";
button3.innerHTML = 'B';
parent1.appendChild(button3);
//загрузка аудиофайла
	var audio3 = new Audio(); 	
	document.getElementById('next3').onclick=function(){

	if(audio3.paused==true){

	audio3.src = 'audio/3.mp3'; // путь к файлу	
	parent1.appendChild(audio3);	
	audio3.play(); // запускаем/	
	document.getElementById('next3').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 	
	}else{
	audio3.pause(); // 	
	document.getElementById('next3').innerHTML='B';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button4 = document.createElement('button');
button4.className = 'button  btn btn btn-warning btn-sm';
button4.id = "next4";
button4.innerHTML = 'C';
parent1.appendChild(button4);
//загрузка аудиофайла
	var audio4 = new Audio(); 	
	document.getElementById('next4').onclick=function(){

	if(audio4.paused==true){

	audio4.src = 'audio/4.mp3'; // путь к файлу	
	parent1.appendChild(audio4);	
	audio4.play(); // запускаем/	
	document.getElementById('next4').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 	
	}else{
	audio4.pause(); // 	
	document.getElementById('next4').innerHTML='C';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};



var button5 = document.createElement('button');
button5.className = 'button  btn btn btn-warning btn-sm';
button5.id = "next5";
button5.innerHTML = 'D';
parent1.appendChild(button5);
//загрузка аудиофайла
	var audio5 = new Audio(); 	
	document.getElementById('next5').onclick=function(){

	if(audio5.paused==true){

	audio5.src = 'audio/5.mp3'; // путь к файлу	
	parent1.appendChild(audio5);	
	audio5.play(); // запускаем/	
	document.getElementById('next5').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio5.pause(); // 	
	document.getElementById('next5').innerHTML='D';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};

var button6 = document.createElement('button');
button6.className = 'button  btn btn btn-warning btn-sm';
button6.id = "next6";
button6.innerHTML = 'Đ';
parent1.appendChild(button6);
//загрузка аудиофайла
	var audio6 = new Audio(); 	
	document.getElementById('next6').onclick=function(){

	if(audio6.paused==true){

	audio6.src = 'audio/6.mp3'; // путь к файлу	
	parent1.appendChild(audio6);	
	audio6.play(); // запускаем/	
	document.getElementById('next6').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio6.pause(); // 	
	document.getElementById('next6').innerHTML='Đ';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};

var button7 = document.createElement('button');
button7.className = 'button  btn btn btn-warning btn-sm';
button7.id = "next7";
button7.innerHTML = 'E';
parent1.appendChild(button7);
//загрузка аудиофайла
	var audio7 = new Audio(); 	
	document.getElementById('next7').onclick=function(){

	if(audio7.paused==true){

	audio7.src = 'audio/7.mp3'; // путь к файлу	
	parent1.appendChild(audio7);	
	audio7.play(); // запускаем/	
	document.getElementById('next7').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio7.pause(); // 	
	document.getElementById('next7').innerHTML='E';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button8 = document.createElement('button');
button8.className = 'button  btn btn btn-warning btn-sm';
button8.id = "next8";
button8.innerHTML = 'Ê';
parent1.appendChild(button8);
//загрузка аудиофайла
	var audio8 = new Audio(); 
	audio8.src = 'audio/8.mp3'; // путь к файлу	
	document.getElementById('next8').onclick=function(){	
	if(audio8.paused==true){
	parent1.appendChild(audio8);	
	audio8.play(); // запускаем/	
	document.getElementById('next8').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio8.pause(); // 	
	document.getElementById('next8').innerHTML='Ê';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button9 = document.createElement('button');
button9.className = 'button  btn btn btn-warning btn-sm';
button9.id = "next9";
button9.innerHTML = 'G';
parent1.appendChild(button9);
//загрузка аудиофайла
	var audio9 = new Audio(); 
	audio9.src = 'audio/9.mp3'; // путь к файлу	
	document.getElementById('next9').onclick=function(){	
	if(audio9.paused==true){
	parent1.appendChild(audio9);	
	audio9.play(); // запускаем/	
	document.getElementById('next9').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 			
	}else{
	audio9.pause(); // 	
	document.getElementById('next9').innerHTML='G';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button10 = document.createElement('button');
button10.className = 'button  btn btn btn-warning btn-sm';
button10.id = "next10";
button10.innerHTML = 'H';
parent1.appendChild(button10);
//загрузка аудиофайла
	var audio10 = new Audio(); 
	audio10.src = 'audio/10.mp3'; // путь к файлу	
	document.getElementById('next10').onclick=function(){	
	if(audio10.paused==true){
	parent1.appendChild(audio10);	
	audio10.play(); // запускаем/	
	document.getElementById('next10').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio10.pause(); // 	
	document.getElementById('next10').innerHTML='H';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button11 = document.createElement('button');
button11.className = 'button  btn btn btn-warning btn-sm';
button11.id = "next11";
button11.innerHTML = 'I';
parent1.appendChild(button11);
//загрузка аудиофайла
	var audio11 = new Audio(); 
	audio11.src = 'audio/11.mp3'; // путь к файлу	
	document.getElementById('next11').onclick=function(){	
	if(audio11.paused==true){
	parent1.appendChild(audio11);	
	audio11.play(); // запускаем/	
	document.getElementById('next11').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio11.pause(); // 	
	document.getElementById('next11').innerHTML='I';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button12 = document.createElement('button');
button12.className = 'button  btn btn btn-warning btn-sm';
button12.id = "next12";
button12.innerHTML = 'K';
parent1.appendChild(button12);
//загрузка аудиофайла
	var audio12 = new Audio(); 
	audio12.src = 'audio/12.mp3'; // путь к файлу	
	document.getElementById('next12').onclick=function(){	
	if(audio12.paused==true){
	parent1.appendChild(audio12);	
	audio12.play(); // запускаем/	
	document.getElementById('next12').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio12.pause(); // 	
	document.getElementById('next12').innerHTML='K';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};

	
	
var button13 = document.createElement('button');
button13.className = 'button  btn btn btn-warning btn-sm';
button13.id = "next13";
button13.innerHTML = 'L';
parent1.appendChild(button13);

//загрузка аудиофайла
	var audio13 = new Audio(); 
	audio13.src = 'audio/13.mp3'; // путь к файлу	
	document.getElementById('next13').onclick=function(){	
	if(audio13.paused==true){
	parent1.appendChild(audio13);	
	audio13.play(); // запускаем/	
	document.getElementById('next13').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio13.pause(); // 	
	document.getElementById('next13').innerHTML='L';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
	
//для пробела между кнопками
var h3 = document.createElement('h3');
h3.innerHTML = '';
parent1.appendChild(h3);	
	
	
var button14 = document.createElement('button');
button14.className = 'button  btn btn btn-warning btn-sm';
button14.id = "next14";
button14.innerHTML = 'M';
parent1.appendChild(button14);
//загрузка аудиофайла
	var audio14 = new Audio(); 
	audio14.src = 'audio/14.mp3'; // путь к файлу	
	document.getElementById('next14').onclick=function(){	
	if(audio14.paused==true){
	parent1.appendChild(audio14);	
	audio14.play(); // запускаем/	
	document.getElementById('next14').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio14.pause(); // 	
	document.getElementById('next14').innerHTML='M';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button15 = document.createElement('button');
button15.className = 'button  btn btn btn-warning btn-sm';
button15.id = "next15";
button15.innerHTML = 'N';
parent1.appendChild(button15);
//загрузка аудиофайла
	var audio15 = new Audio(); 
	audio15.src = 'audio/15.mp3'; // путь к файлу	
	document.getElementById('next15').onclick=function(){	
	if(audio15.paused==true){
	parent1.appendChild(audio15);	
	audio15.play(); // запускаем/	
	document.getElementById('next15').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio15.pause(); // 	
	document.getElementById('next15').innerHTML='N';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button16 = document.createElement('button');
button16.className = 'button  btn btn btn-warning btn-sm';
button16.id = "next16";
button16.innerHTML = 'O';
parent1.appendChild(button16);
//загрузка аудиофайла
	var audio16 = new Audio(); 
	audio16.src = 'audio/16.mp3'; // путь к файлу	
	document.getElementById('next16').onclick=function(){	
	if(audio16.paused==true){
	parent1.appendChild(audio16);	
	audio16.play(); // запускаем/	
	document.getElementById('next16').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio16.pause(); // 	
	document.getElementById('next16').innerHTML='O';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button17 = document.createElement('button');
button17.className = 'button  btn btn btn-warning btn-sm';
button17.id = "next17";
button17.innerHTML = 'Ô';
parent1.appendChild(button17);
//загрузка аудиофайла
	var audio17 = new Audio(); 
	audio17.src = 'audio/17.mp3'; // путь к файлу	
	document.getElementById('next17').onclick=function(){	
	if(audio17.paused==true){
	parent1.appendChild(audio17);	
	audio17.play(); // запускаем/	
	document.getElementById('next17').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio17.pause(); // 	
	document.getElementById('next17').innerHTML='Ô';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button18 = document.createElement('button');
button18.className = 'button  btn btn btn-warning btn-sm';
button18.id = "next18";
button18.innerHTML = 'Ơ';
parent1.appendChild(button18);
//загрузка аудиофайла
	var audio18 = new Audio(); 
	audio18.src = 'audio/18.mp3'; // путь к файлу	
	document.getElementById('next18').onclick=function(){	
	if(audio18.paused==true){
	parent1.appendChild(audio18);	
	audio18.play(); // запускаем/	
	document.getElementById('next18').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio18.pause(); // 	
	document.getElementById('next18').innerHTML='Ơ';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button19 = document.createElement('button');
button19.className = 'button  btn btn btn-warning btn-sm';
button19.id = "next19";
button19.innerHTML = 'P';
parent1.appendChild(button19);
//загрузка аудиофайла
	var audio19 = new Audio(); 
	audio19.src = 'audio/19.mp3'; // путь к файлу	
	document.getElementById('next19').onclick=function(){	
	if(audio19.paused==true){
	parent1.appendChild(audio19);	
	audio19.play(); // запускаем/	
	document.getElementById('next19').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio19.pause(); // 	
	document.getElementById('next19').innerHTML='P';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button20 = document.createElement('button');
button20.className = 'button  btn btn btn-warning btn-sm';
button20.id = "next20";
button20.innerHTML = 'Q';
parent1.appendChild(button20);
//загрузка аудиофайла
	var audio20 = new Audio(); 
	audio20.src = 'audio/20.mp3'; // путь к файлу	
	document.getElementById('next20').onclick=function(){	
	if(audio20.paused==true){
	parent1.appendChild(audio20);	
	audio20.play(); // запускаем/	
	document.getElementById('next20').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio20.pause(); // 	
	document.getElementById('next20').innerHTML='Q';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button21 = document.createElement('button');
button21.className = 'button  btn btn btn-warning btn-sm';
button21.id = "next21";
button21.innerHTML = 'R';
parent1.appendChild(button21);
//загрузка аудиофайла
	var audio21 = new Audio(); 
	audio21.src = 'audio/21.mp3'; // путь к файлу	
	document.getElementById('next21').onclick=function(){	
	if(audio21.paused==true){
	parent1.appendChild(audio21);	
	audio21.play(); // запускаем/	
	document.getElementById('next21').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio21.pause(); // 	
	document.getElementById('next21').innerHTML='R';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button22 = document.createElement('button');
button22.className = 'button  btn btn btn-warning btn-sm';
button22.id = "next22";
button22.innerHTML = 'S';
parent1.appendChild(button22);
//загрузка аудиофайла
	var audio22 = new Audio(); 
	audio22.src = 'audio/22.mp3'; // путь к файлу	
	document.getElementById('next22').onclick=function(){	
	if(audio22.paused==true){
	parent1.appendChild(audio22);	
	audio22.play(); // запускаем/	
	document.getElementById('next22').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio22.pause(); // 	
	document.getElementById('next22').innerHTML='S';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button23 = document.createElement('button');
button23.className = 'button  btn btn btn-warning btn-sm';
button23.id = "next23";
button23.innerHTML = 'T';
parent1.appendChild(button23);
//загрузка аудиофайла
	var audio23 = new Audio(); 
	audio23.src = 'audio/23.mp3'; // путь к файлу	
	document.getElementById('next23').onclick=function(){	
	if(audio23.paused==true){
	parent1.appendChild(audio23);	
	audio23.play(); // запускаем/	
	document.getElementById('next23').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio23.pause(); // 	
	document.getElementById('next23').innerHTML='T';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button24 = document.createElement('button');
button24.className = 'button  btn btn btn-warning btn-sm';
button24.id = "next24";
button24.innerHTML = 'U';
parent1.appendChild(button24);
//загрузка аудиофайла
	var audio24 = new Audio(); 
	audio24.src = 'audio/24.mp3'; // путь к файлу	
	document.getElementById('next24').onclick=function(){	
	if(audio24.paused==true){
	parent1.appendChild(audio24);	
	audio24.play(); // запускаем/	
	document.getElementById('next24').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio24.pause(); // 	
	document.getElementById('next24').innerHTML='U';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button25 = document.createElement('button');
button25.className = 'button  btn btn btn-warning btn-sm';
button25.id = "next25";
button25.innerHTML = 'Ư';
parent1.appendChild(button25);
//загрузка аудиофайла
	var audio25 = new Audio(); 
	audio25.src = 'audio/25.mp3'; // путь к файлу	
	document.getElementById('next25').onclick=function(){	
	if(audio25.paused==true){
	parent1.appendChild(audio25);	
	audio25.play(); // запускаем/	
	document.getElementById('next25').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio25.pause(); // 	
	document.getElementById('next25').innerHTML='Ư';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button26 = document.createElement('button');
button26.className = 'button  btn btn btn-warning btn-sm';
button26.id = "next26";
button26.innerHTML = 'V';
parent1.appendChild(button26);
//загрузка аудиофайла
	var audio26 = new Audio(); 
	audio26.src = 'audio/26.mp3'; // путь к файлу	
	document.getElementById('next26').onclick=function(){	
	if(audio26.paused==true){
	parent1.appendChild(audio26);	
	audio26.play(); // запускаем/	
	document.getElementById('next26').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio26.pause(); // 	
	document.getElementById('next26').innerHTML='V';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button27 = document.createElement('button');
button27.className = 'button  btn btn btn-warning btn-sm';
button27.id = "next27";
button27.innerHTML = 'X';
parent1.appendChild(button27);
//загрузка аудиофайла
	var audio27 = new Audio(); 
	audio27.src = 'audio/27.mp3'; // путь к файлу	
	document.getElementById('next27').onclick=function(){	
	if(audio27.paused==true){
	parent1.appendChild(audio27);	
	audio27.play(); // запускаем/	
	document.getElementById('next27').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = true; // кнопка  проверки не активна 		
	}else{
	audio27.pause(); // 	
	document.getElementById('next27').innerHTML='X';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next28').disabled = false; // кнопка  проверки не активна 
	}
	};
var button28 = document.createElement('button');
button28.className = 'button  btn btn btn-warning btn-sm';
button28.id = "next28";
button28.innerHTML = 'Y';
parent1.appendChild(button28);
//загрузка аудиофайла
	var audio28 = new Audio(); 
	audio28.src = 'audio/28.mp3'; // путь к файлу	
	document.getElementById('next28').onclick=function(){	
	if(audio28.paused==true){
	parent1.appendChild(audio28);	
	audio28.play(); // запускаем/	
	document.getElementById('next28').innerHTML='pause';
	document.getElementById('next').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next1').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = true; // кнопка  проверки не активна
	document.getElementById('next4').disabled = true; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = true; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = true; // кнопка  проверки не активна 
	
	}else{
	audio28.pause(); // 	
	document.getElementById('next28').innerHTML='Y';
	document.getElementById('next').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next1').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next4').disabled = false; // кнопка  проверки не активна 	
	document.getElementById('next5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next6').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next7').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next8').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next9').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next10').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next11').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next12').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next13').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next14').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next15').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next16').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next17').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next18').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next19').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next20').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next21').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next22').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next23').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next24').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next25').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next26').disabled = false; // кнопка  проверки не активна 
	document.getElementById('next27').disabled = false; // кнопка  проверки не активна 
	}
	};

//для пробела между кнопками
var h3 = document.createElement('h3');
h3.innerHTML = '';
parent1.appendChild(h3);

//создание кнопки ПРОДОЛЖИТЬ	
var buttonnext = document.createElement('button');
buttonnext.className = 'button  btn-light btn-lg';
buttonnext.id = "nextpage";
buttonnext.innerHTML = 'ПРОДОЛЖИТЬ';
parent1.appendChild(buttonnext);	
//кнопка продолжение
var newbutton = document.getElementById("nextpage"); // нажатие кнопки старт
newbutton.addEventListener("mousedown", function(event) { // событие при нажатии мышью
if (event.which == 1)
                          //СТРАНИЦА 3

//страница контента
var parent2 = document.getElementById('parent2');
parent2.parentNode.removeChild(parent1); //очистка от предыдущего блока


var h3 = document.createElement('h3');
h3.innerHTML = 'Знакомство. Сhào hỏi.';
parent2.appendChild(h3);

//загрузка картинки
var img = document.createElement('img');
img.src='images/greetings.png';
parent2.appendChild(img);

var h3 = document.createElement('h3');
h3.innerHTML = 'Прослушайте весь диалог.';
parent2.appendChild(h3);

//ПРОИГРЫВАНИЕ АУДИОФАЙЛА
//кнопка аудиофайла
	var button = document.createElement('button');
	button.className = 'button  btn-light btn-lg';
	button.id = "listenaudio";
	button.innerHTML = '<img src="images/audio.png" width="200" height="200">';
	parent2.appendChild(button);

//загрузка аудиофайла
	var audio = new Audio(); 
	audio.src = 'audio/comword1.mp3'; // путь к файлу
	document.getElementById('listenaudio').onclick=function(){
	if(audio.paused==true){
	parent2.appendChild(audio);	
	audio.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	}
	};
	    //КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА


var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Chào cô!';
parent2.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Сhào anh!';
parent2.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Tôi là Oleg, hân hạnh gặp cô.';
parent2.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Tôi là Mai. Anh khỏe không?';
parent2.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Cảm ơn cô,  tôi vẫn bình thường; Còn cô thế nào?';
parent2.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Tôi khỏe, cám ơn.';
parent2.appendChild(h3);
//создание кнопки ПРОДОЛЖИТЬ	
var buttonnext = document.createElement('button');
buttonnext.className = 'button  btn-light btn-lg';
buttonnext.id = "nextpage";
buttonnext.innerHTML = 'ПРОДОЛЖИТЬ';
parent2.appendChild(buttonnext);	
var buttonnext = document.getElementById("nextpage"); // нажатие кнопки старт
buttonnext.addEventListener("mousedown", function(event) { // событие при нажатии мышью
if (event.which == 1)
                          //СТРАНИЦА 4

//страница контента
var parent3 = document.getElementById('parent3');
parent3.parentNode.removeChild(parent2); //очистка от предыдущего блока
var h3 = document.createElement('h3');
h3.innerHTML =  'Знакомство с людьми. Làm quen với người nào';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Сhào hỏi.';
parent2.appendChild(h3);

//загрузка картинки
var img = document.createElement('img');
img.src='images/greetings.png';
parent3.appendChild(img);

var h3 = document.createElement('h3');
h3.innerHTML = 'Послушайте диалог для закрепления произношения.';
parent3.appendChild(h3);

//ПРОИГРЫВАНИЕ АУДИОФАЙЛА
//кнопка аудиофайла
	var button = document.createElement('button');
	button.className = 'button  btn-light btn-lg';
	button.id = "listenaudio";
	button.innerHTML = '<img src="images/audio.png" width="200" height="200">';
	parent3.appendChild(button);

//загрузка аудиофайла
	var audio = new Audio(); 
	audio.src = 'audio/comword2.mp3'; // путь к файлу
	document.getElementById('listenaudio').onclick=function(){
	if(audio.paused==true){
	parent3.appendChild(audio);	
	audio.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
	}else{
	audio.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	}
	};
	    //КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА


var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Chào bà Mai! Bà khỏe không?';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Chào ông Oleg! Cảm ơn ông, tôi vẫn thường, ông thế nào?';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Tôi khỏe,cám ơn bà. Bà qua Nga bao lâu rồi?';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Đã, ba tháng rồi.';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Bà ở đâu?';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Tôi ở Footscray.';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Олег: Bà làm việc ở đâu?';
parent3.appendChild(h3);
var h3 = document.createElement('h3');
h3.innerHTML = 'Mai: Tôi làm việc ở hãng Holden.';
parent3.appendChild(h3);

//создание кнопки ПРОДОЛЖИТЬ	
var buttonnext = document.createElement('button');
buttonnext.className = 'button  btn-light btn-lg';
buttonnext.id = "nextpage";
var a ="index.php?comwords1=value"; //ссылка на страницу тренировки

buttonnext.innerHTML = 'ПРОДОЛЖИТЬ';
parent3.appendChild(buttonnext);	
var buttonnext = document.getElementById("nextpage"); // кнопка старт

//СТРАНИЦА5
//открытие страницы по ссылке
document.getElementById('nextpage').onclick=function(){
var parent4 = document.getElementById('parent4');
parent4.parentNode.removeChild(parent3); //очистка от предыдущего блока
location.href = 'index.php?comwords1=value'; //новое окно в старой вкладке
};
//ВОЗВРАЩЕНИЕ НА СТРАНИЦУ ПОСЛЕ ТРЕНИРОВКИ
//СТРАНИЦА6
});
});
});
});	

</script>