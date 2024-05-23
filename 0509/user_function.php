<pre>
function get_price($price){
    $price = $price * 1.1;
    return round($price);
}

echo get_price(1000);
<?php

function get_price($price){
    $price = $price * 1.1;
    return round($price);
}


echo get_price(300) . "<br>";

echo get_price(1000) . "<br>";

function default_demo($name="太郎"){
    echo "名前は".$name."です。<br>";
}

default_demo();
default_demo("花子");
?>
</pre>