<?php

function p($par,$st=false){
	 if($st){
		return htmlspecialchars(trim($_POST[$par]));
	 }
	 else{
		return trim($_POST[$par]);
	 }
    }
    
    function g($par){
        return strip_tags(trim($_GET[$par]));

    }
    function kisalt($par,$uzunluk=50){
    	if (strlen($par)>$uzunluk){
    		$par=mb_substr($par,0,$uzunluk,"UTF-8").".." ;
    	} 
    		
  
    	return $par;
    }
    function ss($par){
    	return stripcslashes($par);
    }
    function go($par,$time=0){
    	if($time==0){ 
    		header("Location:{$par}");
 	}
    	else { 
    		header("Refresh:{$time}; url={$par} ");
    	}
    } 
    function session_olushtur($par){
    	foreach ($par as $anahtar => $deger) {
    		$_SESSION[$anahtar]=$deger;
    	}
    }
    function sef_link($url){
	 $url = trim($url);
	 $url = strtolower($url);
	 $find = array('<b>', '</b>');
	 $url = str_replace ($find, '', $url);
	 $url = preg_replace('/<(\/{0,1})img(.*?)(\/{0,1})\>/', 'image', $url);
	 $find = array(' ', '"', '&', '&', '\r\n', '\n', '/', '\\', '+', '<', '>');
	 $url = str_replace ($find, '-', $url);
	 $find = array('Г©', 'ГЁ', 'Г«', 'ГЄ', 'Г‰', 'Г€', 'Г‹', 'ГЉ');
	 $url = str_replace ($find, 'e', $url);
	 $find = array('Г­', 'Г¬', 'Г®', 'ГЇ', 'I', 'ГЌ', 'ГЊ', 'ГЋ', 'ГЏ', 'Д°', 'Д±');
	 $url = str_replace ($find, 'i', $url);
	 $find = array('Гі', 'Г¶', 'Г–', 'ГІ', 'Гґ', 'Г“', 'Г’', 'Г”');
	 $url = str_replace ($find, 'o', $url);
	 $find = array('ГЎ', 'Г¤', 'Гў', 'Г ', 'Гў', 'Г„', 'Г‚', 'ГЃ', 'ГЂ', 'Г‚');
	 $url = str_replace ($find, 'a', $url);
	 $find = array('Гє', 'Гј', 'Гњ', 'Г№', 'Г»', 'Гљ', 'Г™', 'Г›');
	 $url = str_replace ($find, 'u', $url);
	 $find = array('Г§', 'Г‡');
	 $url = str_replace ($find, 'c', $url);
	 $find = array('Ећ', 'Еџ');
	 $url = str_replace ($find, 's', $url);
	 $find = array('Дћ', 'Дџ');
	 $url = str_replace ($find, 'g', $url);
	 $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
	 $repl = array('', '-', '');
	 $url = preg_replace ($find,    $repl, $url);
	 $url = str_replace ('--', '-', $url);
	 return $url;
    }
    //require_once 'ayarp.php';
    function query($query){
     return 
    //$result = mysqli_query($baglan, $query) or die("Ошибка " . mysqli_error($baglan));
     	mysqli_query($query);
     }
    function row($query){
    	return mysqli_fetch_array($query);
    }
    function rows($query){
    	return mysqli_num_rows;

    }


    ?>