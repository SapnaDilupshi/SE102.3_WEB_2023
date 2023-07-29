<?php

$conn = mysqli_connect("localhost", "root", "", "University");

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sql = "INSERT INTO students(id,name,email,password) VALUES('". $id ."','". $name ."','". $email ."','". $password ."')";

if($conn->query($sql))
{
    echo "New User created Successfully ";
}
else 
{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>