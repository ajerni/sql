<?php

require_once('db.php');

$db = new DB();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentUser Details</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Email" name="email">
        <input type="submit" value="Insert" name="insertData">
</body>
</html>