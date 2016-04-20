<?php 
session_start();
	if(!isset($_SESSION['name'])&&!isset($_SESSION['in1'])&&!isset($_SESSION['in2']))
	{
		header('location:http://web.engr.oregonstate.edu/~disatapp/HW3/input.php');
		exit;
	}
	$sname = $_SESSION['name'];
	$s1 = $_SESSION['in1'];
	$s2 = $_SESSION['in2'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>GET: function</title>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    </head>
	<body>
		<h1> Stringing Strings </h1><br><br>
		<div> 
		<br>
			<b1>Welcome!<b1> <?php echo $sname ?>, lets string your strings<br>
			x: <?php echo $s1 ?> and 
			y: <?php echo $s2 ?>!<br><br>
		</div>
		<form action="strings.php" method="get">
			<button type='submit' name="op" value='conxy'> Concatenate x + y</button>
			<button type='submit' name="op" value='conyx'> Concatenate y + x</button>
			<button type='submit' name="op" value='substr'>Substring Test</button>
			<button type='submit' name="op" value='new'>Start Over</button>
		</form>
			<br>
				<?php 	
			if($_GET['op'] == 'conxy')
			{
				echo 'Concatenate x + y'."<br>";
				echo $s1." ".$s2;
			}
			if($_GET['op'] == 'conyx')
			{
				echo 'Concatenate y + x'."<br>";
				echo  $s2." ".$s1;
			}
			if($_GET['op'] == 'substr')
			{
				if (strpos($_SESSION['in1'], $_SESSION['in2']) !== false)
				{
					echo '['.$_SESSION['in2'].'] is a sub-string of ['.$_SESSION['in1'].']'.'<br>';
				}
				if (strpos($_SESSION['in2'], $_SESSION['in1']) !== false)
				{
					echo '['.$_SESSION['in1'].'] is a sub-string of ['.$_SESSION['in2'].']'.'<br>';
				}
			}
			if($_GET['op'] == 'new')
			{	
				session_unset ();
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=input.php">';
			}
		?>
	</body>
</html>