<?php

require "../dbBroker.php";
require "../model/prijava.php";

if(isset($_POST['id']) && isset($_POST['predmet']) && isset($_POST['katedra']) && isset($_POST['sala']) && isset($_POST['datum'])) { 

    $obj = new Prijava($_POST['id'] ,$_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum']);
    $status = $obj->update($_POST['id'], $conn);
    
    if($status) {
        echo 'Success'; 
    }
    else {
        echo 'Failed';
    }
}

?>



