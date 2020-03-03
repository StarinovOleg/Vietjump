<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12  text-left text-md-center">
			<h1 id="time">Аудиорование</h1>
			<h3>Прослушайте предложение и впишите его.</h3>
			<div class="post3">
			
			</div>
			
<div class="keyboard">
			<input name="display" id="display" class="keyboard_display" SIZE=40 type ="text" >
			<div class=" post3">
			<p>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="А"  >А</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Ă" >Ă</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Â" >Â</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="B" >B</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="C" >C</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="D" >D</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Đ" >Đ</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="E" >E</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Ê" >Ê</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="G" >G</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="H" >H</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="I" >I</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="K" >K</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="L" >L</button>			
			</p>
			<p>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="M">M</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="N">N</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="O">O</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Ô">Ô</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Ơ">Ơ</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="P">P</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Q">Q</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="R">R</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="S">S</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="T">T</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="U">U</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Ư">Ư</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="V">V</button>
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="X">X</button>			
				<button class="keyboard_key keyboard_button btn btn btn-warning btn-sm" value="Y">Y</button>			
			</p>
			<p><button class="keyboard_key keyboard_backspace btn btn btn-warning btn-sm" value="<--"  id="y">space</button>	
				<button class="keyboard_key keyboard_clear btn btn btn-warning btn-sm" value="c"  id="y">delete</button>
			</p>
			
</div>
			</div>
		</div>
	</div>
</div>
<script>
//KEYBOARD
$(document).ready(function(){
var keyb=$('.keyboard');
var keybDisplay=keyb.find('.keyboard_display');
var keybKeys=keyb.find('.keyboard_key');
var keybButton=keyb.find('.keyboard_button');
var keybClear=keyb.find('.keyboard_clear');
var keybSpace=keyb.find('.keyboard_backspace');


keybKeys.each(function(){
	var current=$(this).attr('value');
	$(this).text(current);
})
keybButton.on('click', function(){
	keybDisplay.val(keybDisplay.val()+$(this).attr('value'));
});

keybClear.on('click', function(){
	keybDisplay.val('');
});


keybSpace.on('click', function(){
	keybDisplay.val(keybDisplay.val().substring(0, keybDisplay.val().length-1));
});

});


</script>