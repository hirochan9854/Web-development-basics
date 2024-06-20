
<?php
/*
$page = $_GET['page'];
echo 'リクエストされたページは' . $page . 'です';
*/
?>
<?php
foreach ($_GET as $key =>$value){
    echo 'キー:' .$key .'<br>';
    echo '値:' .$value .'<br><br>';
}
?>