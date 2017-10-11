<?php 
	# string function: 处理字符串的函数
	$output = "hello World";
	# 返回字符串的一部分 substr
	#string substr ( string $string , int $start [, int $length ] )
	/*$output = substr($output, 1 ,30);
	echo $output;*/
	# 返回给定的字符串 string 的长度  strlen
	#int strlen ( string $string )
	// echo strlen($output);
	# 查找字符串首次出现的位置 strpos
	#mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
	//echo strpos($output, "lo");#???
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	//int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )
	// $output = strrpos(haystack, needle)
	# 去除首尾空格trim
	#string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
	// $output = "  Hello World  ";
	// echo strlen($output);
	// echo trim($output);
	# 将字符串转为大写 strtoupper
	/*$output = "hello world";
	$newStr = strtoupper($output);
	echo $newStr;
	
	# 将字符串转为小写 strtolower
	$lowerStr = strtolower($newStr);
	echo $lowerStr; 
	
	# 将每个单词首字母大写 ucwords
	$ucword = ucwords($lowerStr);
	echo $ucword;*/
	
	# 替换所有匹配的内容  str_replace
	/*$text = " Hello World";
	$replaceStr = str_replace("World", "Everybody",$text);//被替换内容,替换内容,查找的字符串
	echo $replaceStr;*/
	
	# 判断是否是字符串  is_string
	#bool is_string ( mixed $var )
	// $val = "true";
	// $output = is_string($val);
	// echo $output;
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",32,'23',23.4,'32.4','',' ',0,'0');
	foreach ($values as $value ) {
		#判断对应值是否为字符串,如果是输出
		if (is_string($value)) {
			echo $value." is a string!<br>";
		}
	}
	# 压缩字符串  gzcompress
	# string gzcompress ( string $data [, int $level = -1 [, int $encoding = ZLIB_ENCODING_DEFLATE ]] )
	// $string = "一大堆文字";
	// $compressed = gzcompress($string);
	// echo $compressed;
	// # 解压字符串
	// $unCompressed = gzuncompress($compressed);
	// echo $unCompressed;
 ?>