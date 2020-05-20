<?php require "download/bal.php"; ?>
<?php require "download/cli.php"; ?>
<?php require "download/start.php"; ?>
<?php require "download/stop.php"; ?>
<?php require 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="client.php">
    <p><b>статистику работы в сети выбранного клиента?</b></p>
    <select name="client" id="">
        <?php
        foreach ($out as $client) {
            echo "<option value=\"$client\">$client</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>

<form action="static.php">
    <p><b>статистику работы в сети за указанный промежуток времени</b></p>
    <select name="start" id="">
        <?php
        foreach ($outs as $start) {
            echo "<option value=\"$start\">$start</option>";
        }
        ?>
    </select>
    <select name="stop" id="">
        <?php
        foreach ($outstop as $stop) {
            echo "<option value=\"$stop\">$stop</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>

<form action="balance.php">
    <p><b>вывести список клиентов с отрицательным балансом счета</b></p>
    <select name="balance" id="">
        <?php
        foreach ($balance as $bal) {
            echo "<option value=\"$bal\">$bal</option>";
        }
        ?>
    </select>
    <p><input type="submit" value="Выбрать"></p>
</form>


<form action="add/add.php">
    <p><b>Добавление бд</b></p>
    <table>
        <tr>
            <th>ID_Client</th>
            <th>Name</th>
            <th>Login</th>
            <th>Pass</th>
            <th>Ip</th>
            <th>balance</th>
        </tr>
        <tr>
            <td><input type="number" name="id" required="required"></td>
            <td><input type="text" name="name" required="required"></td>
            <td><input type="text" name="login" required="required"></td>
            <td><input type="text" name="pass" required="required"></td>
            <td><input type="text" name="ip" required="required"></td>
            <td><input type="number" name="balance" required="required"></td>
        </tr>
    </table>
    <p><input type="submit" value="Добавить"></p>
</form>

</body>
</html>