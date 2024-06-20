<?php
$fp=fopen("test.txt","w");
if($fp){
    fwrite($fp,"書き込みテスト1行目\n");
    fwrite($fp,"書き込みテスト2行目");
    fclose($fp);
    echo '書き込みました';
}else{
    echo 'エラーが起きました。';
}
?>

<?php

$contents="書き込みテスト1行目書き込みテスト2行目";
file_put_contents("test.txt".$contents);
?>