<?php

require "../actions/connexion/database.php";


$nom = mysqli_real_escape_string($conn, $_POST['name']);
$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$raison_social = mysqli_real_escape_string($conn, $_POST['raison_social']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO `abonnement`(`nom`, `prenom`,`raison_social`, `email`, `phone`,`demande`,`message`) VALUES ('$nom','$prenom','$raison_social','$email','$phone','contact','$message')";
    
if ($conn->query($sql) === TRUE) {
    $email = "capitalsoft@capitalsoft.ma";
    require("../actions/phpmailer/mail.php");

    $mail->Subject = "Site CapitalSoft";
    $mail->Body = '<html>
    <head>
        <style>
            /* Reset some default styles */
            body, table, tr, td, th {
                margin: 0;
                padding: 0;
                border: 0;
            }
            
            /* Set a background color */
            body {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
                font-size: 14px;
            }
            
            /* Header style */
            .header {
                background-color: #0073e6;
                color: #ffffff;
                text-align: center;
                padding: 20px;
            }
            
            /* Logo style */
            .logo {
                max-width: 100px;
                height: auto;
                margin: 0 auto;
                display: block;
            }
            
            /* Content style */
            .content {
                background-color: #ffffff;
                padding: 20px;
            }
            
            /* Contact info style */
            .contact-info {
                font-size: 16px;
                color: #333;
            }
            .logo {
                max-width: 100px;
                height: auto;
                margin: 0 auto;
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <h2>Contact Information</h2>
            <p class="contact-info"><strong>Nom et Prénom:</strong> ' . $nom . ' ' . $prenom . '</p>
            <p class="contact-info"><strong>Raison Sociale:</strong> ' . $raison_social . '</p>
            <p class="contact-info"><strong>Email:</strong> ' . $email . '</p>
            <p class="contact-info"><strong>Téléphone:</strong> ' . $phone . '</p>
            <p class="contact-info"><strong>Message:</strong> ' . $message . '</p>
        </div>
    </body>
    </html>';
    $mail->AddAddress($email);

    if (!$mail->Send()) {
        $message = "Mailer Error: " . $mail->ErrorInfo;
        $alertType = "danger";
    } else {
        $message = "Email sent successfully!";
        $alertType = "success";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
