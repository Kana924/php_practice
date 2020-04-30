<?php
$string ="ABCD";
echo strlen($string);
echo "\n";


$mum ="happybirthdaymummy";
echo strlen($mum);
echo "\n";


$china ="我是〇〇人。";
$new_china = str_replace("〇〇","中国",$china);
echo $new_china;
echo "\n";


$string = "I love Ruby!";
$new_string = str_replace("Ruby","PHP", $string);
echo $new_string;
echo "\n";


$puppy = array("柴犬","チワワ","ノルウェージアン","シベリアンハスキー");
echo count($puppy);
echo "\n";


$food = array("みかん","アボカド","なし","あんず","ぶどう");
echo count($food);
echo "\n";


$food_container =[1,2,3,4,5,6,7,8,9,10];
asort($food_container);
print_r($food_container);
echo "\n";


$food_container =[1,2,3,4,5,6,7,8,9,10];
arsort($food_container);
print_r($food_container);
echo "\n";

$mylife = "I love shrimp!!";
$mylife2 = str_replace("shrimp","squid", $mylife);
echo $mylife2;
echo "\n";
echo "\n";

$mylife = "I like to learn new thing!";
echo strlen($mylife);
echo "\n";
echo "\n";

function area_of_triangle($width,$height){
  $area = $width * $height /2;
  echo "底辺が". $width. "," . "高さが". $height."の三角形の面積は," . $area . "です。";
}
area_of_triangle(10,3);
echo "\n";
echo "\n";


function product($figure){
  $y = $figure * 2;
  echo $y;
}
echo product(5);
echo "\n";
echo "\n";


// 1. 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function product2(){
  $x = 2;
  $y = $x * 2;
  echo $y;
}
product2();
echo "\n";
echo "\n";


// 2. $aと$b を仮引数に持ち$aと$bを足した結果を返す関数を作成してください
function sum($fa,$b){
  $sum = $fa + $b;
  return $sum;
}
echo sum(3,5);
echo "\n";
echo "\n";


    // 関数getCircleAreaを定義してください
    function getCircleArea($radius) {
      return $radius * $radius *3 ;
    }
    
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
   
    $circleArea = getCircleArea(5);
    
    // $circleAreaをechoしてください
    echo $circleArea;
    echo "\n";
    echo "\n";
    
    function som($a,$b) {
      $sum = $a + $b;
      return $sum;
    }
    
    
    $amount = som(4,5);
    echo $amount;
    echo "\n";
    echo "\n";
  
  function double($flexible) {
    $doubled = $flexible * 2;
    return $doubled;
    
  }
  $doubly = double(5);
  echo $doubly;
  echo "\n";
  echo "\n";
  
function add($a,$b) {
  $addition = $a + $b;
  return $addition;
}

$newAdd = add(6,4);
echo $newAdd;
echo "\n";
echo "\n";


function mul($arr) {
  $ret = 1;
  foreach ($arr as $value) {
    $ret *= $value;
  }
  return $ret;
}
echo mul(array(1,3,5,7,9));
echo "\n";
echo "\n";


function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $value){
   if ($value > $max_number) {
     $max_number += $value;
   }
 
 }

 return $max_number;
 }
 echo max_array(array(2,6,9,14,17));
 echo "\n";
 echo "\n";
 ?>
 
 <?php

$code1="<html><body><title>ぷーちゃん</title><p>ぷーちゃんか可愛い</p></body></html>";
$code2=strip_tags($code1,'<p>');
echo $code2;
echo "\n";
echo "\n";

$pufamily = ['ぷーちゃん','ぷーみ','ぷーみん'];
array_push($pufamily,'みゅみゅちゃん','まなちゃん');
print_r($pufamily);
echo "\n";
echo "\n";


$fruits = array(0=>'mandarin',1=>'melon',2=>'grape');
foreach($fruits as $key=>$value) {
  $fruits_key[]= $key;
  $fruits_val[]=$value;
}
array_push($fruits_key,3,4);
array_push($fruits_val,'lemon','peach');
$fruits = array_combine($fruits_key,$fruits_val);
print_r($fruits);
echo "\n";
echo "\n";


$puchan =['pudding'];
$pumi =['pancakes'];
$pumin =['icecream'];
$party_pu = array_merge($puchan,$pumi,$pumin);
print_r($party_pu);
echo "\n";
echo "\n";


$timest= time();
echo $timest;
echo "\n";
echo "\n";

date_default_timezone_set('UTC');
$dayday = date("Y/m/d",$timest);
echo $dayday;
echo "\n";
echo "\n";

?>

<?php

route::get('xxx', 'AAAController@bbb');

?>