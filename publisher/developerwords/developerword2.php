<?php
require_once 'developerwords/icondeveloperwords.php';
require_once 'connect.php';
?>


<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-3 col-sm-3 col-xs-3">	</div>
			<div class="col-lg-6 col-sm-6 col-xs-6">
						<h3>25 глаголов:</h3>			

				
					

   <table class="table table-striped text">

        <?php
			$sql = mysqli_query($link, "SELECT VWORD, RWORD FROM pronouns");
				while ($result = mysqli_fetch_array($sql)) {
					echo
					"<tr>
						<td>{$result['VWORD']}</td>

						<td>{$result['RWORD']}</td>
					</tr>";
				}
			// закрываем подключение
			mysqli_close($link);
        ?>

    </table>									
				
		<div class="col-lg-3 col-sm-3 col-xs-3    bg-primary ">	</div>		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
			</div>
    </div>
</div>

<script>
	
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?developerword3=value'; //переадресация на новую тренировку
 });	
</script>