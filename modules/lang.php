<?php
session_start();
$lang=strip_tags($_GET['lang']);
if($lang=='az'||$lang=='ru'||$lang=='en'){
	$_SESSION['lang']=$lang;
	header("location:../index.php");
} else
{
	$_SESSION['lang']='en';
	header("location:../index.php");
}
session_write_close();
