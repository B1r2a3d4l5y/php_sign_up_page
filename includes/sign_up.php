<?php
include_once 'dbh.inc.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql =  "INSERT INTO users(first_name, last_name, email, user_name, password)VALUES('$first', '$last', '$email', '$uid', '$pwd');";

mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
?>