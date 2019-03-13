<?php
	$link = mysql_connect('dbms.iiitdmj.ac.in', '2016013', '54d2d108') or die ("Unable to connect the server.");
	$db=mysql_select_db('2016013');
	if(!$db){ die("Unable to select database"); }
	$qry='UPDATE Props SET Quantity = 0 WHERE PNAme="Harmonium"';
	$results = mysql_query($qry) or die(mysql_error());
	echo "Harmonium borrowed successfully!";

	$query='INSERT INTO Borrows(CName,PName,Quantity) VALUES ("Saaz","Harmonium",1)';
	$result = mysql_query($query) or die(mysql_error());

	echo'<form action="retsaaharmoniumborrow.php" method="post"><input type="submit" value="Return" name="Return" ></input></form>';
?>