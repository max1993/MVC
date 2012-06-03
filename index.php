<?php
	ini_set("display_errors",true);
	//index.php?url=files/css/main.css
	include('files/c/bootstrap.php');
	$cont= "files/c/". $url[0]. ".php";
	if(file_exists($cont)){
		include $cont;
		$c = new $url[0];
		if(function_exists($url[1])){
			//check if pars are send
			$c->$url[1]();
		}else{echo "function not existes now<br>";}
	}else{
		die("this file does not existes yet on the system");
	}
		