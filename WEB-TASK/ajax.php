<?php
include "config.php";
if (isset($_POST['key']) == "saveData")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO profile SET name='$name',email='$email',contact='$contact', password='$password', age='$age',gender ='$gender'";
    $result = $connection->query($query);
    if ($result) {
        echo "status^saved";
    }
}