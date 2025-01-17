<?php 
require('dbconnect.php');
$sql="SELECT * FROM employee "; // Select from employee table to show
$result = mysqli_query($con,$sql); // run command that is stored in $sql

$count = mysqli_num_rows($result); // store result from $result in $count

$order = 1; //เริ่มนับแถวจาก 1
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>รายชื่อพนักงานทั้งหมด</title>
  </head>
  <body>
    <div class = "container">
        <h1 class="text-center mt-3">รายชื่อพนักงาน</h1>
        <form action="searchdata.php" class="form-group my-3" method = "POST">
            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="กรอกชื่อพนักงานที่ต้องการ" name="namesearch" class="form-control">
                </div>
                <div class="col-6">
                    <input type="submit" value="ค้นหาข้อมูลพนักงาน"  class="btn btn-success">
                </div>
            </div>
        </form>
        <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>สกุล</th>
                <th>วันเกิด</th>
                <th>ที่อยู่</th>
                <th>ทักษะพิเศษ</th>
                <th>เบอร์โทรศัพท์</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $order++;?></td>
                <td><?php echo $row["emp_title"];?></td>
                <td><?php echo $row["emp_name"];?></td>
                <td><?php echo $row["emp_surname"];?></td>
                <td><?php echo $row["emp_birthday"];?></td>
                <td><?php echo $row["emp_adr"];?></td>
                <td><?php echo $row["emp_skill"];?></td>
                <td><?php echo $row["emp_tel"];?></td>
                <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"]; ?>" class="btn btn-warning">แก้ไข</a></td>
                <td><a href="deletedata.php?emp_id=<?php echo $row["emp_id"]; ?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบข้อมูล</a></td>
            </tr>
            
            <?php } ?>
        </tbody>
        </table>
        <a href="insertform.php" class="btn btn-info">กรอกข้อมูลพนักงาน</a>

    </div>

    
  </body>
</html>