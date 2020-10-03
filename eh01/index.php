<?php
$str="thank_you_my_friend!";
echo strlen($str)."<br>";
echo strpos($str,"y")."<br>";
echo (strpos($str,"vvv")?"ture<br>":"false<br>");
if(strpos($str,"v")===false) echo "not found<br>";
echo strpos($str,"m",4)."<br>";
//$mystr="Hello,world!";
//echo strpos($mystr,"o",5);
$pos=0;
while(($pos=strpos($str,"n",$pos))!==false){
echo "n出现的位置".$pos."<br>";
$pos++;
}
echo substr_count($str,"y",7,12)."<br>";
echo strpbrk($str,"abcd")."<br>";
$phoneNumber="1111111";
$length=11;

if(strlen($phoneNumber)!=$length||strpbrk($phoneNumber,"qwertyuiopasdfghjklzxcvbnm")){
echo"号码长度达不到11位,或号码中存在字符串<br>";
}
echo str_replace("friend","brothers",$str)."<br>";
$num=0;
echo str_replace("y","yes",$str,$num);
echo "更改了 $num 次<br>";
echo substr_replace($str,"is",0,9)."<br>";//替换0-9个字符
echo substr_replace($str,"is",0,-7)."<br>";//替换前12个字符，-1~-7个字符全部保留（从后往前）
echo substr_replace($str,"is",0,-1)."<br>";//替换前18个字符，保留最后一个字符
echo substr_replace($str,"is",0,0)."<br>";//插入$str[0],结果为isthank_you_my_friend
echo substr_replace($str,"is",3,0)."<br>";//插入$str[3],结果为thaisnk_you_my_friend、
echo strtr($str,"_!","-.")."<br>";//替换字符串中的字符，结果为thank-you-my-friend.
printf("%d*%d=%d<br>",8,8,8*8);//类似C#
$num1=1;
printf("+%d<br>",$num1);//可以在参数前增加+-表示正负数，输出为+1
printf("-%d<br>",$num1);//可以在参数前增加+-表示正负数，输出为-1，（printf("%d<br>",-$num1)/可以在参数前增加+-表示正负数，输出为-1）同义
printf("%03d<br>",$num1);//添加字符0增加字符长度，%03d表示字符串共占3个字符

//右对齐
print"<pre>";
printf("% 15s<br>","hi");
printf("% 15s<br>","Hello");
printf("% 15s<br>","Hello world");
print"<pre>";

//填充不是0的字符在字符前加（'）
printf("%'*5s<br>","hi");
//如果要在右侧填充字符那么参数中的宽度中加（-）号
printf("%'#-5s<br>","hi");
//输出浮点数
printf("%f<br>",123.8888);//默认精度
printf("%.2f<br>",123.8888);//输出两位小数，后面的自动四舍五入
//同时也可以定义字符串的宽度
printf("%12.02f<br>","123.56565");//整数的长度为12个字符串，小数位数为2个字符串

//输出的字符串%s如果使用%.8s这样的精度说明那么就会把字符串截断，%.8s输出8个字符
printf("%.8s<br>","hello world");
//交换转换符的顺序，在文本文件中修改文件转换符号%1$s(You have %2$s messages in your %3$d ,of which %1$d are unread),file_get_contents函数打开文件夹中的文件
$userName="靓仔";
$mb="Inbox";
$tm=36;
$um=4;
//printf(file_get_contents("template.txt"),$tm,$mb,$um);
//储存格式化结果
$messagesCount=sprintf(file_get_contents("template.txt"),$tm,$mb,$um);
echo $messagesCount."<br>";
//sprintf()函数可以把结果字符串保存起来，不输出


//删除空格
//1.trim()删除首尾部空格
//2.ltrim()删除首部空格
//3.rtrim()删除尾部空格
//用法trim($str)
//传递第二个参数，删除指定字符，可以指定范围用..("1..5"表示1-5，"a..z"表示a-z)用法
$Ind="1:哈哈哈.?";
echo trim($Ind,"0..9:.?")."<br>";
//填充字符串函数str_pad()
echo str_pad("拟合",20)."<br>";//字符串长度20，默认在右侧填充,空格
echo str_pad("123",20,"8")."<br>";//字符串长度20，默认在右侧填充，"8"
//第四个参数是填充位置参数，有三个STR_PAD-RIGHT、STR_PAD_LEFT、STR_PAD_BOTH(右，左，两侧)
echo str_pad("123",20,"*",STR_PAD_BOTH)."<br>";//字符串长度20，两侧填充，"*"
//自动换行函数 wordwrap()
$s="111111111111111111111111111111111111111111111111111111111111111111111111111111";
echo wordwrap($s,20,"<br>",true);//每一行限制为20个字符默认是75个字符，换行符<br>，第四个参数把长文本自动分解成固定的参数，长一点的单词可能会被截断默认值是false
echo "<br>";
//格式化字符函数number_format()
echo number_format(1234.999)."<br>";//四舍五入成1235
echo number_format(1234.567,1)."<br>";//保留一位小数，第二个参数设置保留的小数位数
echo number_format(12345.5678,2,","," ")."<br>";//保留两位小数，第三个参数是小数的符号，第四个参数是千位分隔符，可以自己设置小数点和千分位的符号 结果12 345,57
echo number_format(123456.123,2,".","")."<br>";//结果123456.12

//大小写转换
//strtolower()把字符串全部转换为小写
$p="ASDSFESDGSD";
echo strtolower($p)."<br>";
//strtoupper()把字符串全部转换为大写
$o="adfsfrftjyj";
echo strtoupper($o)."<br>";
//lcfirst()把字符串第一个首字母变成小写
$v="Ad play ball";
echo lcfirst($v)."<br>";
//ucwords()把字符串每个单词的首字符变成大写
echo ucwords($v)."<br>";
//数组
$name=array("liang","li","deng","luo","lu");
echo $name[0]."<br>";
echo $name[0+1]."<br>";
$name[1]="liu";
echo $name[1]."<br>";
echo "<br>";
foreach($name as $value){
	echo $value."<br>";
}
//增加索引数组元素
$name[]="pan"."<br>";
echo "<br>";
foreach($name as $value){
	echo $value."<br>";
}
//关联数组以字符串为索引，$book["bookName"]，定义时"author"=>"****",加=>和普通数组直接定义有所区别
$book=array("bookName"=>"中华上下五千年","author"=>"中国人","price"=>29.80,"pubYear"=>"2019","pub"=>"北大出版社","pugeCount"=>"1999999");
foreach($book as $value){
	echo $value."<br>";
}
$author=$book["author"];
echo $author."<br>";
//增加关联数组元素
$book["class"]="A";
//输出所有数组元素print_r();
print_r($name);
echo "<br>";
print_r($book);
echo "<br>";
//如果要把print_n()函数的值存储在一个变量中而不输出，可以使用第二参数true，默认是false
$bookValue=print_r($book,true);
echo $bookValue."<br>";
//切割数组array_slice()
$bookNameAndAuthor=array_slice($book,1,2);
print_r($bookNameAndAuthor)."<br>";
//切割数组array_slice()函数并不会修改原数组的值，对于关联数组的使用方法跟普通数组是一样的，如果并没有设定第三个参数array_slice()函数则会获取第二个参数指定的元素到原数组的最后一个元素
$bookNameAndAuthor=array_slice($book,1);
print_r($bookNameAndAuthor)."<br>";
//统计所有数组所有元素的个数count()
echo count($name)."<br>";
echo "<br>";
//逐个访问数组的元素
//操作数组指针的函数
//currrent()返回指针指向的当前元素的值，指针位置不改变
echo current($name)."<br>";
//key()返回指针指向的当前元素的键$name[0],，指针位置不改变
echo key($name)."<br>";//输出0
//next()将指针移动到下一个元素的位置，返回这个元素的值
echo next($name)."<br>";
//prev()将指针移动到下一个元素的位置，返回这个元素的值
echo prev($name)."<br>";
//end()将指针移动到最后一个元素的位置，返回这个元素的值
echo end($name)."<br>";
//reset()将指针移动到第一个元素的位置，返回这个元素的值
echo reset($name)."<br>";
//当找不到元素时以上函数都会返回false,如果数组中有false值很难确定它是什么

//each()函数逐个访问数组的元素,0或key表示当前元素的键，1或value表示当前元素的值
//$firstBook=each($name);
//echo $firstBook[0].":";
//echo $firstBook[1]."<br>";
//echo $firstBook["key"].":";
//echo $firstBook["value"]."<br>";
//用each()逐个访问数组的元素
/* while($firstBook=each($book)){
	echo $firstBook[0].":";
	echo $firstBook[1]."<br>";
} */
//php7.2中each方法已被废除，官方手册上的解释是它比普通的foreach遍历数组的速度慢，所以用以下foreach方法
function fun_adm_each(&$array){
	$res=array();
	$key=key($array);
	if($key!==null){
		next($array);
		$res[0]=$res["key"]=$key;
		$res[1]=$res["value"]=$array[$key];
		
	}
	else{
		$res=false;
	}
	return $res;
}
//用fun_adm_each()逐个访问数组的元素
while($firstBook=fun_adm_each($book)){
	echo $firstBook[0].":";
	echo $firstBook[1]."<br>";
}
//foreach遍历数组
//遍历值
foreach($book as $value)
{
	echo $value." ";
}
echo "<br>";
//遍历值和键 $key储存了键的值$key=>$value
foreach($book as $key =>$value){
	echo $key.":";
	echo $value." ";
}
echo "<br>";
//foreach遍历修改数组元素的值
foreach($book as $val){
	if($val=="中华上下五千年"){
		$val="中国近代历史";
	}
	echo $val." ";
}
echo "<br>";
print_r($book)."<br>";
//上面的例子表明foreach遍历修改的只是循环内的元素值，实际上原数组并没有改变
//真的要修改数组元素的值，可以引用该数组的值，即&$val
foreach($book as &$val){
	if($val=="中华上下五千年"){
		$val="中国近代历史";
	}
	echo $val." ";
}
unset($val);//删除$val的值，因为最后一次循环结束$val还是保存最后一个元素的引用（值），为了防止以后的代码改变了$val的值，会对$book的值产生影响出现莫名其妙的bug，因此使用完$val必须删除
print_r($book)."<br>";//可以发现$book 的值已经发生改变
echo "<br>";
//多维数组（数组嵌套）很像C#的多维数组像一个矩阵，访问时类同array[0,0]也就是array[0][0],横坐标加纵坐标
$myBook=array(
	array(
		"title"=>"计算机基础",
		"authot"=>"佚名",
		"pubYear"=>"2020"
	),
	array(
		"title"=>"php入门",
		"author"=>"清华大学出版社",
		"pubYear"=>"2018"
	),
	array(
		"title"=>"C#入门",
		"author"=>"清华大学出版社",
		"pubYear"=>"2017"
	),
	array(
		"title"=>"java入门",
		"author"=>"清华大学出版社",
		"pubYear"=>"2019"
	)
);
print_r($myBook)."<br>";
//访问多维数组的元素
//访问其中一个数组
print_r($myBook[0])."<br>";
//访问其中的一个元素
echo  $myBook[0]["title"]."<br>";
//foreachb遍历二维数组
foreach($myBook as $val){
	foreach($val as $key=>$val1){
		echo$key.":";
		echo $val1." ";
	}
	echo "<br>";
}
//给二维数组子关联数组增加元素
$authors=array("Landy","Tom","Michelle","Fen","Milton","Orwell");
$book=array(
	array(
		"title"=>"The Hobbit",
		"authorId"=>2,
		"pubYear"=>1937
	),
	array(
		"title"=>"The Grapes of Wrath",
		"authorId"=>0,
		"pubYear"=>1939
	),
	array(
		"title"=>"A Tale of Two Cities",
		"authorId"=>3,
		"pubYear"=>1859
	),
	array(
		"title"=>"Paradise Lost",
		"authorId"=>1,
		"pubYear"=>1667
	),
);

foreach($book as &$book){
	$book["authorName"]=$authors[$book["authorId"]];
	print"<pre>";
	print_r($book);
	print"<pre>";
}
echo "<br>";
//foreach循环第一遍，遍历出$myBook[0],第二遍遍历出$myBook[0]的所有键和元素

//数组排序
//常用的数组排序函数
//索引数组sort()升序，rsotr()降序，按字母顺序进行升降序,排序后数组的索引重新建立
sort($name);
foreach($name as $key=>$val){
	echo $key.":";
	echo $val." ";
}
echo "<br>";
rsort($name);
foreach($name as $key=>$val){
	echo $key.":";
	echo $val." ";
}
echo "<br>";
//关联数组asort()升序，arsort()降序
asort($book);
foreach($book as $key=>$val){
	echo $key.":";
	echo $val." ";
}
echo"<br>";
arsort($book);
foreach($book as $key=>$val){
	echo $key.":";
	echo $val." ";
}
echo"<br>";
//根据关联数组的键而非数值进行排序ksort()升序，krsort()降序
ksort($book);
foreach($book as $key=>$val){
	echo $key.":";
	echo $val." ";
}
echo"<br>";
krsort($book);
foreach($book as $key=>$val){
	echo $key.":";
	echo $val." ";
}
echo"<br>";
//array_multisort 可以同时对多个数组或多维数组进行排序,同时排序的几个数组元素数量必须一样，否则会出现对比不一致的警告
//array_multisort()对多维数组进行排序,通过每个元素的第一个值进行排序
array_multisort($myBook);
print_r($myBook)."<br>";
//array_multisort共有三个参数第一个参数是数组，第二个参数是排序顺序，第三个参数是排序的类型
array_multisort($name,$book);
print_r($book)."<br>";
print_r($name)."<br>";
//array_multisort 规定排列顺序，可以同时对不同的数组进行升降序排序，可选参数SORT_ASC（升序(A-Z)），SORT_DESC（降序(Z-A)）
array_multisort($name,SORT_DESC,$book,SORT_ASC); 
print_r($book)."<br>";
print_r($name)."<br>";
//array_multisor排序类型
//SORT_REGULAR - 默认。把每一项按常规顺序排列（Standard ASCII，不改变类型）。
//SORT_NUMERIC - 把每一项作为数字来处理。
//SORT_STRING - 把每一项作为字符串来处理。
//SORT_LOCALE_STRING - 把每一项作为字符串来处理，基于当前区域设置（可通过 setlocale() 进行更改）。
//SORT_NATURAL - 把每一项作为字符串来处理，使用类似 natsort() 的自然排序。
//SORT_FLAG_CASE - 可以结合（按位或）SORT_STRING 或 SORT_NATURAL 对字符串进行排序，不区分大小写。
//array_multisort函数根据第一个数组来排序，之后不论多少个数组都是按照第一个数组排列好的顺序进行排列，如果第一个数组有相同的值，那么就根据第二个数组相同值对应的元素进行比较排序,以此类推
//例子
$ar=array(1,1,3,4,5,6);
$ar1=array(8,7,9,10,11,12);
array_multisort($ar,$ar1);
print_r($ar)."<br>";
print_r($ar1)."<br>";
//输出
/*
Array
 (
    [0] => 1
    [1] => 1
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
Array
(
    [0] => 7
    [1] => 8
    [2] => 9
    [3] => 10
    [4] => 11
    [5] => 12 

)*/
//添加和删除数元素
//array_unshift()添加一个或多个元素到数组的开始位置
echo count($name)."<br>";
array_unshift($name,"su","yang","mo");
echo count($name)."<br>";
//array_shift()删除数组的第一个元素,并返回这个元素的值
echo array_shift($name)."<br>";
echo count($name)."<br>";
//array_push在数组的结尾增加一个或多个元素
array_push($name,"qin","zeng");
echo count($name)."<br>";
//array_pop 删除数组的最后一个元素,并返回这个元素的值
echo array_pop($name)."<br>";
echo count($name)."<br>";
//array_splice()删除数组中从某个位开始的元素，或者把元素插入到数组的某个位置
//参文件array_splice函数的使用.php文件
//合并数组
//array_merge(),函数会把一个或多个数组的单元结合起来，一个数组的值会附加在前一个数组的后面，返回一个新的数组，原来的数组不受影响
$hostel=array("511","512","513");
$hostel2=array("514");
print_r(array_merge($hostel,$hostel2))."<br>";
//如果用array_unshift()或是array_push()方法插入数组，这个两个元素会原封不动的把数组插入，从而形成一个多维数组；
$hostel=array("511","512","513");
$hostel2=array("514");
array_push($hostel,$hostel2);
print_r($hostel)."<br>";
//输出
/* Array
(
    [0] => 511
    [1] => 512
    [2] => 513
    [3] => Array
        (
            [0] => 514
        )

) */
//array_merge()数组可以保留关联数组的键，常用来将新的键/值对插入关联数组
$city=array("Name"=>"南宁","Postcode"=>"530000","province"=>"GuangXi");
$district=array("district"=>"WuMing");
print_r(array_merge($city,$district))."<br>";
//字符串键/值对如果在数组中已经存在，原来的元素将被覆盖，用array_merge()函数可以方便的更新关联数组
$city=array("Name"=>"南宁","Postcode"=>"530000","province"=>"GuangXi");
$district=array("Name"=>"LiuZhou","Postcode"=>"545000");
print_r(array_merge($city,$district))."<br>";
//数值键相等的元素不会被覆盖，而是在末尾添加一个新的元素
$city=array(0=>"南宁",1=>"530000",2=>"GuangXi");
$district=array(0=>"LiuZhou",1=>"545000");
print_r(array_merge($city,$district))."<br>";
//array_merge()函数重新生成单个索引数组的索引值
$city=array(13=>"南宁",1=>"530000",15=>"GuangXi");
print_r(array_merge($city))."<br>";
//数组与字符串之间的转换
//explode()函数将字符串转换为数组
$fruit="apple,banana,grape,pear,watermelon";
print_r(explode(",",$fruit))."<br>";//第一个参数是分隔符如果字符串为"",返回false，分隔符如果找不到则返回一个单个元素的数组
$fruit="apple,banana,grape,pear,watermelon";
print_r(explode(",",$fruit,3))."<br>";//第三个参数可以限制返回数组元素的个数，这段代码输出有三个元素的数组，第三个元素会包含元素的全部剩余内容
/* Array
(
    [0] => apple
    [1] => banana
    [2] => grape,pear,watermelon
) */
//如果第三参数为负数
$fruit="apple,banana,grape,pear,watermelon";
print_r(explode(",",$fruit,-3))."<br>";//第三个参数为负数，会忽略后面三个部分的内容
/* Array
(
    [0] => apple
    [1] => banana
) */
//使用implode()函数将数组转换为字符串 注意：implode()函数只能用于索引函数
$class=array("1","2","3","4");
$classString=implode(",",$class);//一个参数是在字符串中要使用的分隔符
echo $classString."<br>";
//把数组转换为变量列表 注意：list()函数只能用于索引函数
$array3=array("1","2","3");
list($m,$n,$g)=$array3;
echo $m." ";
echo $n." ";
echo $g."<br>";
//正则表达式
//Php中常用的正则表达函数 $pattern正则表达式，$subject匹配的目标数据
//preg_match($pattern,$subject) //只会匹配一次（不论这个字符串有多少次是匹配的，这个函数只会匹配第一次匹配的数据） 返回匹配的字符次数
//preg_match_all($patten,$subject,array&$matches)//匹配所有的结果，返回匹配的字符此数
$pattern='/[0-9]/';
$subject='ad3af02434daf54';
$m1=$m2=array();
$t1=preg_match($pattern,$subject,$m1);
$t2=preg_match_all($pattern,$subject,$m2);
show($m1);
echo"<hr/>";
show($m2);
echo"<hr/>";
show($t1.'||'.$t2);
echo"<hr/>";
//$replacement 替换内容
//preg_replace($pattern,$replacement,$subject)替换匹配正则表达式函数的字符,支持数组替换
//preg_filter($pattern,$replacement,$subject)替换匹配正则表达式函数的字符，支持数组替换
//两个函数的区别 preg_replace()函数会把所有包括没有匹配发生替换的数组值输出出来，preg_filter()函数只会把匹配发生替换的函数值输出出来
$pattern1=array("/[0123]/","/[4567]/","/[89]/");
$replacement1=array("测试1" ,"测试2","测试3" );
$subject1=array("ada","f024","da","f54");
//$replacement="测试";
//$pattern='/[0-9]/';
$str1=preg_replace($pattern1,$replacement1,$subject1);
$str2=preg_filter($pattern1,$replacement1,$subject1);
show($str1);
echo "<hr/>";
show($str2);
echo"<hr/>";

//preg_grep($pattern,array$input) 阉割版preg_filter(),函数之用来做匹配功能没有preg_filter()的替换功能，只输出匹配的值
$subject2=array("ada","32df","56fd","daf2r");
$array=preg_grep($pattern,$subject2);
show($array);
echo"<hr/>";
//preg_split($pattern,$subject)类似于explode()函数，它把匹配的字符看成是分隔符，然后把分割后的字符串放入数组中(第二个参数只能是字符串)
$pattern3="/[0-9]/";
$subject3="hhh1ji8gh6fj0y";
$arr=preg_split($pattern3,$subject3);
show($arr);
echo"<hr/>";
//preg_quote($str)把正则表达式的运算符转义,在运算符前面加/号
$strop="qwer{13dad}[1234]";
$strop=preg_quote($strop);
show($strop);
echo "<hr/>";
//正则表达式的运算符./=?[^]$(){}=!<>|:-
//正则表达式函数总结
//都是以preg_开头
//除preg_quote()函数以外第一个参数都是正则表达式
//preg_match函数主要用来做表单验证，比如email
//prge_replace函数主要用来做非法词语过滤，比如过滤不和谐的字符

//正则表达式基本语法 用regexpal来调试正则表达式
//界定符 表示一个正则表达式的开始和结束
//主要'//','##','{}',/[0-9]/,#[0-9]#,{0-9}

//原子 正则表达式的最小的匹配单位
//可见原子
//标点；"_?.等等
//英文字母数字a-z，A-Z，0-9
//汉字、日文、阿拉伯文等其他语言数字
//数理化公式符号
//其他可见字符
//不可见原子
//换行符/n
//回车/r
//制表符/t
//空格
//其他不可见字符
//原子的筛选方式
// | 匹配俩个或者多个分支选择（或 在字符串中寻找D或d，类似于||可以无限加）
// [] 匹配方括号中的任意一个原子//可以省略写为0-9，a-z，A-Z
// [^]匹配除方括号的原子之外的任意字符[^1],除了1以外的字符全都匹配
//不在开头写[12^0],意思改变为匹配1、2、^、0这四个字符

//原子的集合
//. 匹配除换行符之外的任意字符
//\d 匹配任意一个十进制数字，即[0-9]
//\s 匹配任意一个非十进制的数字，即[^0-9]
///S 匹配一个不可见原子，即[\f\n\r\t\v]
//\w 匹配任意一个数字、字母下划线，即[0-9a-zA-Z]
//\W 匹配任意一个非数字、字母或下划线，即[^0-9a-zA-Z]
//量词
//{n} 表示其前面的原子恰好出现n次 [a-zA-z]{3}a-z或A-Z连续出现3次的匹配
//{n,} 表示其前面的原子最少出现n次 [a-zA-z]{3,}a-z或A-Z连续出现3次或3次以上的匹配
//{n,m} 表示其前面的原子最少出现n次，最多出现m次 [a-zA-z]{3,5}a-z或A-Z连续出现3次至5次的匹配 3-5之间
//* 匹配0次、1次或者多次其之前的原子，即{0,} 不论出现几次连续的数字、字母下划线字符都会匹配 /w*
//+ 匹配一次或者多次其之前的原子，即{1,0} /d+ 匹配数字一次到无穷大次匹配
// ? 匹配0次或者1次其之前的原子，即{0,1} _?i 不论_出现或不出现都会匹配i
//边界控制
//^ 匹配字符串开始的位置 ^限制正则表达式开头 比如^d必须为d开头，如果前面有任何字符都不会匹配
//$ 匹配字符串结尾的位置 $限制正则表达式结尾，如：Ds$ ,必须为s结尾，如果后面有任何字符都不会匹配
//模式单元 
//() 匹配其中的整体为一个原子 (d|D)s,把d和D看成一个原子，ds或Ds都会匹配

//修正模式 
$pattren4="/taobao.+123/s";//匹配出现tabao这个单词，还有匹配除换行符之外的任意字符，无穷大次（.+）,123结尾
//会出现taobao两种结果taobao_123，taobao_123123123，有歧义
$subject4="taobao_12312/n23/n3123...''..com";
$matches1=array();
preg_match($pattern3,$subject4,$matches1);
show($matches1);
//贪婪匹配- 匹配结果存在歧义时取其长(默认"/taobao_123123123/")
//懒惰匹配- 匹配结果存在歧义的取其短（"/taobao.+123/U"）
//常见修正模式 可以组合使用如TaoBao.+123/Ui
//U 懒惰匹配
//i 忽略英文字母大小写TaoBao.+123/i
//x 忽略空白 tao bao.+123/Ux
//s 让元字符' . '匹配包括换行符在内所有字符  将字符串视为单行,换行符作为普通字符;

//常见正则表达式
//非空.+
//浮点数匹配两位数字\d+\.\d{2}$
//手机号匹配(中国大陆)1(3,4,5,6,7,8,9)\d{9}或1[3456789]\d{9}
//email地址^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$
//匹配URL地址 顶级域名
//URL匹配：
//1、http是否出现，是http还是https。即^(https?://)?。
//2、是否是二级域名? 即：(\w+\.)+。
//3、顶级域名。即：[a-zA-Z]+。
//故：正则表达式：^(https?://)?(\w+\.)+[a-zA-Z]+$
function show($var=null){
	if(empty($var)){
		echo "null";
	}
	elseif (is_array($var)||is_object($var)) {
		echo "<pre>";
		print_r($var);
		echo "<pre>";
	}
	else {
		echo $var;
	}
}
?>