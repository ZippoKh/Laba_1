<?php


$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $start = $_GET["start"];
    $stop = $_GET["stop"];

    $date = "SELECT client.* FROM seanse,client WHERE client.ID_Client = seanse.FID_Client and seanse.start = '". $start ."' and seanse.stop = '". $stop ."'";

    foreach ($dbh->query($date) as $row) {
        echo 'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>';
        echo 'Login:' . '&nbsp;' . $row['login'] . '&nbsp;' .'</br>';
        echo 'Pass:' . '&nbsp;' . $row['password'] . '&nbsp;' .'</br>';
        echo 'IP:' . '&nbsp;' . $row['IP'] . '&nbsp;' .'</br>';
        echo 'Balance:' . '&nbsp;' . $row['balance'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}