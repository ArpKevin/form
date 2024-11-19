<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //kötelező mezők ellenőrzése
    $name = htmlspecialchars(trim(ucwords(strtolower($_POST['nev']))));
    var_dump($name);

    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    var_dump($email);

    $nap = filter_var($_POST['nap'], FILTER_VALIDATE_INT);
    var_dump($nap);

    if(isset($name) && isset($email) && isset($nap)){
        echo "<h2>Beküldött adatok:</h2>";
        echo "<p>Név: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Nap: $nap</p>";
    }
    else{
        echo "Hiba";
    }
}

?>