<?php 
	# array : 数组 有效控制资源 存储数据的集合
	/*
		下标数组:下标以0开始
		关联数组:以第一个名字开头
	*/
	# 下标数组
		/*$people = array ('kevin','Henry','Scott');
		echo $people[1];*/
		//echo $people[3]; //数组越界

		/*$ids = [23,56,42];
		echo $ids[2];*/
		
		/*$cars = ['Honda','Toyota','BYD'];
		$cars[3] = "BMW";
		echo $cars[3];
		echo count($cars);//打印当前数组长度
		print_r($cars);//打印数组方法
		var_dump($cars);//万能打印*/

		# 关联数组

		// $people = array("Henry"=>35,"Bucky"=>25,"Emily"=>20);
		// echo $people["Emily"];

		/*$ids = [22 => "Henry",56 => "Blair"];
		echo $ids[22];

		$ids[35] = "Emily";
		print_r($ids);*/
		$cars = ['Honda','Toyota','BYD'];
		$cars[] = "Bence";//下标数组可以通过不写下标的方式添加至最后一位
		print_r($cars);

		$ids[] = "john";
		print_r($ids);
		$people = array("Henry"=>35,"Bucky"=>25,"Emily"=>20);
		$people[] = "john";
		$people[] = "john2";
		//关联数组前面下标为字符串的,空下标添加,其下标为0
		print_r($people);
		#多维数组
		$car = array(
			array("hehe",20,20),
			array("haha",10,10),
			array("heihei",15,15)
		);
		echo $car[2][1];

	
 ?>