

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">

				<div class="post3">
					<h3>На основе пройденных на уроке диалогов дополните недостающие части предложений:</h3>
						<!--ДОПОЛНИТЕ ПРЕДЛОЖЕНИЯ-->			
						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>1.<input name="input1" id="input1" SIZE=2 step="any" onkeyup="PressEnter()" autocomplete="off"> tên <input name="input2" id="input2" SIZE=2 step="any" onkeyup="PressEnter()" autocomplete="off"> gi?</h3> <h2 class="text-danger" id="result1"></h2><h2 class="text-danger" id="result2"></h2>
								</div>
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
						</div>
						
						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>2.<input name="input3" id="input3" SIZE=2 step="any" onkeyup="PressEnter()" autocomplete="off"> là Oleg</h3><h2 class="text-danger" id="result3"></h2>
								</div>
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
						</div>
						
						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>3. Em Oleg là người<input name="input4" id="input4" SIZE=4 step="any" onkeyup="PressEnter()" autocomplete="off"> nào?</h3><h2 class="text-danger" id="result4"></h2>
								</div>
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
						</div>	

						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>4. Em <input name="input5" id="input5" SIZE=2 step="any" onkeyup="PressEnter()" autocomplete="off"> <input name="input6" id="input6" SIZE=4 step="any" onkeyup="PressEnter()" autocomplete="off">Hàn Quớc.</h3><h2 class="text-danger" id="result5"></h2><h2 class="text-danger" id="result6"></h2>
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
document.getElementById('hideBlockIcon2').style.display = 'block'; //блок  меню курса

// ДОПОЛНИТЕ ПРЕДЛОЖЕНИЯ
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Em"; //правильный ответ на первый вопрос
var rightanswer2="là"; //правильный ответ на второй вопрос
var rightanswer3="Em"; //правильный ответ на третий вопрос
var rightanswer4="nước"; //правильный ответ на третий вопрос
var rightanswer5="là"; //правильный ответ на третий вопрос
var rightanswer6="người"; //правильный ответ на третий вопрос


document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 var answer1 = document.getElementById('input1').value.trim();
 var answer2 = document.getElementById('input2').value.trim(); 
 var answer3 = document.getElementById('input3').value.trim();
 var answer4 = document.getElementById('input4').value.trim();
 var answer5 = document.getElementById('input5').value.trim();
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
	}else if(rightanswer3!=answer3){
		document.querySelector('#result4').textContent = "Неправильно";		
	};
	if(rightanswer5==answer5){
		document.querySelector('#result5').textContent = "Правильно";
	}else if(rightanswer5!=answer5){
		document.querySelector('#result5').textContent = "Неправильно";		
	};
	if(rightanswer6==answer6){
		document.querySelector('#result6').textContent = "Правильно";
	}else if(rightanswer6!=answer6){
		document.querySelector('#result6').textContent = "Неправильно";		
	};

 });


     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?chatword10=value'; //переадресация на новую тренировку
 });	
</script>