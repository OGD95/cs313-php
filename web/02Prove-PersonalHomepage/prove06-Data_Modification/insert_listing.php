<?php
// require '../connection.php';
// $db = connectToDB();



// $athleteFirstName = $_POST['athlete_first_name'];
// $athleteLastName = $_POST['athlete_last_name'];
// $condition_id = $_POST['radioCondition'];
// $sport_id = $_POST['radioSport'];
// $manufacturer_id = $_POST['radioManufacturer'];
// $description = $_POST['listingDescription'];

// $statement = $db->prepare('SELECT account_id FROM accounts WHERE username=' . $_POST['seller']);
// $statement->execute();

// while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
//     $seller = $row['account_id'];
// }

// $query = 'INSERT INTO card_listings(account_id, sport_id, condition_id, manufacturer_id, athlete_first_name, athlete_last_name, description) 
//           VALUES (:account_id, :sport_id, :condition_id, :manufacturer_id, :athlete_first_name, :athlete_last_name, :description)';

// $statement = $db->prepare($query);

// $statement->bindValue(':account_id', $seller);
// $statement->bindValue(':sport_id', $sport_id);
// $statement->bindValue(':condition_id', $condition_id);
// $statement->bindValue(':manufacturer_id', $manufacturer_id);
// $statement->bindValue(':athlete_first_name', $athleteFirstName);
// $statement->bindValue(':athlete_last_name', $athleteLastName);
// $statement->bindValue(':description', $description);

// $statement->execute();

// $listing_id = $db->lastInsertId("listing_id_seq");

header("../prove05-PHP_Data_Access/listing_view.php?listing_id=2");

die();
?>