<?php
$main = require "main.php";
return CMap::mergeArray($main,
	array(
		'params' => require 'params-local.php',
	)
);