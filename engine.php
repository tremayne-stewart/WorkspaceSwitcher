<?
	$host="127.0.0.1";
	$port="50002";
	
	$clientSocket= fsockopen($host,$port,$errno,$errstr);
	$toSend="tustew5791 ".$_GET["workspace"];
	echo $toSend;
	fputs($clientSocket,$toSend);
?>
