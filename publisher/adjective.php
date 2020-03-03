
		<div class="post2 text-left text-md-center">

			<h1 id="time">Прилагательные: <div id="number"></div></h1>  
			<p><img src="images/adjective.png" class="cardpic" ><p>
			<h2 class="text-danger" id="result"></h2> 
	

		<div id="area" class="wrapper">
		
			<center>			
			
				<p style="font-size: 24px;font-weight: bold;padding-top: 2px;color: #fff;" id="question"></p>
		
				<div id="hideBlock" class="myItems">
				<button onclick="cheking();"  class="button  btn-warning btn-lg" id="option1" style="margin:1%;" ></button>				
				<button onclick="chekingnot();"  class="button  btn-warning btn-lg" id="option2" style="margin:1%;"></button>				
				<button onclick="chekingnot();"  class="button  btn-warning btn-lg" id="option3" style="margin:1%;" ></button>				
				<button onclick="chekingnot();"  class="button  btn-warning btn-lg" id="option4" style="margin:1%;"></button>
				</div>
			    
			</center>
		</div>			
			<button id="newsubmit"class="btn-light btn-lg">ГЕНЕРАЦИЯ СЛОВА</button>	
		</div>

<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script>

//ОБРАБОТЧИК на нажатие клавиш

var newbutton = document.getElementById("newsubmit"); // событие рандома

document.getElementById('newsubmit').disabled = false; // кнопка  рандома не активна 

 //КНОПКА РАНДОМА
newbutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
if (event.which == 1)
	document.getElementById('hideBlock').style.display = 'block'; //покажет
    document.querySelector('#result').textContent = ""; // очистка	
	var numbers={  //словарь
        'высокий':'cao',
	    'низкий':'ngắn',
		'большой':'to',
		'широкий':'rộng',
		'длинный':'dài',
		'маленький':'nhỏ',
		'толстый':'dày',
		'тонкий':'mỏng',
		'новый':'mới',
		'старый':'cũ',
		'дешевый':'rẻ',
		'дорогой':'đắt tiền',
		'юный':'trẻ',		
		'неправильный':'sai',
		'правильный':'đúng',
		'хороший':'tốt',
		'плохой':'xấu',
		'трудный':'khó khăn',
		'легкий':'dễ dàng'		
	};	

document.querySelector('#result').textContent = ""; // очистка
mixbutton();

keys = Object.keys(numbers);

//рандом вариантов


var arr=[]; //записываем в этот массив рандомные неправильные слова
var maxarr=4; // максимальный размер массива
var randomword; //рандомные неправильные слова
while(arr.length<maxarr){
	randomword=keys[Math.floor(Math.random() * keys.length)]; //рандом
	if (arr.indexOf(randomword)== -1) {         // проверим есть оно  у нас или нет  
        arr.push(randomword);         // записываем в массив т.к нету
    } 
};




	document.getElementById("number").innerHTML = numbers[arr[0]];// вывод на экран слова задания
	document.getElementById("option1").innerHTML =[arr[0]]; //вывод на экран правильного 	
	document.getElementById("option2").innerHTML = [arr[1]]; //вывод на экран из массива неправильного ответа
	document.getElementById("option3").innerHTML = [arr[2]]; //вывод на экран из массива неправильного ответа
	document.getElementById("option4").innerHTML = [arr[3]]; //вывод на экран из массива неправильного ответа
	document.getElementById('newsubmit').disabled = true; // кнопка  рандома не активна 	

 });

 //ОБРАБОТЧИКИ КНОПОК СРАВНЕНИЯ
option1.addEventListener("mousedown", cheking());
 
option2.addEventListener("mousedown", chekingnot());

option3.addEventListener("mousedown", chekingnot() );

option4.addEventListener("mousedown", chekingnot()); 

document.querySelector('#result').textContent = ""; // очистка
 
 //ФУНКЦИЯ  НЕПРАВИЛЬНЫХ ОТВЕТОВ
function chekingnot() {
	
		document.querySelector('#result').textContent = "Неправильно";
		document.getElementById("newsubmit").disabled = false; // кнопка  рандома не активна 
	
 };

//ФУНКЦИЯ  ПРАВИЛЬНЫХ ОТВЕТОВ
function cheking() {
	
		document.querySelector('#result').textContent = "Правильно";
		document.getElementById("newsubmit").disabled = false; // кнопка  рандома не активна 

 };
 
 
 
 //  ФУНКЦИЯ перемешивание кнопок DOM
function mixbutton(){
	var grp = $(".myItems").children();
           var cnt = grp.length;
 
           var temp,x;
           for (var i = 0; i < cnt; i++) {
               temp = grp[i];
             x = Math.floor(Math.random() * cnt);
             grp[i] = grp[x];
             grp[x] = temp;
         }
         $(grp).remove();
$(".myItems").append($(grp)); };
</script>
