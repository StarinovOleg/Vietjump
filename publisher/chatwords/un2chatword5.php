<?php
require_once 'chatwords/iconchatword.php';
?>

<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  bg-primary ">

				<div class="post3">
						<h3>Профессии:</h3>			
					<div class="col-lg-12 col-sm-12 col-xs-12 newwords" >

						<br>
						<h3>Bác sĩ: врач;</h3>						

						<br>
						<h3>Cò/nông dân: фермер;</h3>						

						<br>
						<h3>Họa sĩ: художник;</h3>							

						<br>						
						<h3>Việt /Cảnh sát: полицейский;</h3>
						<br>
						<h3>Ca sĩ: певец;</h3>
						<br>						
						<h3>Phương: стюардеса;</h3>	
						<br>						
						<h3>Kĩ sư: инженер;</h3>							
						<br>						
						<h3>Hùng/lái xe: водитель.</h3>	
					</div>					
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
	
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?un2chatword6=value'; //переадресация на новую тренировку
 });	
</script>