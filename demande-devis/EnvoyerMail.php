<?php

require "../actions/connexion/database.php";

$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$company=$_POST['company'];
$objet=$_POST['objet'];
$message=$_POST['message'];

$sql = "INSERT INTO `clients`(`nom`, `prenom`, `email`, `phone`,`demande`,`company`, `objet`, `message`) VALUES ('$nom','$prenom','$email','$phone','demande devis','$company','$objet','$message')";
    
if ($conn->query($sql) === TRUE) {
    require "../actions/phpmailer/mail.php";
    $mail->Subject = $objet ;
    $mail->CharSet = "UTF-8";
    $mail->Body = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.$objet.'</title>
        </head>
        <body>
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
        <td align="center">
            <table cellpadding="0" cellspacing="0" border="0" width="600">
                <!-- Title Section -->
                <tr>
                    <td align="center" style="padding: 10px 0; font-size: 24px; font-weight: bold;">
                    '.$objet.'
                    </td>
                </tr>
                <!-- Paragraph Section -->
                <tbody align="left" style="padding: 10px 20px; font-size: 16px;">
                <tr>
                    <td>
                        <p>Bonjour,</p>
                        <p>Vous avez reçu une demande de la part de '.$nom.' '.$prenom.' de l\'entreprise '.$company.'.</p>
                        <p>Email : '.$email.'</p>
                        <p>Téléphone  : '.$phone.'</p>
                        <p>Message  : '.$message.'</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Cordialement,</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
        </tr>
        </table>
        </body>
        </html>
    ';
    $mail->AddAddress("yucefr@gmail.com");

    if(!$mail->Send()) {

    } 
    else {
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
