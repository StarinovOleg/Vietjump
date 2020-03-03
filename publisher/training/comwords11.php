<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
	

            <h3>Каждый месяц соответствует определённому числу. </h3>
 			<h3>Дополните таблицу по образцу. </h3>			
			<p><img src="images/calendar.png" class="cardpic"><p>	
			
			<p><span class="textweight">Каждый месяц соответствует числу. Словообразование происходит путем добавления к числу слова [Tháng] </span></p>


			
	<div class="row" style="background: #FFFFF0; margin-bottom:1%;">
	<div class="col-lg-2 col-sm-2 col-xs-2">		
		<p  class="btn-light btn-lg btn-block" ><span class="textweight">12</span></p> 	
		<p  class="btn-light btn-lg btn-block" >Tháng mười hai</p> 		
	</div>
	
	
    <div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >1</p> 
		<p class="text-danger" id="result1"></p>		
		<input name="input1" id="input1" SIZE=15 step="any" onkeyup="PressEnter()" > 	    <!-- Tháng một--> 
    </div>	
	
    <div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >2</p> 
		<p class="text-danger" id="result2"></p>		
		<input name="input2" id="input2" SIZE=15 step="any" onkeyup="PressEnter()" >	<!--Tháng hai -->
    </div>		
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >3</p> 
		<p class="text-danger" id="result3"></p>		
		<input name="input3" id="input3" SIZE=15 step="any" onkeyup="PressEnter()" > <!-- Tháng ba-->
    </div>	
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >4</p> 
		<p class="text-danger" id="result4"></p>		
		<input name="input4" id="input4" SIZE=15 step="any" onkeyup="PressEnter()" >	<!--Tháng tư -->
    </div>		
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" ><span class="textweight">5</span></p> 
		<p  class="btn-light btn-lg btn-block" >Тháng năm</p> 	<!--Тháng năm -->
    </div>		

	<div class="col-lg-2 col-sm-2 col-xs-2">
		<p  class="btn-light btn-lg btn-block" >6</p> 
		<p class="text-danger" id="result6"></p>		
		<input name="input6" id="input6" SIZE=15 step="any" onkeyup="PressEnter()" >		   <!--Tháng sáu -->
	</div>
	
    <div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >7</p>
		<p class="text-danger" id="result7"></p>		
		<input name="input7" id="input7" SIZE=15 step="any" onkeyup="PressEnter()" >	     <!-- Tháng bảy-->
    </div>	
    <div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >8</p> 
		<p class="text-danger" id="result8"></p>		
		<input name="input8" id="input8" SIZE=15 step="any" onkeyup="PressEnter()" >	     <!--Tháng tám -->
    </div>		
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >9</p> 
		<p class="text-danger" id="result9"></p>		
		<input name="input9" id="input9" SIZE=15 step="any" onkeyup="PressEnter()" >    <!--Tháng chín -->
    </div>	
	
	<div class="col-2" >
		<p  class="btn-light btn-lg btn-block" >10</p>
		<p class="text-danger" id="result10"></p>			
		<input name="input10" id="input10" SIZE=15 step="any" onkeyup="PressEnter()" > <!-- Tháng mười-->
    </div>		
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >11</p> 
		<p class="text-danger" id="result11"></p>		
		<input name="input11" id="input11" SIZE=15 step="any" onkeyup="PressEnter()" >	<!--Tháng mười một -->
    </div>	
     </div>		

			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
	
</div>
</div>


<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Tháng mộ"; //правильный ответ на первый вопрос
var rightanswer2="Tháng hai"; //правильный ответ на второй вопрос
var rightanswer3="Tháng ba"; //правильный ответ на третий вопрос
var rightanswer4="Tháng tư"; //правильный ответ на четвертый вопрос
var rightanswer6="Tháng sáu";
var rightanswer7="Tháng bảy";
var rightanswer8="Tháng tám";
var rightanswer9="Tháng chín";
var rightanswer10="Tháng mười";
var rightanswer11="Tháng mười một";
//var a ="index.php?var3=value"; //возвращение на страницу 6


document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.querySelector('#input4').value = ""; // очистка

document.querySelector('#input6').value = ""; // очистка
document.querySelector('#input7').value = ""; // очистка
document.querySelector('#input8').value = ""; // очистка
document.querySelector('#input9').value = ""; // очистка
document.querySelector('#input10').value = ""; // очистка
document.querySelector('#input11').value = ""; // очистка
document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
var answer1 = document.getElementById('input1').value.trim();
var answer2 = document.getElementById('input2').value.trim(); 
var answer3 = document.getElementById('input3').value.trim(); 
var answer4 = document.getElementById('input4').value.trim();

var answer6 = document.getElementById('input6').value.trim();
var answer7 = document.getElementById('input7').value.trim();
var answer8 = document.getElementById('input8').value.trim();
var answer9 = document.getElementById('input9').value.trim();
var answer10 = document.getElementById('input10').value.trim();
var answer11 = document.getElementById('input11').value.trim();
	if(rightanswer1==answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightanswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
	if(rightanswer2==answer2){
		document.querySelector('#result2').textContent = "Правильно";
	}else if(rightanswer2!=answer2){
		document.querySelector('#result2').textContent = "Неправильно";		
	};
	if(rightanswer3==answer3){
		document.querySelector('#result3').textContent = "Правильно";
	}else if(rightanswer3!=answer3){
		document.querySelector('#result3').textContent = "Неправильно";		
	};
	if(rightanswer4==answer4){
		document.querySelector('#result4').textContent = "Правильно";
	}else if(rightanswer4!=answer4){
		document.querySelector('#result4').textContent = "Неправильно";		
	};
		
	if(rightanswer6==answer6){
		document.querySelector('#result6').textContent = "Правильно";
	}else if(rightanswer6!=answer6){
		document.querySelector('#result6').textContent = "Неправильно";		
	};
	if(rightanswer7==answer7){
		document.querySelector('#result7').textContent = "Правильно";
	}else if(rightanswer7!=answer7){
		document.querySelector('#result7').textContent = "Неправильно";		
	};
	if(rightanswer8==answer8){
		document.querySelector('#result8').textContent = "Правильно";
	}else if(rightanswer8!=answer8){
		document.querySelector('#result8').textContent = "Неправильно";		
	};
	if(rightanswer9==answer9){
		document.querySelector('#result9').textContent = "Правильно";
	}else if(rightanswer9!=answer9){
		document.querySelector('#result9').textContent = "Неправильно";		
	};
	if(rightanswer10==answer10){
		document.querySelector('#result10').textContent = "Правильно";
	}else if(rightanswer10!=answer10){
		document.querySelector('#result10').textContent = "Неправильно";		
	};
	if(rightanswer11==answer11){
		document.querySelector('#result11').textContent = "Правильно";
	}else if(rightanswer11!=answer11){
		document.querySelector('#result11').textContent = "Неправильно";		
	};
	
 });

  //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords12=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>