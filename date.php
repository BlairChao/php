<?php 
	//echo date(); # 至少给一个参数
	echo date('d').'<br>';# day
	echo date('m').'<br>';# month
	echo date('Y').'<br>';# year 2017
	echo date('y').'<br>';# year 17
	echo date('l').'<br>';# day of week
	echo date('Y/m/d').'<br>';# 年月日
	echo date('d-m-Y').'<br>';# 日月年

	#时分秒
	echo date('h').'<br>'; #hour
	echo date('i').'<br>'; #minutes  m是month 所以取第二个i
	echo date('s').'<br>'; #seconds
	echo date('a').'<br>'; # AM or PM

	#设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:s a').'<br>';

	#mktime 
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp.'<br>';//从设置时间到到现在的时间戳

	#完整时间
	echo date('m/d/Y h:i:s a',$timestamp);

	#字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo "<hr>";
	echo date('m/d/Y h:i:s a',$timestamp2);
	$timestamp3 = strtotime("tomorrow");
	echo "<hr>";
	echo date('m/d/Y h:i:s a',$timestamp3);
	$timestamp4 = strtotime("next sunday");
	echo "<hr>";
	echo date('m/d/Y h:i:s a',$timestamp4);
	$timestamp5 = strtotime("+2 Days");
	echo "<hr>";
	echo date('m/d/Y h:i:s a',$timestamp5);

 ?>