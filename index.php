<?
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	

	<!--Подключаем библиотеку-->
	<script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
	
<button id="btn"> Send </button>
 
<script>
$("#btn").click(function(){
	$.ajax({
	  type: 'post',
	  url: '/json.php',
	  success: function(data){
		$('#p').html(data);
	  }
});

});
</script>
<p id="p"></p>
</body>
</html>