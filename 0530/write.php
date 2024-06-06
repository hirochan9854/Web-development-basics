<?php

// p175 9-8
$fp = fopen("test.txt", "w");
if ($fp) {

    fwrite($fp, "書き込みテスト");
    fclose($fp);
    echo "書き込み完了";
} else {
    echo "エラーが起きました";
}
