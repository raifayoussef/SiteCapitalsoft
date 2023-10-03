<?php

require "../actions/connexion/database.php";

$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$phone=$_POST['phone'];
// $company=$_POST['company'];
// $objet=$_POST['objet'];
$message=$_POST['message'];

$sql = "INSERT INTO `clients`(`nom`, `prenom`, `email`, `phone`,`demande`,`message`) VALUES ('$nom','$prenom','$email','$phone','contact','$message')";
    
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
