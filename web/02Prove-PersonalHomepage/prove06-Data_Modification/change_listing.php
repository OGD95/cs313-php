<?php
require '../connection.php';
$db = connectToDB();


$athleteFirstName = $_POST['athlete_first_name'];
$athleteLastName = $_POST['athlete_last_name'];
$condition_id = $_POST['radioCondition'];
$sport_id = $_POST['radioSport'];
$manufacturer_id = $_POST['radioManufacturer'];
$description = $_POST['listingDescription'];
$seller = $_POST['seller'];
$listing_id = $_POST['listingId'];

echo $listing_id;

$statement = $db->prepare('SELECT account_id FROM accounts WHERE username=' . '\'' . $_POST['seller'] . '\'');
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $seller = $row['account_id'];
}

$query = 'UPDATE card_listings
          SET account_id=:seller, sport_id=:sport_id, condition_id=:condition_id, manufacturer_id=:manufacturer_id, athlete_first_name=:athleteFirstName, athlete_last_name=:athleteLastName, description=:description
          WHERE listing_id=:listingId';

$statement = $db->prepare($query);

$statement->bindValue(':seller', $seller);
$statement->bindValue(':sport_id', $sport_id);
$statement->bindValue(':condition_id', $condition_id);
$statement->bindValue(':manufacturer_id', $manufacturer_id);
$statement->bindValue(':athleteFirstName', $athleteFirstName);
$statement->bindValue(':athleteLastName', $athleteLastName);
$statement->bindValue(':description', $description);
$statement->bindValue(':listingId', $listing_id);

//$statement->execute();



//header("Location: ../prove05-PHP_Data_Access/listing_view.php?listing_id=$listing_id");

?>