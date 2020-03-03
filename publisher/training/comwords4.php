<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Дополните фразы, используя вопросительные слова:<span class="textweight">không</span>, <span class="textweight">ở đâu</span>.</h3> 	
			<div><button draggable="true" ondragstart="drag(event)" id="drag1" class="btn-light btn-lg " data-div="drop1">không</button>
			<button draggable="true" ondragstart="drag(event)" id="drag3" class="btn-light btn-lg " data-div="drop2">ở đâu</button></div>
			

			<div class="post3">
			<h3>Bà khỏe (<span ondrop="drop(event)" ondragover="allowDrop(event)"  id="drop1"> ...   </span>...)? </h3>  	
			<h3 style="margin: 20px;">Bà      (<span ondrop="drop(event)" ondragover="allowDrop(event)"  id="drop2" > ...   </span> ...)?</h3>       
            </div>
			
			
			<h1 class="text-danger" id="result1"></h1>
			

			<p  id="helpresult1" style="display: none;"></p>  <!-- разметка подсказки--><p>
			
			<button id="help1" class="btn-lg" onclick="myFunction('helpresult1')"> ПОДСКАЗКА</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
			
     </div>			
	</div>
	
</div>




<script>
		// ВЫВОД ПОДСКАЗКИ
help1.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
     var element= document.querySelector('#helpresult1').textContent = "Вопрос [có] ...[không], употребляют, когда ожидают услышать подтверждение или отрицание. При подтверждении ответ будет [có], при орицании[không]. Вопросительное слово [ở đâu], используют когда хотят улсшыть ответ на вопрос [где]. ";
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
 //ТРЕНИРОВКА ОТВЕТЫ НА ВОПРОСЫ
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

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?comwords5=value'; //переадресация на новую тренировку
//history.back(); 

 });

</script>
