<?php
session_start();
require '../connection.php';
$db = connectToDB();

$password = $_POST['password'];
$username = $_POST['username'];

echo $password;

$statement = $db->prepare('SELECT password, account_id FROM accounts WHERE username =' . $username);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $hashedPassword = $row['password'];
    echo $hashedPassword;
    $accountId = $row['account_id'];
}
echo $hashedPassword;

// if(password_verify($password, $hashedPassword)){
//     $_SESSION['current_user_id'] = $accountId;
//     $_SESSION['current_user_username'] = $username;
//     header('Location: welcome.php');
//     die();
// }else{
//     header('Location: sign-in.php');
//     die();
// }


?>
