<?php
	header('Content-type: text/html; charset=utf-8');
	$url = 'http://kinomonitor.ru/export/index.php?action=getsessions&date=02.06.2012';
	
	$xml = simplexml_load_file($url);
	
	foreach($xml->xpath('/DATA/HTM/ITM') as $item)	{
		echo $item->TM;
		echo "<br/>";
		echo $item->TN;
		echo "<br/>";
		echo $item->FN;
		echo "<br/>";
		echo $item->HN;
		echo "<br/>";
	}
?>