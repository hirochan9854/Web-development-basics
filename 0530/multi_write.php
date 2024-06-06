<?php
// p176 9-9
$fp = fopen("test.txt", "w");
if ($fp) {
    fwrite($fp, "書き込みテスト一行目\n");
    fwrite($fp, "書き込みテスト二行目\n");
    fclose($fp);
    echo "書き込み完了";
} else {
    echo "エラーが起きました";
}
