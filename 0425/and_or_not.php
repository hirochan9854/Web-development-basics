<pre>
    <?php
    $true = true;
    $false = false;

    $a = $true && $true;
    $b = $true && $false;
    $c = $true && $true && $true;
    $d = $true && $false && $false;
    $e = $true && ($true && $false);

    var_dump($a, $b, $c, $d, $e);

    echo "<br>/";

    $a = $true || $true;
    $b = $true || $false;
    $c = $true || $true || $true;
    $d = $true || $false || $false;
    $e = $true || ($true || $false);
    $f = $false || $false;

    var_dump($a, $b, $c, $d, $e, $f);
    echo "<br>/";

    $a = !$true;
    $b = !$false;
    $c = !$true && !$true;
    $d = !($true && $true);

    var_dump($a, $b, $c, $d, $e, $f);
    ?>
</pre>