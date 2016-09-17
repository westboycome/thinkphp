<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	
	
	
	
	
	
	<?php if(is_array($arrlist)): $i = 0; $__LIST__ = array_slice($arrlist,1,2,true);if( count($__LIST__)==0 ) : echo "数组为空" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data['name']); ?>-------<?php echo ($data['age']); ?><br/><?php endforeach; endif; else: echo "数组为空" ;endif; ?>
	<!-- <?php if(is_array($arrlist)): foreach($arrlist as $key=>$data): echo ($data['name']); ?>-------<?php echo ($data['age']); ?><br/><?php endforeach; endif; ?> -->
	<!-- eq= neq!= gt> egt>= lt< elt<= heq=== nheq!==  -->
	<!-- <?php $__FOR_START_27947__=1;$__FOR_END_27947__=10;for($k=$__FOR_START_27947__;$k <= $__FOR_END_27947__;$k+=1){ echo ($k); ?><br/><?php } ?> -->
	
	<!-- <?php if($num > 10): ?>num 大于10
	<?php elseif($num < 10): ?>num xiaoyu 10
	<?php else: ?>num dengyu 0<?php endif; ?> -->
	
	<!-- <?php switch($name): case "laoshi": ?>laoshi<?php break;?>
		<?php case "me": ?>me<?php break; endswitch;?> -->
	
	<!-- 判断语句 
	<?php if(($naum) == ""): ?>num!=23<?php endif; ?>
	<?php if(($naum) == ""): ?>num!=23 <?php else: ?> num=23<?php endif; ?>
	
	<?php if(($num) == "23"): ?>num=23 <?php else: ?> num!=23<?php endif; ?>
	-->
	
	<!--in notin  between notbetween
	<?php $_RANGE_VAR_=explode(',',"1,30");if($num>= $_RANGE_VAR_[0] && $num<= $_RANGE_VAR_[1]):?>you<?php else: ?>eiyou<?php endif; ?>
	<?php if(in_array(($num), explode(',',""))): ?>you<?php else: ?>meiyou<?php endif; ?>
	-->
	
	
	
	
	
	
	
	
	
	

</body>
</html>