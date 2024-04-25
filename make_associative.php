<pre>
<?php

$result = array(
    "japanese" => "80",
    "math" => "75",
    "science" => "90",
);

$result["math"] = "70";
$result["music"] = "85";
var_dump($result);

echo "国語の点数は". $result["japanese"]. "点です。<br>";
echo "数学の点数は". $result["math"]. "点です。<br>";
echo "理科の点数は". $result["science"]. "点です。<br>";
echo "音楽の点数は". $result["music"]. "点です。<br>";
?>
</pre>