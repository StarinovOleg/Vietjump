<?php
require_once 'chatwords/iconchatword.php';
?>

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  bg-primary ">

				<div class="post3">
						<h3>Новые слова и фразы:</h3>			
					<div class="col-lg-12 col-sm-12 col-xs-12 newwords" >

						<br>
						<h3>Anh: ты (обращение к старшему по возрасту);</h3>						

						<br>
						<h3>gì: что (при вопросительном предложении);</h3>						

						<br>
						<h3>là: быть (вспомогательный глагол);</h3>							

						<br>						
						<h3>Tên: имя;</h3>
						<br>
						<h3>Tôi: я;</h3>
						<br>						
						<h3>Người: люди;</h3>	
						<br>						
						<h3>Nước: страна;</h3>							
						<br>						
						<h3>Nào: с (из).</h3>	
					</div>					
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
	
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?chatword9=value'; //переадресация на новую тренировку
 });	
</script>