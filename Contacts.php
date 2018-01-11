<?php 

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$num = $_POST['num'];

	echo $fname . ', ' .  $lname;

	$inputs = fopen('Contacts.txt', 'a');
	fwrite($inputs, $fname . ', ' . $lname . ', ' . $num . "\n");
	fclose($inputs);
?>
