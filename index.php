<?php

//Task 1

/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " Lab2 php ";

//// Don't change the line below
echo "<br>Your order is:$very_bad_unclear_name.";


//Task 2
$x = 5;
echo $x . "<br>";
$y = 10;
echo $y;
$z = 15.5;
echo (11+1) . "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

//Task 11
$num_languages = 4;
$months=11;
$days = $months*16;
$days_per_language=$days/$num_languages;
echo "<br>" . $days_per_language;

//Task 12
echo 8**2;

//Task 13
$my_num=24;
$answer=$my_num;
$answer+=2;
$answer*=2;
$answer-=2;
$answer/=2;
$answer-=$my_num;
echo $answer;

//Task 14
$a=10;
$b=3;
echo "<br>" . ($a%$b);
if ($a%$b==0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a%$b);

echo $st=pow(2,10) . "<br>";

echo sqrt(245) . "<br>";

$mass=array(4,2,5,19,13,0,10);
$SUM=0;
foreach($mass as $item)
    $SUM+=$item**2;
echo sqrt($SUM) . "<br>";

echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";

$mass2=array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));

$mass3=array(
    4,-2,5,10,-130,0,10
);
$minN=$mass3[0];$maxN=$mass3[0];
foreach($mass3 as $num)
    echo"$num ";
if ($minN>$num)
    $minN=$num;
if ($maxN<$num)
    $maxN=$num;
echo"<br>maximum - $maxN , minimum - $minN";


echo "<br>" . rand(1,100) . "<br>";

$mass4=array();
for($i=0;$i<10;$i++) {
    array_push($mass4, rand(1, 50));
}

for($i=0;$i<10;$i++) {
    echo "$mass4[$i] ";
}



for($i=0; $i < 5;$i++)
{
    $a=rand(-10,10);
    $b=rand(-100,100);
    echo "<br>a-b=$a-$b=|" . ($a-$b) . "|=" . abs($a-$b);
}


$mass5=array();
for($i=0;$i<10;$i++) {
    array_push($mass5, rand(-5, 5));
}
foreach ($mass5 as &$item) {
    echo $item . " ";
    if($item < 0)
        $item=abs($item);
}



$numb=rand(1,30);
echo "<br>Number is  - $numb<br>";
$Divisors=array();
for($i=1;$i <= $numb;$i++)
{
    if($numb % $i==0){
        array_push($Divisors, $i);
        echo $i . " ";
    }
}


$mass6=array( 1,2,3,4,5,6,7,8,9,10 );
$cntr=0;
$SuM=0;
while ($SuM < 10){
    $SuM+=$mass6[$cntr];
    $cntr ++;
}


//Task 15
function printStringReturnNumber()
{
    echo "<br>Web2 php";
    return 10;
}
echo "<br>" . $my_num=printStringReturnNumber();


//Task 16
function increaseEnthusiasm($s="null")
{
    return $s . "!";
}
echo "<br>" . increaseEnthusiasm("Love Web");


function repeatThreeTimes($s="null")
{
    return $s . $s . $s;
}
echo "<br>" . repeatThreeTimes(" Web! ");

echo "<br>" . increaseEnthusiasm(repeatThreeTimes("Web lab2 "));

function cut($s="null", $charsFromStart=10)
{
    return substr($s,0,$charsFromStart);
}
//echo "<br>" . cut(increaseEnthusiasm(repeatThreeTimes("Web lab2 ")), 5);

function ArrayTask($arr,$endIter,$nowIter=0)
{
    echo $arr[$nowIter] . " ";
    if ($nowIter < $endIter){
        ArrayTask($arr, $endIter, ++$nowIter);
    }else
        return;
}

function NumSumm($num,$sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        NumSumm($sum);
    else return;
}
//echo NumSumm(55);












