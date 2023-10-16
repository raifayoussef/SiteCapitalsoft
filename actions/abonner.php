<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require "../actions/connexion/database.php";

    $mail = $_POST['EMAIL'];

    $sql = "INSERT INTO newslater (email) VALUES ('$mail')";

    if ($conn->query($sql) === TRUE) {
        echo "success"; // Return "success" upon successful insertion
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Return an error message on failure
    }
} else {
    echo "Invalid request"; // Return an error message for invalid requests
}
?>
