<pre>
    <?php

        $friends =  array("はるき","かおる","ひでと");


        for($i=0; $i <3; $i++) {
            echo $friends[$i]."<br>";
        }


        $frinds = array(
            "haruki" =>array("math"=>75,"english"=>80),
            "kaoru" =>array("math"=>75,"english"=>80),
            "hideto" =>array("math"=>75,"english"=>80),
        );
#$frinds ->$key=>$value
foreach($frinds as $key => $value) {
    echo $key."の数学の点数は".$value["math"]."点です。<br>";
    echo $key."の英語の点数は".$value["english"]."点です。<br>";
};

        var_dump($frinds)
    ?>
</pre>