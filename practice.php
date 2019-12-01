<?php
echo 'hello php!';
$a = 3;
$b = 7;
echo $a + $b;       
$array_month = ["1月", "2月", "3月", "４月", "５月", "6月", "7月", "８月", "9月", "10月", "11月", "12月"];
echo $array_month[7];

$hello = "Hello,";
$name = "YAMATO";
$world = "'s world!";
echo $hello . $name . $world;

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar["December"];
$name = YAMATO;
if ($name == YAMATO) {
  echo "私は YAMATO です。";
} else {
  echo "YAMATOではありません。";
}


echo $total;
for ($i = 0; $i <= 1000; $i++) {
  $total += $i;
}
echo $total;
$fluits = array("apple", "orange", "lemon", "banana", "grape");
foreach ($fluits as $furuit) {
  echo "要素は" . $furuit;
}
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++) {
  if($i % 5 == 0) 
    echo $i;
}