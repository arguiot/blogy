<?php
	$request = $folder . $_SERVER['REQUEST_URI'];
	//get the HTML from the requested file
	$page = file_get_contents($request);
