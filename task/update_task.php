<?php
require_once ('../funs.php');
$con=getDatabaseConnect();
if($con==-1){
    echo "wrong";
    exit;
}
$id      = $_POST['id'];
$content = $_POST['content'];

$sql    = "update `tasks` set task_content='$content' where task_id='$id'";
$result = $con->query($sql);
if ($result) {
    echo 'success';
} else {
    echo 'wrong';
}

$con->close();
?>
