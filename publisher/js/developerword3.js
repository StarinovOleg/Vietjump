
 
 //НАЧАЛЬНОЕ СОСТОЯНИЕ
var newbutton = document.getElementById("newsubmit"); 
var activity=document.getElementById('newsubmit').disabled = false; // кнопка  рандома активна	
	
//ОБРАБОТЧИК КНОПКИ
newbutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
if (event.which == 1)	
    document.getElementById('hideBlock').style.display = 'block'; //покажет
    document.querySelector('#result').textContent = ""; // очистка


mixbutton();
systemwork();


	

 });

 //ОБРАБОТЧИКИ КНОПОК СРАВНЕНИЯ
option1.addEventListener("mousedown", cheking());
 
option2.addEventListener("mousedown", chekingnot());

option3.addEventListener("mousedown", chekingnot() );

option4.addEventListener("mousedown", chekingnot()); 

document.querySelector('#result').textContent = ""; // очистка


//ФУНКЦИЯ ОТКЛЮЧЕНИЯ ЗВУКА 




//ФУНКЦИЯ  НЕПРАВИЛЬНЫХ ОТВЕТОВ
function chekingnot() {
	
		document.querySelector('#result').textContent = "Неправильно";
		document.getElementById("newsubmit").disabled = false; // кнопка  рандома не активна 
		
		let audio = new Audio(); // Создаём новый элемент Audio
		audio.src = 'audio/answer/noncorrect.mp3'; // Указываем путь к звуку "клика"
		audio.autoplay = true; // Автоматически запускаем	
		audio.volume=0.1;
		

 }

//ФУНКЦИЯ  ПРАВИЛЬНЫХ ОТВЕТОВ
function cheking() {
	
		document.querySelector('#result').textContent = "Правильно";		
		document.getElementById("newsubmit").disabled = false; // кнопка  рандома не активна 
		
		let audio = new Audio(); // Создаём новый элемент Audio
		audio.src = 'audio/answer/correct.mp3'; // Указываем путь к звуку "клика"
		audio.autoplay = true; // Автоматически запускаем	
		audio.volume=0.1;
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



function systemwork(){
	var arr=[]; //для перебора слов
	var maxarr=4; // максимальный размер массива
	var randomword; //рандомные неправильные слова

	//ОБЪЕДИНЕНИЕ ДВУХ МАССИВОВ В ОДИН ОБЪЕКТ
	var obj = {};
	for(var i = 0; i < rword.length; i++) {
		obj[rword[i]] = vword[i];
	}


	 var keys = Object.keys(obj);

	while(arr.length<maxarr){
		randomword=keys[Math.floor(Math.random() * keys.length)]; //рандом
		if (arr.indexOf(randomword)== -1 ) {         // проверим есть оно  у нас или нет  
			arr.push(randomword);         // записываем в массив т.к нету	   
		} 
	};
	document.getElementById("vword").innerHTML = obj[arr[0]];// вывод на экран слова задания
	document.getElementById("option1").innerHTML =[arr[0]]; //вывод на экран правильного 	
	document.getElementById("option2").innerHTML = [arr[1]]; //вывод на экран из массива неправильного ответа
	document.getElementById("option3").innerHTML = [arr[2]]; //вывод на экран из массива неправильного ответа
	document.getElementById("option4").innerHTML = [arr[3]]; //вывод на экран из массива неправильного ответа
	document.getElementById('newsubmit').disabled = true; // кнопка  рандома не активна 
}

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?developerword4=value'; //переадресация на новую тренировку
 });	

