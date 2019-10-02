<?php

$contactData = fopen("contact_data.csv","r");

while ($data = fgetcsv($contactData)){
    $num = count($data);
    for ($i=0; $i < $num; $i++){
        echo $data[$i]." | ";
    }
    echo "<br><br>";
}

fclose($contactData);
