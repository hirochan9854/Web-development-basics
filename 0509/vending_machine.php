<pre>
<?php

function vending_machine($price,$juice){
    if($price >= 120){
        $message = $juice ."を購入しました。<br>";
}else{
    $message = "購入できません。<br>";
}
return $message;
}

echo vending_machine(100,"コーラ");
echo vending_machine(120,"コーラ");
?>
</pre>