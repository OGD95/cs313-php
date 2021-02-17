<?php
session_start();
require '../connection.php';
$db = connectToDB();

$password = $_POST['password'];
$username = $_POST['username'];

$statement = $db->prepare('SELECT password, accountid FROM team_activity_accounts WHERE username =' . '\'' . $username . '\'');
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $hashedPassword = $row['password'];
    $accountId = $row['accountid'];
}

if(password_verify($password, $hashedPassword)){
    $_SESSION['current_user_id'] = $accountId;
    header('Location: welcome.php');
}else{
    header('Location: sign-in.php');
}


?>
