<?php
require '../connection.php';
$db = connectToDB();

$password = $_POST['password'];
$username = $_POST['username'];

$password = password_hash($password, PASSWORD_DEFAULT);

$query = 'INSERT INTO team_activity_accounts(password, username)
          VALUES (:password, :username)';

$statement = $db->prepare($query);

$statement->bindValue(':password', $password);
$statement->bindValue(':username', $username);

$statement->execute();

header("Location: sign-in.php");

die();
?>