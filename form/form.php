<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_POST=[
        "name" => null,
        "email" => null,
        "subject" => null,
    ];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valid = true;

    if (!isset($_POST['name']) || empty($_POST['name'])) {
        $nameError = "Veuillez renseigner votre nom";
        $valid = false;
    } elseif (!preg_match("/^[a-zA-Zéèùôûêîâç' -]*$/", $_POST['name'])) {
        $nameError = "N'utilisez que des lettres et des espaces, merci";
        $valid = false;
    }

    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $emailError = "Veuillez renseigner votre Email";
        $valid = false;
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $valid = false;
    }

    if (!isset($_POST['subject']) || empty($_POST['subject'])) {
        $subjectError = "Veuillez mettre un message";
        $valid = false;
    }

    if ($valid === true){
        $fileOpen = fopen("contact_data.csv","a"); //le mode "a" permet de se placer à la fin du fichier et ainsi stocker de nouvelles données
        $numberRows = count(file("contact_data.csv"));
        $form_data = [
            "serial number" => $numberRows ,
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "subject" => str_replace("\r\n"," ",$_POST["subject"]), //supprime les sauts à la ligne du message
            "status" => "non-traité",
        ];
        fputcsv($fileOpen, $form_data);
        fclose($fileOpen);
        header("Location:formComplete.php");
    }
}
