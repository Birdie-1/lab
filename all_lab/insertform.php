<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลพนักงาน</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container my-3">
    <h2 class="text-left">ฟอร์มแก้ไขข้อมูลพนักงาน</h2>
    <hr>
        <form action="insertdata.php" method="POST" class="bg-white p-4 rounded shadow-sm">
            <div class="form-group col-6">
                <label for="emp_title">คำนำหน้า :</label>
                <select name="emp_title" class="form-control" required>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="emp_name">ชื่อ :</label>
                <input type="text" name="emp_name" class="form-control"required>
            </div>

            <div class="form-group">
                <label for="emp_surname">นามสกุล :</label>
                <input type="text" name="emp_surname" class="form-control"  required>
            </div>

            <div class="form-group">
                <label for="emp_birthday">วันเดือนปีเกิด :</label>
                <input type="date" name="emp_birthday" class="form-control"  required>
            </div>

            <div class="form-group">
                <label for="emp_adr">ที่อยู่ :</label>
                <textarea name="emp_adr" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="emp_skill">ทักษะพิเศษ :</label>
                <textarea name="emp_skill" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="emp_tel">เบอร์โทรศัพท์ :</label>
                <input type="tel" name="emp_tel" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="emp_user">Username :</label>
                <input type="text" name="emp_user" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="emp_pass">Password :</label>
                <input type="password" name="emp_pass" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="emp_level">ระดับผู้ใช้งาน <i class='bx bxs-user-pin'></i></label>
                <select name="emp_level" class="form-control" required>
                    <option value="">--เลือกระดับการใช้งาน--</option>
                    <option value="a">ผู้ดูแลระบบ</option>
                    <option value="u">ผู้ใช้งาน</option>
                </select>
            </div>

            <div class="form-group">
                <label for="d_name">แผนก <i class='bx bxs-user-pin'></i></label>
                <select name="d_name" class="form-control" required>
                    <option value="">--เลือกแผนก--</option>
                    <option value="1">ฝ่ายบริหาร</option>
                    <option value="2">ฝ่ายการตลาด</option>
                    <option value="3">ฝ่ายการเงิน</option>
                    <option value="4">ฝ่ายผลิต</option>
                    <option value="5">ฝ่าย HR</option>

                </select>
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
