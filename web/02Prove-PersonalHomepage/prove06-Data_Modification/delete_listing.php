<?php
require '../connection.php';
$db = connectToDB();

$listing_id = $_GET['listing_id'];

echo $listing_id;

$query = 'DELETE FROM card_listings WHERE listing_id=:listing_id';

$statement = $db->prepare($query);

$statement->bindValue(':listing_id', $listing_id);

$statement->execute();
?>