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


if($age>=20){
    echo "お買い上げありがとうございます";
}
else{
    echo "ご購入できません";
}
?>