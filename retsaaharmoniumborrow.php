<?php
	$link = mysql_connect('dbms.iiitdmj.ac.in', '2016013', '54d2d108') or die ("Unable to connect the server.");
	$db=mysql_select_db('2016013');
	if(!$db){ die("Unable to select database"); }
	$qry='UPDATE Props SET Quantity = 1 WHERE PName="Harmonium"';
	$results = mysql_query($qry) or die(mysql_error());
	echo "Returned successfully!";
?>