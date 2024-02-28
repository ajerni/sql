<?php

require_once 'db.php';

if(isset($_POST['insertData'])){
    //read data from form
    $name = $_POST['name'];
    $email = $_POST['email'];

    //insert data into database
    $db = new DB();
    $db->insertData($name, $email);

    //redirect to index page
    header('Location: index.php');
}