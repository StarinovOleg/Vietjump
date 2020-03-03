<?php
require_once 'chatwords/iconchatword.php';
?>

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">

				<div class="post3">
						<h3>Новые слова и фразы:</h3>			
					<div class="col-lg-12 col-sm-12 col-xs-12 newwords">

						<br>
						<h3>Nhật Bản: Япония;</h3>						

						<br>
						<h3>Hàn Quốc: Корея;</h3>						

						<br>
						<h3>Anh: Великобритания;</h3>							

						<br>						
						<h3>Trung Quốc: Китай;</h3>
						<br>
						<h3>Mỹ: США;</h3>
						<br>						
						<h3>Nga: Россия;</h3>	

					</div>					
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
	
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?chatword11=value'; //переадресация на новую тренировку
 });	
</script>