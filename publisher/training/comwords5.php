<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Вопросительные слова</h3> 	
			
			    <p><img src="images/questword.jpg" height="255"><p>
			
			<h3 >Проверте знание вопросительных слов. </h3> 

  <div class="row" style="margin-bottom:1%">
	<div class="col-2">
	
	</div>
    <div class="col-2" >
    <!-- Блоки для перемещения-->  																																<!-- результат проверки-->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag1" data-div="drop2">làm thế nào?</div> 			                        <h2 class="text-danger" id="result1"></h2>  
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag2" data-div="drop1" >cái gì?</div>								
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag3" data-div="drop6">khi nào?</div>		 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag4" data-div="drop4">ở đâu?</div>										 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag5" data-div="drop3">	ai?</div>								 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag6" data-div="drop5">tại sao?</div>							
    </div>
		<!--Блоки ответов-->
<div class="col-4" > 
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop1"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop2"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop3"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop4"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop5"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop6"></div>	
	
</div>
		<!--Блоки вопросов-->
    <div class="col-2 text-left">
		<div class="height_div btn-light btn-lg btn-block">Что?</div>		
		<div class="height_div btn-light btn-lg btn-block"> Как?</div>
		<div class="height_div btn-light btn-lg btn-block">Кто?</div>
		<div class="height_div btn-light btn-lg btn-block">Где?</div>	
		<div class="height_div btn-light btn-lg btn-block">Почему?</div>
		<div class="height_div btn-light btn-lg btn-block">Когда</div>

    </div>
	<div class="col-2 text-left">

	</div>
	</div>
		<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>	
		<button onclick='window.location.reload(true)' class=" btn-lg"> ПОПРОБОВАТЬ СНОВА</button>	
		<button id="help1" class="btn-lg" onclick="myFunction('helpresult1')"> ПОДСКАЗКА</button>
		<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>	
			
     </div>			
	</div>
	
</div>




<script>
		// ВЫВОД ПОДСКАЗКИ
help1.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
     var element= document.querySelector('#helpresult1').textContent = "Примеры использования вопросительных слов: [còn ba thể nấu?], [đây là cái gì?],[bạn sống ở đâu ?].";
 });
//ЗАКРЫТИЕ ПОДСКАЗКИ
function myFunction(element_id) {
//Если элемент с id-шником element_id существует
                if (document.getElementById(element_id)) { 
                    //Записываем ссылку на элемент в переменную obj
                    var obj = document.getElementById(element_id); 
                    //Если css-свойство display не block, то: 
                    if (obj.style.display != "block") { 
                        obj.style.display = "block"; //Показываем элемент
                    }
                    else obj.style.display = "none"; //Скрываем элемент
                }
                //Если элемент с id-шником element_id не найден, то выводим сообщение
                else alert("Элемент с id: " + element_id + " не найден!"); 
}
			
			
//тренировка ОТВЕТЫ НА ВОПРОСЫ
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("content", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var answer = ev.dataTransfer.getData("content");
      if (ev.target.id == document.getElementById(answer).getAttribute('data-div')) {
        document.querySelector('#result1').textContent = "Правильно";
        ev.target.appendChild(document.getElementById(answer));
      } else {
        document.querySelector('#result1').textContent = "Неправильно";	
      }
    }
  //ВОЗВРАЩЕНИЕ НА СТРАНИЦУ КУРСА

BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords6=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>
