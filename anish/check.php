<!DOCTYPE html>
<html>
<head>
	<title>check</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","root","task");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql ="select * from checkk";
  $result = mysqli_query($con,$sql);
?>
<table>
	<tr>
		<td>a</td><td>b</td>
	</tr>
	
	<?php while($row = mysqli_fetch_array($result)) { ?>
		<tr>
		<td><?php echo "$row[a]"; ?></td>
		<td> <input type="checkbox" id="<?php echo $row[a];?>" class="check" <?php if($row[b]=='1') { echo "checked "; } ?>> </td>
		</tr>
	<?php } ?>
</table>
<script type="text/javascript">
	var id;

	$(document).ready(function(){
		$('.check').click(function(){
		 id = $(this).attr('id');
		
		if ($(this).is(':checked')) {
			$.ajax({
				type:"POST",
				url:"untick.php",
				data: {a:id},
				success:function(data){
					alert(data);
				}
			});
		}
		else if ($(this).is(':not(:checked)')){
			$.ajax({
				type:"POST",
				url:"tick.php",
				data: {a:id},
				success:function(data){
					alert(data);
				}
		});
	}

	});
	});


</script>
</body>
</html>