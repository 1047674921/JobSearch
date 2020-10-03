<?php
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


?>