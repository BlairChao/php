<?php 
	#function: 函数 - 具有某一功能的代码块
	
	/*
		命名方式
		Camel Case - myFunction()
		Lower Case - my_Function()
		Pascal Case - MyFunction()
	*/

	// 定义函数
		#函数一定有返回值的,没有return的值,则返回undifine
		function simpleFunction(){
			echo "Hello World!";
			echo "<br>";
		}
		#调用函数,php函数名大小写不敏感
		simpleFunction();

		#有参数 无返回值
		function buy($money="20块钱"){#给参数设了默认值
			echo "给了".$money.",然后他跑了";
			echo "<br>";

		}
		// buy("10元");
		buy();
		#php中定义的变量必须赋值才能打印,通常设默认值

		#多参数 有返回值
		function sumValue($num1,$num2){
			$sum = $num1 + $num2;
			return $sum;
		}
		$sum = sumValue(3,8);//若只传一个参数则默认给第一个参数
		echo $sum;
		echo "<br>";


		#无参数 有返回值
		function buyDrink(){
			return "water";
		}
		echo buyDrink();
		echo "<br>";
		#函数传引用
		$myNum = 10;
		function addFive(&$num){#&取地址符号
			$num + 5;		#当形参有&时,通过地址拿到了传进来参数的引用,改变了其内存中的数值.在函数外使用该变量时,值已经变化.如果没有&则,在函数外使用该变量仍为原值
			echo "<br>";
		}
		addFive($myNum);
		echo $myNum;// 15
 ?>