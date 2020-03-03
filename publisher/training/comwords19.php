<?php
require_once 'training/iconcomwords.php';

?>

<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
			<h3>Слова. Từ Ngữ</h3> 	
			
			<h3 >Подберите в пару слово и его перевод. </h3> 

  <div class="row">
	<div class="col-2">
	
	</div>
    <div class="col-2" >
    <!-- Блоки для перемещения-->  																																<!-- результат проверки-->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag1" data-div="drop5">Tôi</div> 	<!--5 -->		                        <h2 class="text-danger" id="result1"></h2>  
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag2" data-div="drop3" >Vợ</div>	<!--3-->							
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag3" data-div="drop6">biết</div>	<!--6 -->	 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag4" data-div="drop4">Con</div>	<!--4 -->									 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag5" data-div="drop7">cảm ơn</div>	<!--7 -->							 
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag6" data-div="drop1">Ba</div>    <!--1 -->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag7" data-div="drop9">xin lỗi</div>    <!--9 -->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag8" data-div="drop2">Mẹ</div>    <!--2 -->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag9" data-div="drop8">Em gái</div>    <!--8 -->
		<div  draggable="true" ondragstart="drag(event)"class="btn-light btn-lg btn-block" id="drag10" data-div="drop10">Khỏe</div>	<!--10-->	
    </div>
		<!--Блоки ответов-->
<div class="col-4" > 
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop1"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop2"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop3"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop4"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop5"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop6"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop7"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop8"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop9"></div>
	<div ondrop="drop(event)" ondragover="allowDrop(event)" class="height_div btn-light btn-lg btn-block" id="drop10"></div>

	
</div>
		<!--Блоки вопросов-->
    <div class="col-4 text-left">
		<div class="height_div btn-light btn-lg btn-block">Отец </div>   <!--1 -->
		<div class="height_div btn-light btn-lg btn-block">Мать</div>	<!-- 2-->
		<div class="height_div btn-light btn-lg btn-block">Жена</div>	<!--3 -->
		<div class="height_div btn-light btn-lg btn-block">Ребенок</div>	<!-- 4-->
		<div class="height_div btn-light btn-lg btn-block">Я, меня</div>	<!--5 -->
		<div class="height_div btn-light btn-lg btn-block">знать</div>	<!--6 -->
		<div class="height_div btn-light btn-lg btn-block">благодарить</div>	<!--7 -->
		<div class="height_div btn-light btn-lg btn-block">Младшая сестра</div>	<!--8 -->	
		<div class="height_div btn-light btn-lg btn-block">извинить</div>	<!--9 -->
		<div class="height_div btn-light btn-lg btn-block">Хорошо</div>	<!--10 -->
		

    </div>

	</div>
			<button onclick='window.location.reload(true)' class=" btn-lg" style="margin:10px;"> ПОПРОБОВАТЬ СНОВА</button>	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	</div>
	
</div>




<script>

			
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
	location.href = 'index.php?comwords20=value'; //переадресация на новую тренировку
//history.back(); 

 });


</script>