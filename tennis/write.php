<?php
$fp = fopen("test.txt", "w");
if ($fp) {
  fwrite($fp, "書き込みテスト");
  fclose($fp);
  echo '書き込みました。';
} else {
  echo 'エラーが起きました。';
}

$name = $_POST['name'];
$title = $_POST['title'];
$body = $_POST['body'];
$pass = $_POST['pass'];

if ($name == "" || $body == "") {
  header('Location: bbs.php');
  exit();
}

if (!preg_match("/^[0-9]{4}$/", $pass)) {
  header('Location: bbs.php');
  exit();
}

$bsn = "mysql:host=localhost;dbname=tennis;charset=utf8";
$user = "tennisuser";
$password = "password";

try {
  $db = new PDO($bsn, $user, $password);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $stmt = $db->prepare("INSERT INTO bbs (name, title, body, date, pass) VALUES (:name,:title, :body,now(),:pass )");

  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':title', $title, PDO::PARAM_STR);
  $stmt->bindParam(':body', $body, PDO::PARAM_STR);
  $stmt->bindParam(':pass', $pass, PDO::PARAM_INT);

  $stmt->execute();

  header('Location: bbs.php');
  exit();
} catch (PDOException $e) {
  exit("エラ-" . $e->getMessage());
}
