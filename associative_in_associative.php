<pre>
    <?php
    $result = array(
        "math" => "75",
        "english" => "80",
    );

    $friends =array("haruki"=>$result);
    var_dump($friends);

    $friends["kaoru"] = array("math"=>75,"english"=>80);
    var_dump($friends);

    echo "はるきの数学の点数は". $friends["haruki"]["math"]. "点です。<br>";
    echo "かおるの英語の点数は". $friends["kaoru"]["english"]. "点です。<br>";
    ?>


</pre>