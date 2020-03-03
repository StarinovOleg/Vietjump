<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">	
	<div class="row">	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">		
		<h3>Глаголы</h3>  	
		<div class="post3">
			
			<h3>Глаголы речи, мысли, знания,восприятия:</h3>
			<p>Глаголы речи :<span class="textweight">nòi</span> говорить.</p>
			<p>Глаголы мысли:<span class="textweight">suy nghĩ</span> думать.</p>
			<p>Глаголы знания:<span class="textweight">biết</span> знать.</p>
			<p>Глаголы восприятия:<span class="textweight">cảm thấy</span> чувствовать.</p>	
			<p>Но нельзя употреблять данные глаголы без контекста: неправильно сказать (я чувствую), надо добавить контектс - я чувствую...(например: себя хорошо).</p>	
		</div>
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>
<script>

     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 	location.href = 'index.php?wordev10=value'; //переадресация на новую тренировку
 });
</script>