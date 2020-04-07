
<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-3 col-sm-3 col-xs-3">	</div>
			<div class="col-lg-6 col-sm-6 col-xs-6">
						<h3>Вопросительные слова:</h3>			

				
					

   <table class="table table-striped text">

        <?php
			$sql = mysqli_query($link, "SELECT VWORD, RWORD FROM pronouns where id>25 limit 34");
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
				

	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
			</div>
		<div class="col-lg-3 col-sm-3 col-xs-3  ">	</div>					
    </div>
</div>

<script>
document.getElementById('hideBlockIcon1').style.display = 'block'; //блок  меню курса
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?developerword9=value'; //переадресация на новую тренировку
 });	
	
	
</script>