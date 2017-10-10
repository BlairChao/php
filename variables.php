<?php 
	echo "Hello World~";
	#echo能输出变量 不能输出对象数组
	//单行注释 commmand + /
	#单行注释 shift + 3
	/*
		多行注释 alt + command + /  
	*/ 

	# variable 变量
	$output = "Hello world";
	/*
		前缀 $ 定义变量(相当于var)
		以字母/数字/下划线组成
		数字不能开头
		大小写敏感
		驼峰命名法
	*/
	echo $output;
	# 数据类型
	/*
		String
		Integer 数字
		Float 浮点(有小数的)
		Boolean 布尔(打印时true为1 ,false为空)
		Array
		Object
		Resource(函数)
	*/
	$output = 22;
	$float = 22.22;
	echo  $float;
	#运算符
	$num1 = 10;
	$num2 = 20;
	$num = $num1 + $num2;
	echo $num;

	#字符串拼接
	$string1 = "go";
	$string2 = "sleep";
	$greenting = $string1 + $string2;
	#在php中加号没有拼接功能
	echo $greenting;
	$greenting = $string1." ".$string2;
	echo $greenting;
	#php中 引号区别
	$greenting2 = '$string1 $string2';#单引号内容为单纯的字符串
	echo $greenting2;
	$greenting3 = "$string1 $string2";#双引号内的变量可以被解析
	echo $greenting3;

	#转义字符
	$string3 = 'they\'re here';
	$string4 = "they're here";
	echo $string3;
	echo $string4."<br>";
	printf($string4)."<br>";//输出速度慢,有返回值1

	#常量 在程序运行中,一旦被定义,不会改变
	define("GREETING","WTF!");
	#常量要大写,用define定义
	define("GREETING","WTF2!",true);
	#第三个参数为bool,写true时常量名不分大小写
	echo greeting."<br>";
	var_dump(greeting)."<br>";//输出函数,可以打印类型,如果是字符串或者数组输出长度

 ?>
