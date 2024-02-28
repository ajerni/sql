<?php

require_once 'db.php';

if(isset($_POST['editData'])){
    //read data from form
    $id = $_POST['id'];
    $name = $_POST['name'];

    //update data in database
    $db = new DB();
    $db->editData($id, $name);

    //redirect to index page
    header('Location: index.php');
}