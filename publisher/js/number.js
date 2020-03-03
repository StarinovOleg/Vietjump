document.getElementById('input').value = ""; // очистка поля
var keys = "";  // для рандома
var randomKey = ""; // для рандома
var getAnswer =""; // для рандома
var answer_number = "";
//ОБРАБОТЧИК на нажатие клавиш
var button = document.getElementById("submit"); // событие на кнопке сравнения
var newbutton = document.getElementById("newsubmit"); // событие рандома
document.getElementById('submit').disabled = true; // кнопка  проверки не активна 
document.getElementById('newsubmit').disabled = false; // кнопка  рандома не активна 

 
//КНОПКА РАНДОМА
newbutton.addEventListener("mousedown", function(event) { // событие при нажа мышью
if (event.which == 1)	
	var numbers={  //словарь
		'0':'không',
		'1':'một',
		'2':'hai',
		'3':'ba',
		'4':'bốn',
		'5':'năm',
		'6':'sáu',
		'7':'bảy',
		'8':'tám',
		'9':'chín',
		'10': 'mười'
	};		
document.querySelector('#result').textContent = ""; // очистка
// РАНДОМ
keys = Object.keys(numbers);
randomKey = keys[Math.floor(Math.random() * keys.length)];
getAnswer =document.getElementById("number").innerHTML = numbers[randomKey];
			document.getElementById('submit').disabled = false; // кнопка  проверки не активна 
			document.getElementById('newsubmit').disabled = true; // кнопка  рандома не активна 


console.log(randomKey);

 });


//КНОПКА СРАВНЕНИЯ

var clicker=button.addEventListener("mousedown", function cheking(event) {
answer_number = document.getElementById('input').value.trim(); 
 if (event.which == 1) 

	if(answer_number == randomKey){		
		document.querySelector('#result').textContent = "Правильно";
		document.getElementById("input").value = "";
		getAnswer =document.getElementById("number").innerHTML ="";

		document.getElementById('submit').disabled = true; // кнопка  проверки не активна 
		document.getElementById('newsubmit').disabled = false; // кнопка  рандома не активна 

		delete randomKey;		
	}else {
		document.querySelector('#result').textContent = "Неправильно";
		document.getElementById("input").value = "";
		getAnswer =document.getElementById("number").innerHTML ="";

			

		document.getElementById('submit').disabled = true; // кнопка  проверки не активна 
		document.getElementById('newsubmit').disabled = false; // кнопка  рандома не активна 

		delete randomKey;		
			
	};
		

 });
 