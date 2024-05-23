<?php

for ($i=0; $i <= 31; $i++) {
    echo $i;
    if ($i % 7 == 0) {
        echo "<br>";
    }
    else {
        echo " ";
    }
}