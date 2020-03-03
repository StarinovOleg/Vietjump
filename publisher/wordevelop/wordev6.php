<?php
require_once 'wordevelop/iconwordevelop.php';
?>

<div class="container-fluid">
	
	<div class="row">
	
	<div class="col-lg-12 col-sm-12 col-xs-12  post2  text-left text-md-center bg-primary ">
		
		<h3>Сравнение предметов</h3>  	
		<div class="post3">
			<p>Для сравнения предметов употребляются слова:</p>
			<p><span class="textweight">như</span> (Как)</p>
			<p><span class="textweight">bằng</span> (Такой же...как)</p>
			<p><span class="textweight">không như</span>(Не такой ...как)</p>
			<p><span class="textweight">không bằng</span>(Не такой ...как)</p>
			<p> Примеры:</p>
			
			<p><span class="textweight">Trắng như tuyết </span>  (Белый как снег)  </p>
			<p><span class="textweight">Bạn cao bằng anh ấy</span> (Ты такой же худой, как и он) </p>
			<p><span class="textweight">Cái cáo này không đẹp như cái áo kia</span> (Эта футболка не красивая, как та футболка)  </p>
			<p><span class="textweight">Xe máy điện Không nhanh bằng xe máy</span> (Электро-велосипед не такой быстрый как скутер) </p>
			<p><span class="textweight">hơn </strong> (Чем)</p>
			<p>Для сравнения прилагальных используют слово <span class="textweight">hơn </span>.</p>			
			<p><span class="textweight">Tôi cao hơn bạn</span> (Я худее, чем ты)</p>
			<p><span class="textweight">Tôi nhỏ hơn bạn</span> (Я моложе, чем ты)</p>
			<p><span class="textweight">Nước Nga lớn hơn nước Việt Nam.</span> (Россия больше, чем Вьетнам)</p>
		</div>


			<button id="BackWordPage" class=" btn-lg" > ПРОДОЛЖИТЬ</button>				
     </div>			
	
	</div>
	
</div>




<script>
     //ПЕРЕХОД НА СЛЕДУЮЩУЮ СТРАНИЦУ
 BackWordPage.addEventListener("mousedown", function cheking(event) {
 if (event.which == 1) 
	location.href = 'index.php?wordev7=value'; //переадресация на новую тренировку


 });

</script>