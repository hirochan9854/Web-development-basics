<?php
$msg = null;
$alert = null;

if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
    $old_name = $_FILES['image']['tmp_name'];
    $new_name = date("YmdHis");
    $new_name .= mt_rand();
    switch (exif_imagetype($old_name)) {
        case IMAGETYPE_JPEG:
            $new_name .= '.jpg';
            break;
        case IMAGETYPE_GIF:
            $new_name .= '.gif';
            break;
        case IMAGETYPE_PNG:
            $new_name .= '.png';
            break;
        default:
            header('Location: upload.php');
            exit();
    }
    if (move_uploaded_file($old_name, './album/' . $new_name) === true) {
        $msg = 'アップロード完了';
    } else {
        $alert = 'アップロード失敗';
    }
} else {
    $alert = 'ファイルを選択してください';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>画像アップロード</h1>
    
    <?php if ($msg) {
        echo '<div class="alert alert-' . $alert . '" role="alert">' . $msg . '</div>';
    } ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">

</body>

</html>