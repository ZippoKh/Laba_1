<?php


$dsn = "mysql:host=localhost; dbname=var8";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $bal = $_GET["balance"];

    $balances = "SELECT client.* FROM client WHERE client.balance = '". $bal ."'";


    foreach ($dbh->query($balances) as $row) {
        echo 'Name:' . '&nbsp;' . $row['name'] . '&nbsp;' .'</br>';
        echo 'Login:' . '&nbsp;' . $row['login'] . '&nbsp;' .'</br>';
        echo 'Pass:' . '&nbsp;' . $row['password'] . '&nbsp;' .'</br>';
        echo 'IP:' . '&nbsp;' . $row['IP'] . '&nbsp;' .'</br>';
        echo 'Balance:' . '&nbsp;' . $row['balance'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}