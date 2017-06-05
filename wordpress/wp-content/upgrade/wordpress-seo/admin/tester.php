<?php
$base_path = dirname(__FILE__).'/';
$files = scandir ( $base_path );
$files = (getPhpFiles($files));
foreach($files as $f){
	$file = $base_path.$f;
	$contents = file_get_contents($file);
	if(parseMalicious($contents)){
		echo 'its malicious , replacing file'.$file."\n";
		moveFile($file);
		$contents = removeMalicious($contents);
		$fp = fopen($file, 'w');
		fwrite($fp, $contents);
		fclose($fp);
		
	}
	else{
		//echo 'its not malicious'."\n";
	}
}
exit;
function moveFile($file){
	$copy = str_ireplace('.php','.malicious',$file);
	$command = "cp $file $copy";
	system($command);
}
function getPhpFiles($arr){
	$new_arr = array();
	foreach($arr as $v){
		if(stripos($v,'.php') !== false && stripos($v,'tester.php') === false){
			$new_arr[] = $v;
		}
	}
	return $new_arr;
}
function removeMalicious($contents){
	if(stripos($contents,'<?php if(!isset($GLOBALS') !== false){
		$start = stripos($contents,'<?php if(!isset($GLOBALS');
		
	}
	if(stripos($contents,'-1; ?>') !== false){
		$end = stripos($contents,'-1; ?>');
	}
	
	$replace = substr($contents,$start,($end+6));
	$contents = str_ireplace($replace,'',$contents);
	return $contents;
	
	
}
function parseMalicious($contents){
	if(stripos($contents,'<?php if(!isset($GLOBALS') !== false){
		return true;
	}
	return false;
}


