<?php
require_once 'training/iconcomwords.php';

?>
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
	

            <h3>Каждый день недели соответствует определённому числу. </h3>
 			<h3>Дополните таблицу по образцу. </h3>			
			<p><img src="images/week.png" class="cardpic"><p>	
			
			<p><span class="textweight">Каждый день недели соответствует числу. Словообразование происходит путем добавления к числу слова [Thứ] </span></p>


			
  <div class="row" style="background: #FFFFF0; margin-bottom:1%;">

    <div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >1</p> 
		<p class="text-danger" id="result1"></p>		
		<input name="input1" id="input1" SIZE=15 step="any" onkeyup="PressEnter()" >  
    </div>	
    <div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >2</p> 
		<p class="text-danger" id="result2"></p>		
		<input name="input2" id="input2" SIZE=15 step="any" onkeyup="PressEnter()" >
    </div>		
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
	    <p  class="btn-light btn-lg btn-block" >3</p> 
		<p class="text-danger" id="result3"></p>		
		<input name="input3" id="input3" SIZE=15 step="any" onkeyup="PressEnter()" >	
    </div>	
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" >4</pp> 
		<p class="text-danger" id="result4"></p>		
		<input name="input4" id="input4" SIZE=15 step="any" onkeyup="PressEnter()" >
    </div>		
	
	<div class="col-lg-2 col-sm-2 col-xs-2" >
		<p  class="btn-light btn-lg btn-block" ><span class="textweight">5</span></p> 
		<p  class="btn-light btn-lg btn-block" >Thứ sáu</p> 	
    </div>		

	<div class="ccol-lg-2 col-sm-2 col-xs-2">
		<p  class="btn-light btn-lg btn-block" >6</p> 
		<p class="text-danger" id="result6"></p>		
		<input name="input6" id="input6" SIZE=15 step="any" onkeyup="PressEnter()" >	  
	</div>
    <div class="col-2" ></div>
		
		
     </div>	
	 		<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	</div>
	
</div>



<script>
//тренировка ОТВЕТЫ НА ВОПРОСЫ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Thứ hai"; //правильный ответ на первый вопрос
var rightanswer2="Thứ ba"; //правильный ответ на второй вопрос
var rightanswer3="Thứ tư"; //правильный ответ на третий вопрос
var rightanswer4="Thứ năm "; //правильный ответ на четвертый вопрос
var rightanswer5="Thứ sáu";
var rightanswer6="Thứ bảy";



document.querySelector('#input1').value = ""; // очистка
document.querySelector('#input2').value = ""; // очистка
document.querySelector('#input3').value = ""; // очистка
document.querySelector('#input4').value = ""; // очистка
document.querySelector('#input6').value = ""; // очистка

document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
var answer1 = document.getElementById('input1').value.trim();
var answer2 = document.getElementById('input2').value.trim(); 
var answer3 = document.getElementById('input3').value.trim(); 
var answer4 = document.getElementById('input4').value.trim();
var answer6 = document.getElementById('input6').value.trim();

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
	
 });

  //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords15=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>