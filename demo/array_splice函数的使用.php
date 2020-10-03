<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_splice函数的使用</title>
	<style type="text/css">
		h2,pre{margin:1px}
		table{margin:0;border-collapse:collapse;width:100%;}
		th{text-align:left}
		th,td{text-align:left;padding:4px;vertical-align:top;border:1px solid gray;}
	</style>
</head>
<body>
    <h1>用array_splice()函数在中间位置插入或删除元素</h1>
	<?php
		$headingStart='<tr><th colspan="4"><h2>';
		$headingEnd='</h2></th></tr>';
		$rowStart='<tr><td><pre>';
		$nextCell='</pre></td><td><pre>';
		$rowEnd='</pre></td></tr>';
		echo '<table cellpadding="0",cellspacing="0">
		<tr>
		<th>Original array</th>
		<th>Removed</th>
		<th>Added</th>
		<th>New array</th>
		</tr>
		';
		//第一个例子
		echo"{$headingStart}1.增加两个元素到中间位置{$headingEnd}";
		$authors=array("LiangShan","LuoHui","PanZhengXue");
		$arrayToAdd=array("DiDi","Niao");
		echo $rowStart;
		print_r($authors);
		echo $nextCell;
		print_r(array_splice($authors,2,0,$arrayToAdd));//没有返回值,从authors[2]插入两个元素，原本的authors[2]移动到最后一个元素，第三个参数0表示需要删除的元素个数为0
		echo $nextCell;
		print_r($arrayToAdd);
		echo $nextCell;
		print_r($authors);
		echo $rowEnd;
		//第二个例子
		echo "{$headingStart}2.替换两个元素{$headingEnd}";
		$authors=array("LiangShan","LuoHui","PanZhengXue");
		$arrayToAdd=array("SuQiuRong");
		echo $rowStart;
		print_r($authors);
		echo $nextCell;
		print_r(array_splice($authors,1,2,$arrayToAdd));//返回被删除的两个元素，1表示从authors[1]开始，2表示需要删除的元素的个数为2
		echo $nextCell;
		print_r($arrayToAdd);
		echo $nextCell;
		print_r($authors);
		echo $rowEnd;
		//第三个例子
		echo"{$headingStart}3.删除最后两个元素{$headingEnd}";
		$authors=array("LiangShan","SuQiuRong","LuoHui","PanZhengXue");
		echo $rowStart;
		print_r($authors);
		echo $nextCell;
		print_r(array_splice($authors,2));//返回被删除的两个元素，没有第三个参数表示从authors[2]开始往后全部删除
		echo $nextCell;
		echo "Nothing";
		echo $nextCell;
		print_r($authors);
		echo $rowEnd;
		//第四个例子
		echo "{$headingStart}4.插入一个字符元素字符串{$headingEnd}";
		$authors=array("LiangShan","LuoHui","PanZhengXue");
		echo $rowStart;
		print_r($authors);
		echo $nextCell;
		print_r(array_splice($authors,1,0,"SuQiuRong"));
		echo $nextCell;
		echo "SuQiuRong";
		echo $nextCell;
		print_r($authors);
		echo $rowEnd;
		
		echo '</table>';
		//array_splice()函数不可以用于关联数组，只可以用于索引数组
	?>
	
</body>
</html>