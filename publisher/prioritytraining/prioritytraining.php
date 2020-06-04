<?php
//ПОДКЛЮЧЕНИЕ К СЛОВАРЮ 
	$sql = mysqli_query($link, "SELECT RWORD,VWORD FROM pronouns  ORDER BY RAND() limit 46");


		while ($result = mysqli_fetch_assoc($sql)) {
										
			$RWORD[]=$result['RWORD'];		
			$VWORD[]=$result['VWORD'];
	
														
							

										};

										

														
							

											
			$son1= json_encode($RWORD);
			$son = json_encode($VWORD);
									

			// закрываем подключение
			mysqli_close($link);
?>					



<div class="container-fluid post2">
	
		<div class="row">
		
			<div class=" col-lg-12 col-sm-12 col-xs-12 text-md-center">
			
				<h1 id="time">Случайные слова из словаря: </h1>  
				
			</div>
			


				<div class="col-lg-12 col-sm-12 col-xs-12 text-md-center">
						<h2 id="vword"></h2><!-- слово на вьетнамском языке-->
						<div class="cardpic"><img src="" class="cardpic "></div><!-- блок смены изображения-->

						<h2 class="text-danger" id="resulted"></h2> 		<!-- результат-->
						<div id="hideBlock" class="myItems " >    
							
								<button onclick="cheking();" class="button  btn-warning btn-lg" id="option1" style="margin:1%;" ></button>				
							
							
								<button onclick="chekingnot();" class="button  btn-warning btn-lg" id="option2" style="margin:1%;"></button>				
							
							
								<button onclick="chekingnot();" class="button  btn-warning btn-lg" id="option3" style="margin:1%;" ></button>				
							
								
								<button onclick="chekingnot();" class="button  btn-warning btn-lg" id="option4" style="margin:1%;"></button>
							
						</div>
					
						<br>
						<button id="newsubmit"class="btn-light btn-lg" style="margin:1%;" >СЛЕДУЮЩЕЕ СЛОВО</button>

				</div>					
				

				
			</div>				
		
		</div>
		
        <script>
			var rword = jQuery.parseJSON('<?php echo $son1; ?>');
			var vword = jQuery.parseJSON('<?php echo $son; ?>');



        </script>

		<script src="prioritytraining/js/prioritytraining.js" ></script>
</div>