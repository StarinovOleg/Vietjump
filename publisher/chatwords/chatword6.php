<?php
require_once 'chatwords/iconchatword.php';
?>

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>На основе пройденных на уроке диалогов дополните недостающие части предложений</h3> 
				<div class="post3">
					<p class="text">Необходимо использовать личные местоимения.</p>
					<p class="text">Пример:Em chào <input SIZE=10 disabled="disabled" value="thầy"> ạ.</p>

				<h3>Упражнение:</h3>
	<!--ДОПОЛНИТЕ ПРЕДЛОЖЕНИЯ-->			
				<div class="row post3">
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>
						<div class="col-lg-8 col-sm-8 col-xs-8" >	
							<img src="images/chatwords/chatword3.png" class="cardpic">

							<h3 >Девушка спрашивает:</h3>
							<h3><input name="input1" id="input1" SIZE=10 step="any" onkeyup="PressEnter()" autocomplete="off" > tên là gi?</h3><h2 class="text-danger" id="result1"></h2>
						</div>
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
				</div>

				<div class="row post3">
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>
						<div class="col-lg-8 col-sm-8 col-xs-8" >	
							<img src="images/chatwords/chatword4.png" class="cardpic"><br>				
							<h3 >Девушка спрашивает:</h3>
							<h3><input name="input2" id="input2" SIZE=10 step="any" onkeyup="PressEnter()" autocomplete="off"> tên là gi?</h3>	 <h2 class="text-danger" id="result2"></h2>
						</div>
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
				</div>

				<div class="row post3">
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>
						<div class="col-lg-8 col-sm-8 col-xs-8" >
							<img src="images/chatwords/chatword5.png" class="cardpic"><br>						
							<h3 >Девушка спрашивает:</h3>
							<h3><input name="input3" id="input3" SIZE=10 step="any" onkeyup="PressEnter()" autocomplete="off"> là người nước nào?</h3> <h2 class="text-danger" id="result3"></h2>   			
						</div>
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
				</div>
			
				</div>
		

			<button id="submit" class=" btn-lg"> ПРОВЕРИТЬ</button>	

			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>	
		</div>
    </div>
</div>

<script>
// ДОПОЛНИТЕ ПРЕДЛОЖЕНИЯ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Ông"; //правильный ответ на первый вопрос
var rightanswer2="Em"; //правильный ответ на второй вопрос
var rightanswer3="Anh"; //правильный ответ на третий вопрос


document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 var answer1 = document.getElementById('input1').value.trim();
 var answer2 = document.getElementById('input2').value.trim(); 
 var answer3 = document.getElementById('input3').value.trim();
 
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

 });

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?chatword7=value'; //переадресация на новую тренировку
 });	
</script>