<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
	function funt()
	{
		$.ajax({
			type: "POST",
			url:"done.php",
			data: {id:'1', d:'2'},
			success:function(data)
			{
				alert(data);
			}	
		});
	}
</script>
</head>
<body>
<button id ="btn" onclick="funt()"> submit</button>	
</body>
</html>