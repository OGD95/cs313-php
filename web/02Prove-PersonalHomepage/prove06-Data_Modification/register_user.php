<?php
require '../connection.php';
$db = connectToDB();

$password = $_POST['password'];
$username = $_POST['username'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lasName'];

$query = 'INSERT INTO accounts(password, username, first_name, last_name)
          VALUES (:password, :username, :firstName, :lastName)';

$statement = $db->prepare($query);

$statement->bindValue(':password', $password);
$statement->bindValue(':username', $username);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);

$statement->execute();

header("Location: ../prove05-PHP_Data_Access/card_listings_view.php");

die();
?>