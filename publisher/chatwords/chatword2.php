
<div class="container-fluid">	
	<div class="row">	
		<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">

			<h3>Anh tên là gì?</h3>
			<h3>Как тебя зовут?</h3> 
				<div class="post3">
					<p class="text">Темы для разбора:</p>
					<img src="images/chatwords/chatword1.png" class="">
					
					<div style="background-color: #42aaff;">
						<h3>- Anh tên là gì?</h3>
						<p class="text">Как тебя зовут?</p>
					</div>
					
					<div style="background-color: #ccff99;">					
						<h3>- Anh là người nước nào?</h3>
						<p class="text">Откуда ты?</p>	
					</div>
					
					<div style="background-color: #ffd942;">					
						<h3>- Đại từ nhân xưng</h3>
						<p class="text">Личные местоимения</p>	
					</div>
					

					
				</div>
		
	
	
			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>		
	
		</div>
    </div>
</div>

<script>
document.getElementById('hideBlockIcon2').style.display = 'block'; //блок видимости меню курса
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
	location.href = 'index.php?chatword3=value'; //переадресация на новую тренировку
 });
</script>