<div class="container">
<?php 
	#检查是否存在data的name属性
	// if (filter_has_var(INPUT_POST, "data")) {#有没有属性-过滤
	// 	echo "data 存在!";
	// 	$email = $_POST['data'];
	// 	// echo $email;
	// 	#过滤不合法字符
	// 	$email = filter_var($email,FILTER_SANITIZE_EMAIL);#过滤不合法,
	// 	echo $email;
	// 	#验证是否是一个有效的邮箱
	// 	if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
	// 		echo "邮箱有效!";
	// 	}else{
	// 		echo "邮箱不合法!";
	// 	}
	// }else{
	// 	echo 'data 不存在!';
	// }
		/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
		
		验证和审核区别
		SANITIZE留下合法,去掉不合法
		VALIDATE判断是否符合规则,不改变
	*/
	# 练习:验证变量是否为合法整型
	// $var = 23;
	// if (filter_var($var,FILTER_VALIDATE_INT)) {
	// 	echo "变量为合法整型";
	// }else{
	// 	echo "变量为非合法整型";
	// }

	# 获取字符串中所有的数值
	$var = 'sdfg3geg5ergh8847dfg45';
	var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

	# 特殊字符
	$var = '<script>alert(1)</script>';
	// echo $var;
	echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

	#验证数组中每个元素
	/*$filters = array(
		"data" => FILTER_VALIDATE_EMAIL,
		"data2" => array(
			'filter' => FILTER_VALIDATE_INT,
			'options' => array(
					"min_range" => 1,
					'max_range' => 150
				)
			)
		);
	print_r(filter_input_array(INPUT_POST,$filters));*/
	#验证 form表单中input的内容,第一个input一定是email,第二个input是数值且不小于1,大于150
	// if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)) {
	// 	echo "第一个输入为合法邮箱";
	// };

/*	if (filter_input(INPUT_POST,"data2",FILTER_VALIDATE_INT)) {
		$num = filter_input(INPUT_POST,"data2");
		if ($num > 150 || $num < 3) {
			echo "数值超出范围";
		}else{
			echo $num;
			echo "值介于1-150之间";
		}
	}else{
		echo "不是整型";
	};*/
	#修改版(解决0的问题,正数版)
	if(filter_has_var(INPUT_POST,"data2")){
		$int = $_POST["data2"];
		if(filter_var($int<1 && $int>150,FILTER_VALIDATE_INT)>=0){
			
			echo "";
			
		}else{
			echo $int;
		}
	}else{
		echo "";
	}

	$arr = array(
		"name" => "henry",
		"age" => "130",
		"email" => "henry@gmial.com"
	);
	$filters = array(
		"name" =>array(
			"filter" => FILTER_CALLBACK,
			"options" => "ucwords"
		),
		"age" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 100
			)
		),
		"email" => FILTER_VALIDATE_EMAIL
	);
	print_r(filter_var_array($arr,$filters));

?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>filters / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="data" class="form-control">
			<br>
			<input type="text" name="data2" class="form-control">
			<br>
			<button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>