<?php 
	#分支种类 if 和 switch	
	// $num = 2;
	/*if ($num <= 4) {
		echo "num值小于等于4";
	}*/

	# if else
	/*if ($num >= 4) {
		echo "true";
	}else{
		echo "false";
	}*/

	# nesting if (嵌套)
/*	$num = 4;
	if ($num >= 4) {
		if ($num <= 10) {
			echo "num值大于等于4小于等于10";
		}else{
			echo "num大于10";
		}
	}else{
		echo "num小于4";
	}*/

	# 逻辑运算符

	/*
		逻辑与 && AND
		逻辑或 || OR
		逻辑异或 XOR 只有一边为真为真,都真未假,都假为假
		逻辑非 ! 同JS不讨论
	*/
	/*$num = 3;
	if ($num > 2 XOR $num < 10) {
		echo "num大于3且小于10";
	}*/
	/*
		AND 就是 &&
	*/
	# switch
	$favColor = '1'; //js中判断条件为 ===,php中为 ==
	switch ($favColor) {
		case 1:
			echo "I'm angry";
			break;
		case 'yellow':
			echo "haha";
			break;
		case 'blue':
			echo "silence";
			break;
		case 'green':
			echo "forgive";
			break;
		default:
			echo 'GUN';
			break;
	}
 ?>