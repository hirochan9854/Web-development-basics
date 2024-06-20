<?php
include('check2_data.php');

$message = '回答は、';

// データを検証する処理
if (isset($_POST['fruit'])) {
	$selected_fruit = $_POST['fruit'];
	if (array_key_exists($selected_fruit, $fruits)) {
		$message .= $fruits[$selected_fruit];
	} else {
		$message .= '不正な値です';
	}
} else {
	$message .= '選択されていません';
}

?>
<html>

<head>
	<meta charset="UTF-8">
	<title>フォーム</title>
</head>

<body>
	<h1>フォーム</h1>
	<?php
	echo $message;
	?>
</body>

</html>