<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php practise</title>
</head>
<body>



<form method="POST" action="">
	<input type="text" name="name">
</form>




	<?php



	// echo "my name is susant";
/*
	$susant= "he is a man"."<br>";
	$payel= "she is a female"."<br>";
	echo $susant;
	echo $payel;

	echo "<br>";

	$a=10;
	$b=15;
	$c=$a+$b ."this is sunation";
	echo $c;
	echo "<br>";
	echo $d=$a*$b ."this is multiplication";
	echo "<br>";
	echo $e=$a-$b ."this is subtraction";
	echo "<br>";
	echo $f=$a/$b ."this is devider";
	echo "<br>";echo "<br>";
	echo "<br>";




	$father= array("susant","payel","minu");
	print_r($father);
	echo "<br>";

	echo $father[1];
	echo "<br>";

	$mother=array("men"=>"susant","women"=>"payel","others"=>"minu");
	print_r($mother);
	echo "<br>";
	echo $mother["women"];





	function  susant( $india){

		echo "hello world".$india;
	}




function susant(){

global $a,$b;

	$a="i am ";
	$b="Developer";

}
susant();

echo "$a";
echo "$b";



for($i=100;$i >= 1;$i-=3) {
	echo "<h1> $i </h1>";
	
}



#foreach loop

$father=array("susant","payel","minu");
foreach ($father as $newvar) {
	echo" <h1>$newvar</h1>";
}






$susant=array(12,13,5,9,3,7);


sort($susant);
$length=count($susant);
for ($i=0; $i <$length ; $i++) { 
	echo $susant[$i];
	echo "<br>";
}




define("susant", "wellcome to w3school");

echo susant;
echo "<br>";

define("car", [
"toyta",
"bmw",
"lamborgini",
"farari"


]);

echo car[2];






$a=25;
$b=25;

if($a>$b){
	echo 'the larger numberis '.$a;
}
elseif ($a==$b) {
	echo 'they are equal';
}
else{
	echo 'the larger number is '.$b;
}



#positive number


$a=-5;

if($a>=0){

	echo 'the number is positive';
}
else {
	echo 'the number is negative';
}






#even or odd

$a=6;

if ($a%2<=0){

	echo 'the number is Even';
}
else{

	echo 'the number is odd';
}


$a=10;
$b=10;

if($a!=$b){

echo 'the values are  not same';

}
else{

	echo 'the values are  same';
}



$age=21;

if($age>=18){

	echo 'you are eligable for vote';
}
else{
	echo 'you are not eligable for vote';
}



#logical operator



$user="admin";
$password=1235;

if($user=="admin" && $password== 1234){

	echo 'yor are wellcome';
}
else{
	echo 'plese chack your user name and password';
}




$user="admin";
$password=1235;

if($user=="admin" || $password== 1234){

	echo 'yor are wellcome';
}
else{
	echo 'plese chack your user name and password';
}




$a="";

if(!empty($a)){

	echo 'they have no value';
}
else{
	echo 'they have some value';
	
}
*/

#tarnary operator



$a=40;
$b=50;
 $answer = ($a>$b)  ? "a is gratter"  : "b is grater";

 echo "$answer";















?>

	




</body>
</html>