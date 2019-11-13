<table border="1">
  <tr>
    <?php
    $y = 2019;
    $m = 10;
    $d = 1;
    while($d <=31){
        echo "<td>$d<td>";
        $d++;
    }

    ?>
  </tr>
</table>
<!-- echo "${y}年${m}月のカレンダー"; -->

<?php

//練習問題
echo '<br>' .'<br>' . '問題1' . '<br>' . '<br>';
$i = 100;
while($i>0){
    echo $i . '<br>';
    $i--;
}

echo '<br>' .'<br>' . '問題2' . '<br>' . '<br>';
for($i=1;$i<10;$i++){
    echo $i * 3 . ' <br>';
}

echo '<br>' .'<br>' . '問題3' . '<br>' . '<br>';
for($i=1; $i<=100; $i++){
    if($i%3==0){
        if($i%5==0){
            echo $i . ' FizzBuzz' . '<br>';
        }else{
            echo $i . ' Fizz' . '<br>';
        }
    }else if($i%5==0){
        echo $i . ' Buzz' . '<br>';
    }else{
        echo $i . '<br>';
    }
}

echo '<br>' .'<br>' . '問題4' . '<br>' . '<br>';
for($i=1;$i<=100;$i++){
    if($i%10==0){
        echo $i . ' <br>';
    }else{
        echo $i . ' ';
    }
}


echo '<br>' .'<br>' . '問題5' . '<br>' . '<br>';
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
$count = 0;
foreach($alpha as $value){
    if($value=='A'){
        $count++;
    }
}
echo $count;

echo '<br>' .'<br>' . '問題6' . '<br>' . '<br>';
$english = 70; //英語の点数
$math = 70; //数学の点数
$total = $english + $math;
if($english >= 60 && $math >= 60 && $total >= 140){
    echo '合格';
}else{
    echo '残念';
}

echo '<br>' .'<br>' . '問題7' . '<br>' . '<br>';
for($i=1;$i<10;$i++){
    for($j=1;$j<10;$j++){
        echo $i * $j . ' ';
    }
    echo '<br>';
}

echo '<br>' .'<br>' . '問題8' . '<br>' . '<br>';
for ($i=2;$i<=100;$i++){
    $devided = false;
    for($j=2;$j<$i;$j++){
        if($i % $j == 0){
            $devided = true;
            continue;
        }
    }
    if(!$devided){
        echo $i . ' ';
    }
}



////////////////////////////////

echo 'Hello' . ' World!';
echo '<br>';
echo 5 * 3 . '<br>';

$var = '変数の値を出力します';
echo $var;
echo '<br>';
$var = '変数を再代入';
echo $var;
echo '<br>';

$var = 'Gemini';
$var .= 'Man';
echo $var;
echo '<br>';

$var = 5;
echo $var . '<br>';
$var = '文字に上書き';
echo $var;
echo '<br>';

$color = 'red';
echo 'My ${color} car was stolen.';
echo '<br>';
echo "My ${color} car was stolen.";
echo '<br>';

$var = ['key1' =>'  value3', 'key2' =>'value2', 'key3' =>'value3'];
echo $var['key2'];

$var = 11;
if ($var > 10){
    echo ' 10よりでかい';
}
echo '<br>';

$var = 27;
if ($var>=20 && $var <30){
    echo '20代';
}else{
    echo 'not 20代';
}
echo '<br>';

$var ='B';
switch ($var){
    case 'A':
        echo 'Aだよ';
        break;
    case 'B':
    case 'C':
    echo'B or C';
        break;
    default:
        echo '何かわかんないよ';
        break;
}
echo '<br>' . '練習12-7で止める' . '<br>';
$var = 0;
while($var < 10){
    echo $var . '<br>';
    $var++;
    if($var == 8){
        break;
    }
}

echo '<br>' . '練習12-3の倍数スキップ' . '<br>';
$var = 0;
while($var < 10){
    if($var % 3 == 0){
        $var++;
        continue;
    }
    echo $var . '<br>';
    $var++;
}

echo '<br>' . '練習13' . '<br>';
for ($i =0; $i<10; $i++){
    echo $i . '<br>';
}

echo '<br>' . '練習14' . '<br>';
$fruits = ['りんご', 'みかん', 'バナナ'];
foreach($fruits as $fruit){
    echo $fruit . '<br>';
}

echo '<br>' . '練習15-2' . '<br>';
$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'バナナ'];
foreach($fruits as $key => $value){
    echo "${value}は英語で${key}です。" . '<br>';
}


//練習
echo '<br>' . 'カミーユ問題' . '<br>';
$array = ['りんご',  'みかん',  'ばなな', 'マンゴー', 'ドリアン', 'いちご', 'さくらんぼ'];
$count=1;
foreach($array as $item){
    echo $item . ' ';
    if($count%3==0){
        echo '<br>';
    }
    $count++;
}


?>