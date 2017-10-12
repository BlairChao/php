<div class="container">
	<?php 
		// echo $_GET['myname'];
	#检查是否获取到了myname
/*	if (isset($_POST['myname'])) {//这里if条件其实判断了是否提交过,未提交时没有myname&myemail
		// echo $_POST['myname'];
		$name = $_POST['myname'];
		$email = $_POST['myemail'];
		echo $name;
		if (!empty($name)&&!empty($email)) {
			echo $name.":".$email;	
		}
		print_r($_POST);
	}*/
	if (isset($_REQUEST['myname'])) {//这里if条件其实判断了是否提交过,未提交时没有myname&myemail
		// echo $_REQUEST['myname'];
		$name = $_REQUEST['myname'];
		$email = $_REQUEST['myemail'];
		// echo $name;
		if (!empty($name)&&!empty($email)) {
			echo $name.":".$email;	
		}
		print_r($_REQUEST);
	}
	#查询url地址后面参数(?后面的)
	// echo $_SERVER['QUERY_STRING'];
	?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get_post</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<!-- post get 用于表单 -->
	<div class="container">
		<form action="get_post.php" method="get">
		<!-- 
		1.get所有参数以?拼接方式显示在浏览器地址栏内,post没有拼接,post打包以二进制流形式上传
		2.post安全度更高
		3.post和get送送数据大小不同,post容量大

		 -->
			<div class="form-group">
			<!-- form-group 表单的群组 -->
				<label for="">Name</label>
				<input type="text" name="myname" class="form-control" >
			</div>
			<br>	
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="myemail" class="form-control">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
			<!-- btn-block占整行 -->
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=赵帅"; ?>" class=" btn btn-success btn-block">
					赵帅
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=肇鹏"; ?>" class=" btn btn-info btn-block">
					肇鹏
				</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET['name'])): ?>
				<?php echo $_GET['name']; ?>
			<?php endif; ?>
		</h1>
	</div>
</body>
</html>