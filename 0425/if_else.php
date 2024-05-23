<?php
echo "現在の時刻";
echo time();
echo "<hr>";

$blog = mktime(15,30,0,2,12,2021);

if ($blog>=time()-86400)
{
    echo "NEW";
}else{
    echo "no";
}

$age = 18;

if($age < 20){
    echo "購入できません";
}
else if($age <= 25){
    echo "年齢確認が必要です";
}
else{
    echo "購入できます";
}
?>