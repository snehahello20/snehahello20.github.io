<?php

$con = mysqli_connect("localhost", "root", "")or die("Unable to connect");
mysqli_select_db($con, 'salarydostdb') or die('database not found');
?>
