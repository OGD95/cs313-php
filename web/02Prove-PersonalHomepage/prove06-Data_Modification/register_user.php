<?php
require '../connection.php';
$db = connectToDB();

$password = $_POST['password'];
$username = $_POST['username'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lasName'];
$shippingAddress = '7210 Oakberry Way';
$created_on = new DateTime();

$query = 'INSERT INTO accounts(password, username, shipping_address, first_name, last_name, created_on)
          VALUES (:password, :username, :shipping_address, :firstName, :lastName, created_on)';

$statement = $db->prepare($query);

$statement->bindValue(':password', $password);
$statement->bindValue(':username', $username);
$statement->bindValue(':shipping_address', $shippingAddress);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':created_on', $created_on);

$statement->execute();

header("Location: ../prove05-PHP_Data_Access/card_listings_view.php");

die();
?>