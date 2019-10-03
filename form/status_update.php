<?php

$contactData = fopen("contact_data.csv","r");
while ($data = fgetcsv($contactData)){
    $contactArray[] = [
        "id" => $data[0],
        "name" => $data[1],
        "email" => $data[2],
        "subject" => $data[3],
        "status" => $data[4],
    ];
}
fclose($contactData);

function changeStatus($id, array $contactDataArray)
{
    $contactDataArray[$id]["status"] = $contactDataArray[$id]["status"]==="traité"?"non-traité":"traité";
    $contactData = fopen("contact_data.csv","w");
    foreach ($contactDataArray as $contact){
        fputcsv($contactData, $contact);
    }
    fclose($contactData);
}

if (isset($_GET["idContact"])) {
    changeStatus($_GET["idContact"],$contactArray);
    header("Location:contact.php");
}
