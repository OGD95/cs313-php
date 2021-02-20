<?php
session_start();
require '../connection.php';
$db = connectToDB();

$password = $_POST['password'];
$username = $_POST['username'];

$statement = $db->prepare('SELECT password, account_id FROM accounts WHERE username =' . $username);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $hashedPassword = $row['password'];
    $accountId = $row['account_id'];
}

if(password_verify($password, $hashedPassword)){
    $_SESSION['current_user_id'] = $accountId;
    $_SESSION['current_user_username'] = $username;
    header('Location: welcome.php');
    die();
}else{
    header('Location: sign-in.php');
    die();
}


?>
