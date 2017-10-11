<?php 
	
	$loggedIn = true;
	$name = ['A','B','C']
	/*if ($loggedIn){
		echo "U r Logged In";
	}else{
		echo "U r NOT Logged In";
	}*/
	#三目运算
	// echo ($loggedIn)? "U r Logged In":"U r NOT Logged In";
	// echo "<hr>";
	// #简写得到 true 或者 false
	// $isRegistered = ($loggedIn == true)? true : false;
	// echo $isRegistered;
	// echo "<hr>";

	#三目嵌套
	// $age = 68;
	// $score = 80;
	// echo "your score is ".($score >70 ?($age < 20 ? "优秀" :'一般'):($age < 20 ? "一般":"差等"));
?>
<!-- html +php 嵌套语法糖 -->
<div>
	<?php if ($loggedIn) : ?>
	<p>Welcome to Beijing</p>
		<?php else: ?>
	<p>Welcome to Shanghai</p>
		<?php endif; ?>
</div>
<!-- 遍历数组 foreach -->
<div>
	<?php foreach($name as $val): ?>
		<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div>
<!-- 遍历数组 for -->
<div>
	<?php for ($i=0; $i < count($name) ; $i++) : ?>
		<p><?php echo $name[$i]; ?></p>
	<?php endfor; ?>
</div>