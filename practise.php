<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php practise</title>
</head>
<body>


<?php

/*

echo "<h1>hello world</h1>";

$a= "susant";
$b="barman";

echo $a." ".$b;


$c=10;
$d=13;
$e=$c+$d;
echo "<h1>$e</h1>";
echo "<br>";


echo $c*$d;
echo "<br>";

$f=12.30;
$g="susant";
echo $f.$g;

echo "<br>";
$multi= array("susant","santanu","sayantanu","anu","aliviya","mita","adity","basu","sohali");
print_r($multi);
echo "<br>";

echo "<h1>$multi[3]</h1>";

$frind= array('susant'=>23,'sayantanu'=>21,'arijit'=>21);
print_r($frind);
echo "<br/>";
foreach($frind as $dusman);

echo $dusman."<br>";


#for loop
$i=1;

for($i=1;$i<=100;$i+=5){

    echo $i."<br>";
}



*/

if (!empty($_SERVER['HTTP_CLIENT_IP'])){

$ip_address= $_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     $ip_address=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
    $ip_address=$_SERVER['REMOTE_ADDR'];
}
echo $ip_address;









?>
    
</body>
</html>