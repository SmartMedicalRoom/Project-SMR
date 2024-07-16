<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Noto Sans Thai", sans-serif;
        }
        html, body {
            min-height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: auto;
        }
       
        body {
            background-image: url('picture.jpg'); /* เปลี่ยน path เป็นที่อยู่ของไฟล์ภาพ */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: blur(4px);
        }

        .nav_bar {
            width: 100%;
            height: 80px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            background-color: white;
        }
        .nav_bar h2{
            color: #3498db;
        }
        .nav_bar ul {
            display: flex;
        }

        .nav_bar ul li {
            list-style: none;
        }

        .nav_bar ul li a {
            text-decoration: none;
            color: #333;
            padding: 15px 30px;
            text-transform: uppercase;
            transition: .3s ease;
            letter-spacing: 2px;
        }

        ul li a:hover {
            color: gray;
        }

        .btn-signin {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: #fff;
            border-radius: 5px;
        }

        .btn-signin:hover {
            color: white;
        }

        .hearder {
            background: white;
            border-radius: 5px;

        }

        .container {
            width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            top: 50px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 3px;
            padding: 0px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <nav class="nav_bar">

            <h2>SMART MEDICAL ROOM</h2>

            <ul>
                <li><a href="../Appointment/index.php">ขอรับบริการ</a></li>
                <li><a href="../BMi/index.php">เทคแคร์</a></li>
                <li><a href="../Health/index.html">คลินิกรักษ์ยิ้ม</a></li>
                <li><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
                <li><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
                <li ><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
                <li><a href="../login_page/home.php" class="btn-signin">HOME</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h2>ข้อมูลนักเรียน</h2>
        <form id="registerForm" action="register.php" method="POST">
            <label for="firstname">ชื่อ-นามสกุล  :</label>
            <input type="text" id="firstname" name="firstname" required><br><br>
            <label for="lastname">ยาที่แพ้ :</label>
            <input type="text" id="lastname" name="lastname" required><br><br>
            <label for="age">อายุ :</label>
            <input type="number" id="age" name="age" required><br><br>
            <label for="height">ส่วนสูง (ซม.):</label>
            <input type="number" id="height" name="height" required><br><br>
            <label for="dob">วัน/เดือน/ปีเกิด :</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <label for="idcard">เลขประจำตัวบัตรประชาชน :</label>
            <input type="text" id="idcard" name="idcard" required><br><br>
            <label for="organization">สัญชาติ :</label>
            <input type="text" id="organization" name="organization" required><br><br>
            <label for="position">ตำแหน่ง :</label>
            <input type="text" id="position" name="position" required><br><br>
            <input type="submit" value="ส่งแบบฟอร์ม">
        </form>
    </div>
</body>

</html>