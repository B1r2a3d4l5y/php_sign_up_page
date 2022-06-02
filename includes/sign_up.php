<?php
include_once 'dbh.inc.php';

$first = mysqli_real_escape_string( $conn, $_POST['first']) ;
$last = mysqli_real_escape_string($conn, $_POST['last']) ;
$email = mysqli_real_escape_string($conn, $_POST['email']) ; 
$uid = mysqli_real_escape_string($conn, $_POST['uid']) ;
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql =  "INSERT INTO users(first_name, last_name, email, user_name, password)VALUES(?,?, ?, ?, ?);";
// create varible for prepared statments
$stmt = mysqli_stmt_init($conn);
// check first errors
if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
// bind paramaters
} else {
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last , $email, $uid , $pwd   );
    mysqli_stmt_execute($stmt);
}


header("Location: ../index.html?signup=success");
?>