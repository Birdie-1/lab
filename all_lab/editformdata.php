<?php
    require('dbconnect.php');

    $emp_id = $_GET["emp_id"];
    $sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>แก้ไขข้อมูลพนักงาน</title>
</head>

<body>
    <div class="container my-3">
    <h2 class="text-left">ฟอร์มแก้ไขข้อมูลพนักงาน</h2>
    <hr>
        <form action="updatedata.php" method="POST" class="bg-white p-4 rounded shadow-sm">
            <input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id">
            <div class="form-group col-6">
                <label for="emp_title">คำนำหน้า :</label>
                <select name="emp_title" class="form-control" required>
                    <option value="นาย" <?php if ($row ["emp_title"]=="นาย"){echo "SELECTED";}?>>นาย</option>
                    <option value="นาง"  <?php if ($row ["emp_title"]=="นาง"){echo "SELECTED";}?>>นาง</option>
                    <option value="นางสาว"  <?php if ($row ["emp_title"]=="นางสาว"){echo "SELECTED";}?>>นางสาว</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="emp_name">ชื่อ :</label>
                <input type="text" name="emp_name" class="form-control" value="<?php echo $row["emp_name"];?>" required>
            </div>

            <div class="form-group">
                <label for="emp_surname">นามสกุล :</label>
                <input type="text" name="emp_surname" class="form-control"  value="<?php echo $row["emp_surname"];?>" required>
            </div>

            <div class="form-group">
                <label for="emp_birthday">วันเดือนปีเกิด :</label>
                <input type="date" name="emp_birthday" class="form-control"  value="<?php echo $row["emp_birthday"];?>" required>
            </div>

            <div class="form-group">
                <label for="emp_adr">ที่อยู่ :</label>
                <textarea name="emp_adr" class="form-control"><?php echo $row["emp_adr"]; ?></textarea>
            </div>

            <div class="form-group">
                <label for="emp_skill">ทักษะพิเศษ :</label>
                <textarea name="emp_skill" class="form-control"><?php echo $row["emp_skill"]; ?></textarea>
            </div>

            <div class="form-group">
                <label for="emp_tel">เบอร์โทรศัพท์ :</label>
                <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row["emp_tel"];?>" required>
            </div>

            <div class="my-3">
                <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
        </form>
    </div>

</body>

</html>