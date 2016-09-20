<?php

if ($_GET['page']== null) {
	$template = 'home';
} else $template = $_GET['page'];

$getUrl = 'www.lanydrak.com';
include ('layout.phtml');