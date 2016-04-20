<?php
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'disatapp-db';
$dbuser = 'disatapp-db';
$dbpass = 'TQOOIdfsDRGWJkvj';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle) or die("Error selecting database: $dbname");
$result= mysql_query("INSERT INTO UserName (UserNameID, lastName, userName, pass, firstName) VALUES ('', '$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[firstname]')"); 

if ($result)
{
	echo"true";
}
else
{
	echo"false";
}

?>