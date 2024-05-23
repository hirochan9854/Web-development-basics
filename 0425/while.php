<?php
    $i = 1;
    while($i <= 10){
        echo $i . "<br>";
        $i++;
    }


    $i = 0;
    while($i < 3){
        echo "PHP<br>";
        $i ++;
    }


    // p99 check test
// Q1
// breakは処理終了

// Q2
// defaultは、どの条件にも当てはまらない場合に実行

// Q3
echo "<hr>";
echo "forで実行<br>";
for ($i=10;$i>=1;$i--) {
    echo $i . "<br>";
}
echo "<hr>";
echo "whileで実行<br>";
$i=10;
while ($i>=1) {
    echo $i . "<br>";
    $i--;
}

//Q4
$i = 2;
while ($i < 2) {
    echo "whileループ";
    $i++;
}
echo "whileループを抜けました";

//Q5
$total = 10;
switch ($total) {
    case 10:
        echo "10";
        break;
    case 20:
        echo "20";
        break;
    default:
        echo "その他";
}
?>
