<?php
require_once 'developerwords/icondeveloperwords.php';

?>


<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-3 col-sm-3 col-xs-3">	</div>
			<div class="col-lg-6 col-sm-6 col-xs-6 bg-primary post2">
						<h3>Времена глаголов:</h3>			
						
						<p class="text"> <strong>Глаголы из контекста</strong></p>
						 <div class="text-left">
							<p class="text"> Напомним, форма глаголов не изменяется.  </p>
							<p class="text"> Существуют ситуации, когда время глагола можно определить из контекста. </p>
						 
						
						
							<h3>Пример: Tôi đi Nhà hát Lớn.</h3><p class="text">Я <strong>иду</strong> в Большой театр.</p>
							<h3>Пример: Hôm qua tôi đi Nhà hát Lớn.</h3> <p class="text"><strong>Вчера</strong> я <strong>ходил</strong> в Большой театр.</p>
							<h3>Пример:  Ngày mai tôo đi Nhà hát Lớn</h3> <p class="text"><strong>Завтра</strong> я <strong>пойду</strong> в Большой театр.</p>
						
						</div>				
						



		<div class="col-lg-3 col-sm-3 col-xs-3    bg-primary ">	</div>		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
			</div>
    </div>
</div>

<script>
	
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?developerword6=value'; //переадресация на новую тренировку
 });	
</script>