<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>На собрании вы получили визитку очень важного для вас человека. Вам нужно срочно с ним связаться.
			Но вот незадача, номер телефона написан словами. Вас это удивляет, но делать нечего, надо звонить. Наберите правильный номер телефона.
			</h3> 
				<div class="post3">
				
				<h3>Упражнение:</h3>
				<img src="images/chatwords/un2chatword9.png" class="">
	<!--ДОПОЛНИТЕ ПРЕДЛОЖЕНИЯ-->			
				<div class="row post3">
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>
						<div class="col-lg-8 col-sm-8 col-xs-8" >	
							<h3> <input name="input1" id="input1" SIZE=10 step="any" onkeyup="PressEnter()" autocomplete="off" ></h3><h2 class="text-danger" id="result1"></h2>
						</div>
					<div class="col-lg-2 col-sm-2 col-xs-2"></div>		
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
var rightanswer1="3482679"; //правильный ответ на первый вопрос



document.getElementById('BackWordPage').disabled = true; // кнопка возвращения на страницу курса

submit.addEventListener("mousedown", function cheking(event) {
 document.getElementById('BackWordPage').disabled = false; // кнопка возвращения на страницу курса
 var answer1 = document.getElementById('input1').value.trim();

	if(rightanswer1==answer1 ){
		document.querySelector('#result1').textContent = "Правильно";
	}else if(rightanswer1!=answer1){
		document.querySelector('#result1').textContent = "Неправильно";	
	};
	
 });

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?un2chatword10=value'; //переадресация на новую тренировку
 });	
</script>