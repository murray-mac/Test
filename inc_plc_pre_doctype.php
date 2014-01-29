<?php session_start(); ?>
<?php header("Content-Type: text/html; charset=ISO-8859-1"); ?>
<?php
function curPageURL() {
	
 $pageURL = 'http';
 $pageURL .= '://';
 
 if ($_SERVER['SERVER_PORT'] != '80') {
	 
	  $pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	  
	 } else {
		 
	  $pageURL .= $_SERVER['SERVER_NAME'].strtok($_SERVER['REQUEST_URI'], '?');
	  
	 }
	 
 return $pageURL;
 
}
?>
<!doctype html>
<html>
<head>