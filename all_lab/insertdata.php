<?php
//Connect to the database
require('dbconnect.php');

//Receive info form the form
$emp_title = $_POST["emp_title"];
$emp_name = $_POST["emp_name"];
$emp_surname = $_POST["emp_surname"];
$emp_birthday = $_POST["emp_birthday"];
$emp_adr = $_POST["emp_adr"];
$emp_skill = $_POST["emp_skill"];
$emp_tel = $_POST["emp_tel"];


//Save info
$sql = "INSERT INTO employee(emp_title,emp_name,emp_surname,emp_birthday,emp_adr,emp_skill,emp_tel ) VALUE('$emp_title','$emp_name','$emp_surname','$emp_birthday',
'$emp_adr','$emp_skill','$emp_tel')";

$result = mysqli_query($con, $sql, );

//Check the workflow of insert command
if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo mysqli_error($con);
}


?>