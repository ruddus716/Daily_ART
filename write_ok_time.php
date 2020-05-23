<?php
include 'db.php';
session_start();

$title = $_POST["title"];
$body = $_POST["body"];
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO forum_time( title, body, date ) VALUES ( '$title', '$body', '$date')";
$result = mysqli_query($conn, $sql);
echo ("<meta http-equiv='Refresh' content='1; URL=index_time.php'>");

?>