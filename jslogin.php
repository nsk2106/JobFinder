<?php 
session_start();
require_once('server.php');



$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM userstest WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);


if($result) {
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0) {
        $_SESSION['userlogin'] = $user;
        echo '1';
    }
    else {
        echo 'Invalid Email or Password';
    }
}
else {
    echo 'There were errors while connecting to database';
}



 ?>