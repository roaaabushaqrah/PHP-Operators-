<?php
echo"<h1 style='color:red;'>Question one </h1>";
$n=1900;
if ($n%400==0) {
    echo" laep year divied by 400";
  } elseif ($n %100==0) {
    echo "it is not leap year";
  } elseif ($n %4==0) {
    echo "it is  leap year dived by 4";
  } else{
      echo"not found";
  }

  echo"<hr>";
  echo"<h1 style='color:red;'>Question two </h1>";

  $temp=50;
  if($temp<=20){
    echo "it is a winter";
  }else{
    echo "it is asummer";
  }

  echo"<hr>";
  echo"<h1 style='color:red;'>Question three </h1>";

  $x=5;
  $y=5;
  if($x===$y){
    echo 3*($y+$x);
  }else{
    echo($x+$y);
  }

  echo"<hr>";
  echo"<h1 style='color:red;'>Question four </h1>";
  $n=300;
  $c=100;
  $b=$n-$c;
  if($n>100){
    echo 3*($b);

  }else {
    echo $b;
  }

  echo"<hr>";
  echo"<h1 style='color:red;'>Question five </h1>";
  $int1=10;
  $int2=10;
  if($int1==30|| $int2==30||$int1+$int2==30){
    echo"true";
  }else{
echo"false";
  }

  echo"<hr>";
  echo"<h1 style='color:red;'>Question six </h1>";

  $var1=89;
  if(abs($var1-100)<=10||abs($var1-200)<=10){
    echo "true";
  }else{
    echo"false";
  }


  echo"<hr>";
  echo"<h1 style='color:red;'>Question seven </h1>";
$pos=35;
if($pos%3==0){
  echo "it is multiple 3";
}elseif($pos%7==0){
  echo "it is multiple 7";
} 
  

echo"<hr>";
  echo"<h1 style='color:red;'>Question eight</h1>";
  $x= " she knew the answer, she would win the prize.";
  $arr = explode(" ",$x);
 
  if("if" === $arr[0])
   {
    echo "unchange";
   } else {  array_unshift($arr, "if");
    echo implode(" ",$arr) ;
      
    
   }


   echo"<hr>";
  echo"<h1 style='color:red;'>Question night</h1>";
  $x= "roaa abu-shaqrah";
  $x1=substr($x,4);
  echo $x1."<br>";
  $x2=substr($x,0);
  echo $x2 ."<br>";
  $x3=substr($x,1);
  echo $x3 ."<br>";


  echo"<hr>";
  echo"<h1 style='color:red;'>Question Ten</h1>";

  
  
function test($x, $y)
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump( test(11,99))."<br>";
var_dump(test(10,300)) ."<br>";
var_dump(test(100,200))."<br>";


echo"<hr>";
echo"<h1 style='color:red;'>Question 11</h1>";

function test1($x, $y)
{
    return ($x >=20 || $x <= 20)|| ($y >= 50 ||$y <= 50);
}
   
var_dump( test1(15,60))."<br>";
var_dump(test1(20,50)) ."<br>";
var_dump(test1(22,50))."<br>";


echo"<hr>";
echo"<h1 style='color:red;'>Question 12</h1>";


$x =array(10,50,60);
 echo max($x);

 echo"<hr>";
echo"<h1 style='color:red;'>Question 13</h1>";


function sum($x, $y){
$a=100;

$val=abs($y-$a);
$val2=abs($x-$a);

if($val == $val2){
  return 0;

} else {
   return "not equal";
}

}  echo sum (95,95) ."<br>";
echo sum (95,8)  ."<br>";

echo"<hr>";
echo"<h1 style='color:red;'>Question 14
</h1>";

function sum1($x,$y){
  return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
} var_dump( sum1(99,5));
var_dump( sum1(5,1));
var_dump( sum1(1,5));


var_dump(sum1(4, 3));


    