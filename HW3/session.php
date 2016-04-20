<?php
ini_set('display_errors', 1);
session_start();
/* some code from piazza Maria Powell post*/
	if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['in1']) && !empty($_POST['in2'])) 
	{	
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['in1'] = $_POST['in1'];
		$_SESSION['in2'] = $_POST['in2'];
		header('location:http://web.engr.oregonstate.edu/~disatapp/HW3/strings.php');
		exit;
	}
	if(isset($_SESSION['name']))
	{
		header('location:http://web.engr.oregonstate.edu/~disatapp/HW3/strings.php');
		exit;
	}
		header('location:http://web.engr.oregonstate.edu/~disatapp/HW3/input.php');
		exit;
?>
