<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NomClient = $_POST['NomClient'];
    $categorie = $_POST['categorie'];

    // Upload logo image
    $targetDir = "images/clients/";
    $logoFileName = basename($_FILES['Logo']['name']);
    $targetFilePath = $targetDir . $logoFileName;
    move_uploaded_file($_FILES['Logo']['tmp_name'], $targetFilePath);

    // Perform server-side validation here if needed

    require "actions/connexion/database.php";

    $sql = "INSERT INTO `clients`(`NomClient`, `categorie`, `Logo`) VALUES ('$NomClient', '$categorie', '$logoFileName')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
