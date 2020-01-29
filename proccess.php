<?php
include ('connection.php');

//Data coming from form
$name = $_POST["name"];
$surname = $_POST["surname"];
$birthday =$_POST["birthday"];
$phone = $_POST["phone"];

//Insert into Database
$mysqli->query("INSERT INTO clients(c_id, c_name, c_surname, c_birthday, c_phone) VALUES (null,'$name','$surname','$birthday','$phone')");

