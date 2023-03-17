<?php 
if(isset($_POST['mes']))
{
	$m=$_POST['mes'];
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.tel
		{

			width: 320px;
			height: 500px;
			background: black;
			color: #fff;
			top: 40%;
			left: 70%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			border-radius:50px;
		}


		.tel1
		{

			width: 220px;
			height: 350px;
			background: url('img.jpeg')center no-repeat;;
			color: ;
			top: 48%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			
		}

		.phone
		{

			width: 320px;
			height: 500px;
			background: blue;
			color: #fff;
			top: 40%;
			right: 55%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			border-radius:50px;
		}

.phone1
		{

			width: 220px;
			height: 350px;
			background: url('im.jpg')center no-repeat;
			color: ;
			top: 48%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			
		}
		.tab
		{
			top: 20%;
	position: absolute;
		}

input 
{
	border-radius: 20px;
	
}
table
{
	top: 0%;
	position: absolute;
	border-radius: 5px;
	background-color: orange;
}

td
{
	border-radius: 5px;
}

	</style>
</head>
<body>
<div class="tel">
		<div class="phone1"> 
<?php 
$m1="Bonjour comment tu vas";
		if(isset($_POST['mes1']))
{
	$m1=$_POST['mes1'];
} 
?>

<?php 
$m="Je vais bien et toi?";
		if(isset($_POST['mes']))
{
	$m=$_POST['mes'];
} 
?>

<table border="2">
	<tr>
		<td><?php echo $m1;?></td>
	</tr>
</table>

	<table class="tab">
		<form action="" method="POST">
		<input type="text" name="mes">
	</table>

	</div>

</form>
</div>

<div class="phone"> 
	
			<div class="tel1">

				<table border="2">
	<tr>
		<td><?php echo $m;?></td>
	</tr>
</table>
		<table class="tab">
			<form action="" method="POST">
		<input type="text" name="mes1">
		</form>
		</table>

	</div>


</div>
</body>
</html>

 