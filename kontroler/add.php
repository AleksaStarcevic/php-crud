<?php

include("../broker.php");
session_start();

if (isset($_POST['add'])) {
    $naslov = $_POST['naslov'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $pregledi = $_POST['pregledi'];
    $id =  $_SESSION['user_id'];



    $query = "INSERT INTO oglas(naslov,cena,opis,pregledi,userID) VALUES('$naslov', '$cena','$opis','$pregledi','$id')";
    $result = $conn->query($query);

    if (!$result) {
        die("Upit nije izvrsen!");
    }



    header("Location: ../home.php");
    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
}
