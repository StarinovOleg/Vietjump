
<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">

				<div class="post3">
					<h3>Гражданином какой страны является каждый человек. Для каждого человека выбрать один вариант:</h3>
						<!--ВЫБРАТЬ ИЗ СПИСКА-->			
						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>1. Vladimir Putin là 
										<select id="chose" name="chose">
											<option value="Nga">Nga</option>
											<option value="2">Anh</option>
											<option value="3">Mỹ</option>
										</select> 
									</h3>	
									<h2 class="text-danger" id="result1">
								</div>
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
						</div>
						
						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>2. Bill Klinton là 
										<select id="chose2" name="chose2" >
											<option value="Nga">Nga</option>
											<option value="Anh">Anh</option>
											<option value="Mỹ">Mỹ</option>
										</select> 
									</h3>

									<h2 class="text-danger" id="result2"></h2>
								
								</div>								
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
						</div>
						
						<div class="row post3">
							<div class="col-lg-2 col-sm-2 col-xs-2"></div>
								<div class="col-lg-8 col-sm-8 col-xs-8" >	
									<h3>3. William Churchil là 
										<select id="chose3" name="chose2" >
											<option value="Nga">Nga</option>
											<option value="Anh">Anh</option>
											<option value="Mỹ">Mỹ</option>
										</select> 									
									</h3>
									<h2 class="text-danger" id="result3"></h2>
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
document.getElementById('hideBlockIcon2').style.display = 'block'; //блок видимости меню курса
// ВЫБРАТЬ ИЗ СПИСКА
var buttonsubmit = document.getElementById("submit"); // событие на кнопке сравнения
var rightanswer1="Nga"; //правильный ответ на первый вопрос
var rightanswer2="Mỹ"; //правильный ответ на второй вопрос
var rightanswer3="Anh"; //правильный ответ на третий вопрос

document.getElementById('chose').value = ""; // очистка
document.getElementById('chose2').value = ""; // очистка
document.getElementById('chose3').value = ""; // очистка

document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 
var answer1 = document.getElementById('chose').value;
var answer2 = document.getElementById('chose2').value;
var answer3 = document.getElementById('chose3').value;
	if(rightanswer1==answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightanswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
	
	if(rightanswer2==answer2 ){
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
	location.href = 'index.php?chatword12=value'; //переадресация на новую тренировку
 });	
</script>