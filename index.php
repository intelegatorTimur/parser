<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
</head>
<body>

<div class="result" style="width: 800px; min-height: 200px; text-align: center; margin: 0 auto;">
	

</div>

<center>

<input type="text" name="" style="width: 400px; " value="http://mp3.cc/">

</center>	<br>
<center>

<button id="btn">Parse</button>

</center>






<script>
$("#btn").on('click',function(){
   

function one() {

		    $('.result').html('<h2>Получаем ссылки всех страниц сайта!</h2>');

			var url = $('input[type=text]').val();

				$.ajax({
				url: "http://parse.loc/handler.php",
				type: "POST",
				data: "target=one&url="+url,
				success: function(data){

				//$('.result').html("ссылки с главной получены, запускаю функцию поиска страниц");
                $('.result').html(data);
               // two();
				}



			});
}






function two() {

		    $('.result').html('<h2>Получаем ссылки всех страниц сайта!</h2>');

			var url = $('input[type=text]').val();

				$.ajax({
				url: "http://parse.loc/handler.php",
				type: "POST",
				data: "target=one&url="+url,
				success: function(data){

				$('.result').html("ссылки с главной получены, запускаю функцию поиска страниц");

                //two();
				}



			});
}




one();

});

	



</script>




</body>
</html>