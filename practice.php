<?php
$a =3;
$b =7;
echo $a + $b;
echo "\n";

$array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
echo "\n";

$hello ="Hello";
$name =" Kana";
$world ="'sWorld!";
echo $hello.$name.$world;
echo "\n";

$tech_boost ='tech';
$tech_boost .=' boost';
echo $tech_boost;
echo "\n";
echo "\n";

$name ="Kana";
switch ($name) {
  case "Kana":
    echo"私はKanaです。";
    break;
  default:
    echo "私はKanaではありません。";
    break;
}
echo "\n";
echo "\n";

$total = 0;
echo $total;
echo "\n";
for ($i =0; $i <= 10000; $i++) {
  $total += $i;
}
  echo $total;
echo "\n";
echo "\n";

$fruits = array("西瓜","柿子","荔枝","李子","梨子");
foreach($fruits as $fruit) {
  echo "要素は" . $fruit;
  echo "\n";
}
echo "\n";

$question = "問4";
echo $question;
echo "\n";

$answer1 ="・1行目のコメントのスラッシュの前に*が入っていない";
echo $answer1;
echo "\n";

$answer2 ="・条件が100以下の数字の間で…ということなので、\n　<　ではなくて、<= にならないといけない";
echo $answer2;
echo "\n";

$answer3 ="・10行目のセミコロンが抜けている";
echo $answer3;
echo "\n";
echo "\n";

$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0 ) {
    echo $i;
    echo "\n";
  }
}

$animals =array("monkey","hippo","elephant","quokka");
foreach ($animals as $animal) {
  echo "要素は". $animal;
  echo "\n";
}
echo "\n";

$grocery_shopping =array("イオンでは" => "アボカを買いました。","イオンでは" => "ゴマ塩を買いました。","関西スーパーでは" => "トマト缶を買いました。","関西スーパーで" => "魚を買いました。","ららぽーとでは" => "きしめんを買いました。",);
foreach ($grocery_shopping as $key => $ingredients) {
  echo "". $key. $ingredients;
  echo "\n";
}

$start = 1;
$end =  50;
for ($i = $start; $i <= $end; $i++) {
  if($i % 3 == 0) {
  echo $i;
  echo "\n";
  }
}

$mum = "absdef";
echo strlen($mum);

?>