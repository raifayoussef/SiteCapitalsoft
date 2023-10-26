<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les données du formulaire
    $name = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Gérez le fichier CV
    $cvDirectory = 'CVs/';
    $cvFileName = basename($_FILES['CV']['name']);
    $cvFilePath = $cvDirectory . $cvFileName;

    if (move_uploaded_file($_FILES['CV']['tmp_name'], $cvFilePath)) {

        require "connexion/database.php";

        // Insérez les données dans la table
        $sql = "INSERT INTO carriere (name, prenom, email, message, cv_filename, phone) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $prenom, $email, $message, $cvFileName, $phone);

        if ($stmt->execute()) {
            echo "Les données ont été enregistrées avec succès.";
            
            // Include PHPMailer
            require("phpmailer/mail.php");

            $mail->Subject = "CV de $name $prenom"; // Change the subject to include name and surname
            $mail->Body = "Nouveau CV soumis par $name $prenom"; // Change the email body to include name and surname

            // Attach the CV file
            $mail->addAttachment($cvFilePath);

            $mail->AddAddress("yucefr@gmail.com"); // Change the recipient's email address

            if (!$mail->Send()) {
                $message = "Erreur d'envoi du courrier : " . $mail->ErrorInfo;
                $alertType = "danger";
            } else {
                $message = "Email envoyé avec succès !";
                $alertType = "success";
            }
        } else {
            echo "Une erreur est survenue lors de l'enregistrement des données : " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Une erreur est survenue lors du téléchargement du fichier CV.";
    }
}
