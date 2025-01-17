<?php
//Connect to the database
require ('dbconnect.php');

//Receive result form editformdata.php
$emp_id = $_POST["emp_id"];
$emp_title = $_POST["emp_title"];
$emp_name = $_POST["emp_name"];
$emp_surname = $_POST["emp_surname"];
$emp_birthday = $_POST["emp_birthday"];
$emp_adr = $_POST["emp_adr"];
$emp_skill = $_POST["emp_skill"];
$emp_tel = $_POST["emp_tel"];

$sql = "UPDATE employee SET emp_title='$emp_title', emp_name = '$emp_name', emp_surname = '$emp_surname', emp_birthday = '$emp_birthday', 
emp_adr = '$emp_adr', emp_skill = '$emp_skill', emp_tel = '$emp_tel' WHERE emp_id = $emp_id;";

$result = mysqli_query($con, $sql);

if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo "เกิดข้อผิดพลาดเกิดขึ้น ไม่สามารถแก้ไขได้" .mysqli_error($con);
}

?>