<?php 
	# loops : 循环 提高效率
	
	# 根据某个条件,重复执行某段代码

	/*
		For
		While
		Do...While
		Foreach
	*/

	# for 循环
	# @params - init初始化,condition条件,inc自增
		for ($i=0; $i < 10; $i++) { 
			echo ($i+1)."<br>";
		}
		echo $i."<br>";
	# while 循环
	# @params - condition条件
	/*$i = 0;
	while ($i < 10) {
		echo $i.'<br>';
		$i++;
	}*/
	# do...while
	# @params condition
	/*$i = 0;
	do{
		echo $i.'<br>';
		$i++;
	}while ( $i < 10)*/

	#foreach 循环 遍历下标数组
	$people = array('Scott','Blair','Emily');
	foreach ($people as $person) {//逐个赋值给#person
	 	echo $person;
	 	echo "<br>";
	 } 

	# foreach 循环遍历关联数组
	 $people = array(
	 	'Blair' => "Blair@gmail.com",
	 	'Tom' => "Tom@gmail.com",
	 	'John' => "John@gmail.com"
	 	);
	 foreach ($people as $name => $email) {
	 	# code...
	 	echo $name.":".$email;
	 	echo "<br>";
	 }

	 /*
	 练习:
	 	打印1~100之间7的倍数
	 	打印1~100之间个位为7的数
	 	打印1~100之间十位为7的数
	 	打印1~100之间个/十位非7且不是7倍数的数
	 	打印99乘法表
	 */
 ?>