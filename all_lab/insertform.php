<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลพนักงาน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555555;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        .radio-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        input[type="submit"], .cancel-button, .clear-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            text-align: center;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .cancel-button {
            background-color: #f44336;
        }
        .cancel-button:hover {
            background-color: #e53935;
        }
        .clear-button {
            background-color: #ff9800;
        }
        .clear-button:hover {
            background-color: #fb8c00;
        }
        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #eeeeee;
        }
    </style>
</head>
<body>
    <form action="insertdata.php" method="POST">
        <h2>ฟอร์มกรอกข้อมูลพนักงาน</h2>
        <hr>

        <div class="radio-group">
            <label>คำนำหน้า:</label>
            <input type="radio" name="emp_title" value="นาย" id="mr" required>
            <label for="mr">นาย</label>

            <input type="radio" name="emp_title" value="นาง" id="mrs">
            <label for="mrs">นาง</label>

            <input type="radio" name="emp_title" value="นางสาว" id="miss">
            <label for="miss">นางสาว</label>
        </div>

        <label for="emp_name">ชื่อ:</label>
        <input type="text" name="emp_name" id="emp_name" required>

        <label for="emp_surname">นามสกุล:</label>
        <input type="text" name="emp_surname" id="emp_surname" required>

        <label for="emp_birthday">วันเดือนปีเกิด:</label>
        <input type="date" name="emp_birthday" id="emp_birthday" required>

        <div class="button-group">
            <input type="submit" value="Submit">
            <button type="button" class="cancel-button" onclick="window.location.href='index.php';">Cancel</button>
            <button type="reset" class="clear-button">Clear</button>
        </div>
    </form>
</body>
</html>
