
var clk = 0; //счетчик нажатий кнопки 
var correct =0; // счетчик правильных ответов

//ОБРАБОТЧИК КНОПКИ ГЕНЕРАЦИЯ
$('#newsubmit').click(function(){ 
	$('#hideBlock').css('display', 'inline-block');
    $('#resulted').text(""); // очистка
	mixbutton();
	systemwork();
    clk++;
	
    if(clk>10) 
		{
			$('#hideBlock').css('display', 'none');
			$('#vword').css('display', 'none');			
			$('#resulted').text("Правильных ответов :" +(correct-1) +" из 10"); // очистка			
			$("#newsubmit").css('display', 'none');
		}   	

 });



 //ОБРАБОТЧИКИ  СРАВНЕНИЯ for every buttons
$('#option1').click(cheking());
$('#option2').click(chekingnot());
$('#option3').click(chekingnot());
$('#option4').click(chekingnot());
$('#resulted').text(""); // очистка	

	


//Обработчик  НЕПРАВИЛЬНЫХ ОТВЕТОВ
function chekingnot() {
		
		$('#resulted').text("Неправильно");
		$("#newsubmit").attr("disabled", false);
	    $('#hideBlock').css('display', 'none');
		let audio = new Audio(); // Создаём новый элемент Audio
		audio.src = 'audio/answer/noncorrect.mp3'; // Указываем путь к звуку "клика"
		audio.autoplay = true; // Автоматически запускаем	
		audio.volume=0.1;		

 }

// Обработчик ПРАВИЛЬНЫХ ОТВЕТОВ
function cheking() {	
		$('#resulted').text("Правильно");
		$('#newsubmit').attr("disabled", false);
		$('#hideBlock').css('display', 'none');
		correct++;
		let audio = new Audio(); // Создаём новый элемент Audio
		audio.src = 'audio/answer/correct.mp3'; // Указываем путь к звуку "клика"
		audio.autoplay = true; // Автоматически запускаем	
		audio.volume=0.1;

 };

//  ПЕРЕМЕШИВАНИЕ кнопок DOM
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


//ПРЕДСТАВЛЕНИЕ СЛОВ
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
	
	


	var wordMedia=document.getElementById("vword").innerHTML = obj[arr[0]];// вывод на экран слова задания
// for WEB speech API

/*  var utterThis = new SpeechSynthesisUtterance(wordMedia);
    utterThis.lang = 'vi-VN-An';


	window.speechSynthesis.speak(utterThis);
	var msg = new SpeechSynthesisUtterance(wordMedia);
	window.speechSynthesis.speak(msg);*/
	
	document.getElementById("option1").innerHTML =[arr[0]]; //вывод на экран правильного 	
	document.getElementById("option2").innerHTML = [arr[1]]; //вывод на экран из массива неправильного ответа
	document.getElementById("option3").innerHTML = [arr[2]]; //вывод на экран из массива неправильного ответа
	document.getElementById("option4").innerHTML = [arr[3]]; //вывод на экран из массива неправильного ответа
	$("#newsubmit").attr("disabled", true);

}




