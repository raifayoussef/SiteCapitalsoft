<?php

require_once "actions/connexion/database.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientId = $_POST['id'];
    $isFavorite = $_POST['favorite'];

    $sql = "UPDATE `clients` SET `favoris` = '$isFavorite' WHERE `idC` = '$clientId'";

    if ($conn->query($sql) === TRUE) {
        echo "Favorite status updated successfully";
    } else {
        echo "Error updating favorite status: " . $conn->error;
    }
}
?>
