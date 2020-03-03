<?php
require_once 'training/iconcomwords.php';

?>

<div class="container">
	
	<div class="row">

	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">

			<h3>Прослушайте записи и выберете корректный тон.</h3> 	
			<p>Во вьетнамском языке различают 6 тоннов. Каждый тон обозначен специальным диакритическим знаком. Ровный тон такого знака не имеет.
			Начинающим изучать вьетнамский язык может показаться, что все тона звучат одинаково, но это не так. Тоны имеют смыcлоразличительное значение,
			поэтому важно их не путать.
			</p>
			
	
			<div class="post3">
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio"><img src="images/audio.png" width="200" height="200"></button>					
			<h3 >Выберете слово с восходящим тоном.</h3> <h3> tam (восемь), lam(делать), hoi(спрашивать)	</h3><!-- tam-->
			 <h1 class="text-danger" id="result1"></h1>  <!-- разметка результата проверки-->
			<h3><label><input type="radio"  id="correct"    class ="offbutton" onclick="check('result1')" name="radio1"> tam</label></h3>
			<h3><label><input type="radio"  id="incorrect"  class ="offbutton" onclick="check('result1')" name="radio1"> lam</label></h3>
			<h3><label><input type="radio"  id="incorrect2" class ="offbutton" onclick="check('result1')" name="radio1"> hoi</label></h3>
			<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>
			<button id="help1" class="btn-lg" onclick="myFunction('helpresult1')"> ПОДСКАЗКА</button>	 <!-- использование функции онклик для закрытия-->
            </p>
			</div>
			

			<div class="post3">	
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio2"><img src="images/audio.png" width="200" height="200"></button>			
			<h3>Выбрете слово с нисходящим тоном.</h3> <h3>ban(продавать), phong (комната), phai(правильно)</h3>  <!-- phong--> <h2 class="text-danger" id="result1"></h2>  
			<h1 class="text-danger" id="result2"></h1>  <!-- разметка результата проверки-->
			<h3><label><input type="radio" id="incorrect3" class ="offbutton" name="radio2" onclick="check2('result2')"> bam</label>
			<h3><label><input type="radio" id="correct1"   class ="offbutton" name="radio2" onclick="check2('result2')"> phong</label></h3>
			<h3><label><input type="radio" id="incorrect4" class ="offbutton" name="radio2" onclick="check2('result2')"> phai</label></h3>
			<p   id="helpresult2" style="display: none;"></p>  <!-- разметка подсказки-->
			<p>	<button id="help2" class=" btn-lg" onclick="myFunction('helpresult2')"> ПОДСКАЗКА</button>				
            </p>
			</div>
			
			
			<div class="post3">
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio3"><img src="images/audio.png" width="200" height="200"></button>			
			<h3>Выбрете слово с вопросительным тоном.</h3> <h3> sack(книга), đương (сахар), nưa(половина)</h3>   <!-- nua-->
			<h1 class="text-danger" id="result3"></h1>  <!-- разметка результата проверки-->
			<h3><label><input type="radio" id="incorrect5" class ="offbutton" name="radio3" onclick="check3('result3')"> sack</label></h3>
			<h3><label><input type="radio" id="incorrect6" class ="offbutton" name="radio3"	onclick="check3('result3')"> đương</label></h3>
			<h3><label><input type="radio" id="correct3"   class ="offbutton" name="radio3"	onclick="check3('result3')"> nưa</label></h3>
			<p id="helpresult3" style="display: none;"></p>  <!-- разметка подсказки-->			
			<p>
			<button id="help3" class=" btn-lg" onclick="myFunction('helpresult3')"> ПОДСКАЗКА</button>				
            </p>
			</div>
			

			<div class="post3">		
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio4"><img src="images/audio.png" width="200" height="200"></button>				
			<h3>Выбрете слово с островопросительным тоном.</h3> <h3> nghi(думать), ba(бабушка), da(да) </h3>  <!-- nghi-->
			<h1 class="text-danger" id="result4"></h1>  <!-- разметка результата проверки-->
			<h3><label><input type="radio" id="correct4"     class ="offbutton" name="radio4"	onclick="check4('result4')"> nghi</label></h3>
			<h3><label><input type="radio" id="incorrect7"   class ="offbutton" name="radio4"	onclick="check4('result4')"> ba</label></h3>
			<h3><label><input type="radio" id="incorrect8"   class ="offbutton" name="radio4"	onclick="check4('result4')"> da</label></h3>	
			<p id="helpresult4" style="display: none;"></p>  <!-- разметка подсказки-->			
			<p>
			<button id="help4" class=" btn-lg" onclick="myFunction('helpresult4')"> ПОДСКАЗКА</button>		
            </p>
			</div>
			

			<div class="post3">	
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio5"><img src="images/audio.png" width="200" height="200"></button>				
			<h3>Выбрете слово с тяжелым тоном.</h3> <h3> lam(делать), ban(продавать), chơ(маркет)</h3>  <!--la -->
			<h1 class="text-danger" id="result5"></h1>  			<!-- разметка результата проверки-->
			<h3><label><input type="radio" id="incorrect9"     class ="offbutton" name="radio5"	onclick="check5('result5')"> lam</label></h3>
			<h3><label><input type="radio" id="correct5"     class ="offbutton" name="radio5"	onclick="check5('result5')" > la</label></h3>
			<h3><label><input type="radio" id="incorrect10"     class ="offbutton" name="radio5"	onclick="check5('result5')"> bao</label></h3>	
			<p id="helpresult5" style="display: none;"></p>  <!-- разметка подсказки-->
			<p>
			<button id="help5" class=" btn-lg" onclick="myFunction('helpresult5')"> ПОДСКАЗКА</button>			
            </p>
			</div>
			

			<div class="post3">	
			<button onclick = "listenaudio" class="btn-light btn-lg"  id="listenaudio6"><img src="images/audio.png" width="200" height="200"></button>			
			<h3>Выбрете слово с ровным тоном.</h3> <h3> chơ(маркет), hoi(спрашивать), hai(два) </h3>  
			<h1 class="text-danger" id="result6"></h1>  			<!-- разметка результата проверки hai-->
			<h3><label><input type="radio" id="incorrect11"     class ="offbutton" name="radio6"	onclick="check6('result6')"> chơ</label></h3>
			<h3><label><input type="radio" id="incorrect12"     class ="offbutton" name="radio6"	onclick="check6('result6')"> hoi</label></h3>
			<h3><label><input type="radio" id="correct6"     class ="offbutton" name="radio6"	onclick="check6('result6')"> hai</label></h3>
			<p id="helpresult6" style="display: none;"></p>  <!-- разметка подсказки-->
			<p>
			<button id="help6" class=" btn-lg"onclick="myFunction('helpresult6')" > ПОДСКАЗКА</button>		
            </p>
			</div>
			
			

			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
			
     </div>			
	</div>
	
</div>


<script src="https://code.jquery.com/jquery-2.1.0.js"></script>

<script>
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton1 = document.getElementById("listenaudio"); // событие рандома
var audio1 = new Audio(); //объект для хранения аудиофайла 
audio1.src = 'audio/comword5.mp3'; // путь к файлу
audiobutton1.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio1.paused==true){
	audio1.play(); // запускаем/	
	document.getElementById('listenaudio').innerHTML='pause';
	document.getElementById('listenaudio2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = true; // кнопка  проверки не активна 
	}else{
	audio1.pause(); // 	
	document.getElementById('listenaudio').innerHTML='play';
	document.getElementById('listenaudio2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = false; // кнопка  проверки не активна 	
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА

			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton2 = document.getElementById("listenaudio2"); // событие рандома
var audio2 = new Audio(); //объект для хранения аудиофайла 
audio2.src = 'audio/comword6.mp3'; // путь к файлу
audiobutton2.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio2.paused==true){
	audio2.play(); // запускаем/	
	document.getElementById('listenaudio2').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = true; // кнопка  проверки не активна 
	}else{
	audio2.pause(); // 	
	document.getElementById('listenaudio2').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = false; // кнопка  проверки не активна 
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА	
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton3 = document.getElementById("listenaudio3"); // событие рандома
var audio3 = new Audio(); //объект для хранения аудиофайла 
audio3.src = 'audio/comword7.mp3'; // путь к файлу
audiobutton3.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio3.paused==true){
	audio3.play(); // запускаем/	
	document.getElementById('listenaudio3').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = true; // кнопка  проверки не активна 
	}else{
	audio3.pause(); // 	
	document.getElementById('listenaudio3').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = false; // кнопка  проверки не активна 
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА		
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton4 = document.getElementById("listenaudio4"); // событие рандома
var audio4 = new Audio(); //объект для хранения аудиофайла 
audio4.src = 'audio/comword8.mp3'; // путь к файлу
audiobutton4.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio4.paused==true){
	audio4.play(); // запускаем/	
	document.getElementById('listenaudio4').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = true; // кнопка  проверки не активна 
	}else{
	audio4.pause(); // 	
	document.getElementById('listenaudio4').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = false; // кнопка  проверки не активна 
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА	
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton5 = document.getElementById("listenaudio5"); // событие рандома
var audio5 = new Audio(); //объект для хранения аудиофайла 
audio5.src = 'audio/comword9.mp3'; // путь к файлу
audiobutton5.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio5.paused==true){
	audio5.play(); // запускаем/	
	document.getElementById('listenaudio5').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = true; // кнопка  проверки не активна 
	}else{
	audio5.pause(); // 	
	document.getElementById('listenaudio5').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio6').disabled = false; // кнопка  проверки не активна 
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА	
			//ПРОИГРЫВАТЕЛЬ АУДИОФАЙЛА
var audiobutton6 = document.getElementById("listenaudio6"); // событие рандома
var audio6 = new Audio(); //объект для хранения аудиофайла 
audio6.src = 'audio/comword10.mp3'; // путь к файлу
audiobutton6.addEventListener("mousedown", function(event) { // событие при нажа мышью
	if(audio6.paused==true){
	audio6.play(); // запускаем/	
	document.getElementById('listenaudio6').innerHTML='pause';
	document.getElementById('listenaudio').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = true; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = true; // кнопка  проверки не активна 	

	}else{
	audio6.pause(); // 	
	document.getElementById('listenaudio6').innerHTML='play';
	document.getElementById('listenaudio').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio2').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio3').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio4').disabled = false; // кнопка  проверки не активна 
	document.getElementById('listenaudio5').disabled = false; // кнопка  проверки не активна 
	}
});
			//КОНЕЦ ПРОИГРЫВАНИЯ АУДИОФАЙЛА				
			//КНОПКИ ПОДСКАЗОК

help1.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
     var element= document.querySelector('#helpresult1').textContent = "На вьетнамском языке этот тон называют Dấu sắc. Восходящий тон обозначают восходящей вправо чертой над буквой - например: á. Этот звук очень близок к ударениям, которые используют в русском языке. Острый акцент на гласных.";
 });
 
help2.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
        document.querySelector('#helpresult2').textContent = "На вьетнамском языке этот тон называют Dấu huyền. Нисходящий тон обозначают нисходящей право чертой над гласной буквой - например: à. Этот звук очень близок к ударениям, которые используют в русском языке. Однако, вместо повышения акцента на букве в данном тоне делается понижение ";
 });
 
 help3.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
        document.querySelector('#helpresult3').textContent = "На вьетнамском языке этот тон называют Dấu hỏi. Вопросительный тон обозначают знаком вопроса над гласной буквой - например: ỏ. Что бы произнести этот тон надоначать с произношения восходящего тона и закончить его нисходящим. В русском языке таким тоном задают вопросы.";
 });
 
 help4.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
        document.querySelector('#helpresult4').textContent = "На вьетнамском языке этот тон называют Dấu ngã. Островопросительный тон обозначают волнистой линией над гласной буквой - например: ã. Произносится этот тон резкой становкой с последующим восходящим тоном.";
 });

 help5.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
        document.querySelector('#helpresult5').textContent = "На вьетнамском языке этот тон называют Dấu nặng. Тяжелый тон обозначают точкой под гласной буквой - например: ặ. Это самый низкий тон. Более всего произношение тона напоминает резкую остановку при произношении.";
 });

  help6.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
        document.querySelector('#helpresult6').textContent = "Произношение этого тона ровное без понижения, придыхания или повышения интонации.";
 });
 
             //ЗАКРЫТИЕ ПОДСКАЗКИ
function myFunction(element_id) {
//Если элемент с id-шником element_id существует
                if (document.getElementById(element_id)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(element_id); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + element_id + " не найден!"); 
}
//document.getElementById('correct').checked = false;	//отключение радиокнопки на нативном js
$(".offbutton").prop("checked", false);	//отключение кнопки по jq
	 
			//ПРОВЕРКА КНОПКИ РАДИО
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
function check3(){
if(document.getElementById('correct3').checked) {
    document.querySelector('#result3').textContent = "Правильно";
}else if(document.getElementById('incorrect5').checked) {
    document.querySelector('#result3').textContent = "Неправильно";   
}else if(document.getElementById('incorrect6').checked){
    document.querySelector('#result3').textContent = "Неправильно"; 
}
}; 
function check4(){
if(document.getElementById('correct4').checked) {
    document.querySelector('#result4').textContent = "Правильно";
}else if(document.getElementById('incorrect7').checked) {
    document.querySelector('#result4').textContent = "Неправильно";   
}else if(document.getElementById('incorrect8').checked){
    document.querySelector('#result4').textContent = "Неправильно"; 
}
}; 
function check5(){
if(document.getElementById('correct5').checked) {
    document.querySelector('#result5').textContent = "Правильно";
}else if(document.getElementById('incorrect9').checked) {
    document.querySelector('#result5').textContent = "Неправильно";   
}else if(document.getElementById('incorrect10').checked){
    document.querySelector('#result5').textContent = "Неправильно"; 
}
}; 

function check6(){
if(document.getElementById('correct6').checked) {
    document.querySelector('#result6').textContent = "Правильно";
}else if(document.getElementById('incorrect11').checked) {
    document.querySelector('#result6').textContent = "Неправильно";   
}else if(document.getElementById('incorrect12').checked){
    document.querySelector('#result6').textContent = "Неправильно"; 
}
}; 

 // ПРОДОЛЖИТЬ ТРЕНИРОВКУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords4=value'; //переадресация на новую тренировку

 });
</script>
