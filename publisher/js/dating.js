//ОБРАБОТЧИК на нажатие клавиш

var newbutton = document.getElementById("newsubmit"); // событие рандома

document.getElementById('newsubmit').disabled = false; // кнопка  рандома не активна 

 //КНОПКА РАНДОМА
newbutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
if (event.which == 1)	
	document.getElementById('hideBlock').style.display = 'block'; //покажет
    document.querySelector('#result').textContent = ""; // очистка
	var numbers={  //словарь
       'старшая сестра (ты)' :'chị',
	   'старший брат (ты)':'anh',
		'хорошо':'khỏe',
		'да':'vâng',
		'спасибо':'cảm ơn',
		'извините':'xin lỗi',
		'я':'tôi',
		'быть(является)':'là',
		'здравствуйте':'xin chào',
		'здравствуйте(к старшей по возрасту женщине)':'chào chị',
		'здравствуйте(к другу)':'chào bạn',
		'здравствуйте(к старшим по возрасту)':'chào anh',
		'здравствуйте(к юношам и девушкам, детям)':'chào em',		
		'как твои дела?':'khỏe không',
		'у меня все хорошо':'khoẻ, cảm ơn',
		'как тебя зовут?':'tên là gì',
		'меня зовут':'tôi tên là'
	};	

document.querySelector('#result').textContent = ""; // очистка

mixbutton();
       

keys = Object.keys(numbers);



var arr=[]; //для перебора слов
var maxarr=4; // максимальный размер массива
var randomword; //рандомные неправильные слова


while(arr.length<maxarr){
	randomword=keys[Math.floor(Math.random() * keys.length)]; //рандом
	if (arr.indexOf(randomword)== -1 ) {         // проверим есть оно  у нас или нет  
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