<div class="container-fluid post2">
	
		<div class="row">
		
			<div class=" col-lg-12 col-sm-12 col-xs-12 text-md-center">
			
				<h1 id="time">Топ 25 глаголов: </h1>  
				
			</div>
			
		</div>
		
		
		<div class="row" >
			<div class="col-lg-3 col-sm-3 col-xs-3">

			</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 ">
						<h2 id="vword"></h2>
						<img src="images/developerwords/developerword3.png" class="cardpic " >

								<?php
								//ПОДКЛЮЧЕНИЕ К СЛОВАРЮ 
									$sql = mysqli_query($link, "SELECT RWORD,VWORD FROM pronouns where id>0 limit 25  ");


										while ($result = mysqli_fetch_assoc($sql)) {
										
										$RWORD[]=$result['RWORD'];		
										$VWORD[]=$result['VWORD'];
														
							

										};
										$json1= json_encode($RWORD);
										$json = json_encode($VWORD);
											

									// закрываем подключение
									mysqli_close($link);
								?>					

						<h2 class="text-danger" id="result"></h2> 		
						<div id="hideBlock" class="myItems " >
							
								<button onclick="cheking();" class="button  btn-warning btn-lg" id="option1" style="margin:1%;" ></button>				
							
							
								<button onclick="chekingnot();" class="button  btn-warning btn-lg" id="option2" style="margin:1%;"></button>				
							
							
								<button onclick="chekingnot();" class="button  btn-warning btn-lg" id="option3" style="margin:1%;" ></button>				
							
								
								<button onclick="chekingnot();" class="button  btn-warning btn-lg" id="option4" style="margin:1%;"></button>
							
						</div>
					

						<button id="newsubmit"class="btn-light btn-lg" style="margin:1%;" >ГЕНЕРАЦИЯ СЛОВА</button>
						<div><button id="BackWordPage" class=" btn-lg" >СЛЕДУЮЩАЯ СТРАНИЦА</button></div>
				</div>					
				
			<div class="col-lg-3 col-sm-3 col-xs-3">
				
			</div>				
		
		</div>
		
        <script>
			var rword = JSON.parse('<?php echo $json1; ?>');
			var vword = JSON.parse('<?php echo $json; ?>');

            document.getElementById('hideBlockIcon1').style.display = 'block'; //блок  меню курса	
			 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?developerword4=value'; //переадресация на новую тренировку
 });	
	
        </script>
		<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
		<script src="js/developerword3.js" ></script>
</div>