<?php
	header('Content-type: text/html; charset=cp1251');
	include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
	$query = mysql_query("select * from cinema");
	//	$num0L = mysql_num_rows($query);
	$num0L = mysql_fetch_array($query);
	//	echo $num0L;
	//	for($i=1;$i<=$num0L;$i++)	{
	//		$query = mysql_query("select * from cinema where id=\'" . $i . "\'");
	//		echo $query["name"];
	//	}
	do
		echo $num0L['name'] . "<br/>";
	while($num0L = mysql_fetch_array($query));
?>