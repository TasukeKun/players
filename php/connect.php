<?php

	$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'best players');

	if(!$connect)
	{
		die('Error to connect to DB');
	}