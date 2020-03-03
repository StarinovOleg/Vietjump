<?php
	require_once 'connect.php'; //связь с базой данных
	
?>
<h1 id="time">Блог разработчика:</h1>  
<div class="container-fluid post2 text-left">
	<div class="row">
	<div class="col-lg-12 col-sm-12col-xs-12 ">
	<?php
	function get_article ($sql){//функция получения данных базы
		while ($result=mysqli_fetch_array($sql)) // извлечение данных из результата запроса
		{					
			echo htmlspecialchars_decode('<h2>'.$result['post_title'].$result['post_content'].$result['post_date'].'</h2>',ENT_QUOTES); // вывод на экран столбцов бд
		};	
	}	
	get_article($sql=mysqli_query($link,"select * from posts ORDER BY post_date;")); //запрос к бд 
	mysqli_close($link);	//закрытие соединения с бд
	?>

	</div>		
	</div>
</div>