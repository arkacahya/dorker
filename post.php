<?php
header("Content-Type: application/json");
if( $_POST['keywords'] != '' ){
	$file 	= array("index", "profile", "story", "article", "home", "%%");
	$eks 	= array("php", "%%", "");
	$param 	= array("id", "menu", "option", "c", "s", "search", "%%");

	$return = array();
	foreach( $file as $r ){
		foreach( $eks as $a ){
			foreach( $param as $i ){
				$return[] 	= $r.( ($a == "") ? "" : "." ).$a.'?'.$i."= \"".$_POST["keywords"]."\"";
			}
		}
	}
	echo json_encode($return);
}
?>