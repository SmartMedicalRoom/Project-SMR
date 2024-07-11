<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Noto Sans Thai", sans-serif;
        }

        body {
            background-color: #E4FBFF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .navbar {
            width: 100%;
            position: relative;
            top: -90px;
        }

        .nav_bar {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: white;
        }

        .nav_bar h2 {
            font-size: 24px;
            color: #333;
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
            transition: 0.3s ease;
            letter-spacing: 2px;
        }

        .nav_bar ul li a:hover {
            color: gray;
        }

        .btn-signin {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-signin:hover {
            color: white;
        }

        .container {
            position: relative;
            left: 20px;
            top: -80px;
            max-width: 520px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2{
            position: relative;
            left: 170px;
        }
        .container img {
            max-width: 200px;
            margin-top: 20px;
            position: relative;
            right: -130px;
            top: -10px;
        }

        .container p {
            margin-top: 10px;
            color: #333;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <nav class="nav_bar">
            <h2>SMART MEDICAL ROOM</h2>
            <ul>
                <li><a href="../Appointment/index.php">ขอรับยา</a></li>
                <li><a href="../BMi/index.php">เทคแคร์</a></li>
                <li><a href="../Health/index.html">คลินิครักษ์ยิ้ม</a></li>
                <li><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
                <li><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
                <li><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
                <li><a href="../login_page/home.php" class="btn-signin">HOME</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h2>คลินิครักษ์ยิ้ม</h2>
        <img src="images.png" alt="QR Code">
        <p>สามารถเข้ารับคำปรึกษาคลินิครักษ์ยิ้มได้โดยแสกนคิวอาโค้ดนี้ </p>
        <p>และสามารถขอติดต่อผู้เชี่ยวชาญได้โดยพิม ฉันต้องการติดต่อคลินิครักษ์ยิ้ม</p>
    </div>
</body>

</html>