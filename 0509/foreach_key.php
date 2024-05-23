<pre>

        <?php

        $numbers = array(2,4,6);

        foreach($numbers as $key => $value) {
            $numbers[$key] = $value * 10;
        }

        var_dump($numbers);

        #p121 CheckTest

        $foods=array("果物"=>array("イチゴ","りんご","バナナ"),
                     "野菜"=>array("きゅうり","かぼちゃ","じゃがいも"));

    foreach($foods as $key => $value) {
        for($i=0; $i<count($value); $i++) {
            echo $value[$i]."は". $key."です。<br>";
        }
    }
        ?>
    <!-- memo -->

    <?php foreach($numbers as $key => $value): ?>
      <p><?php echo $value ?></p>
    <?php endforeach; ?>
</pre>
