<?php
if (empty($_SESSION['lang'])) {
  	$L="en";
  	require 'lang/en.php';
  } else
  {
     $L=$_SESSION["lang"];
     require 'lang/'.$_SESSION["lang"].".php";
  }?>