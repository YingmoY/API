<?php
	$img=file('/all.txt');
	$url=array_rand($img);
	header("Location:".$img[$url]);
?>
