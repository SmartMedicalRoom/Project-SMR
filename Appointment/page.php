<?php
session_start();
if (!isset($_SESSION['success'])) {
    header("Location: page.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-image: url('picture.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: inherit;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: -1;
        }

        .nav_bar {
            width: 100%;
            height: 80px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .nav_bar h2 {
            position: relative;
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

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
        }

        .Tim {
            margin-bottom: 20px;
            position: relative;
            left: 100px;
        }

        @media (max-width: 768px) {
            .nav_bar ul {
                flex-direction: column;
            }

            .nav_bar ul li a {
                padding: 10px;
            }

            .container {
                width: 100%;
                padding: 15px;
            }
        }

        .yee {
            position: relative;
            left: 170px;
        }

        @media (max-width: 480px) {
            .nav_bar {
                flex-direction: column;
                height: auto;
            }

            .nav_bar h2 {
                margin-bottom: 10px;
            }

            .nav_bar ul {
                align-items: center;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="nav_bar">

        <h2>SMART MEDICAL ROOM</h2>

        <ul>
            <li><a href="../Appointment/index.php">ขอรับบริการ</a></li>
            <li><a href="../BMi/index.php">เทคแคร์</a></li>
            <li><a href="../Health/index.html">คลินิกรักษ์ยิ้ม</a></li>
            <li><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
            <li><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
            <li><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
            <li><a href="../Login/home.php" class="btn-signin">HOME</a></li>

        </ul>
    </nav>


    <div class="container">
        <div class="Tim">
        <h2>ระบบได้ทำการสั่งยาให้คุณเรียบร้อยแล้ว</h2>
        </div>
            <p class="yee">กรุณารอเจ้าหน้าที่ยืนยันสักครู่ครับ</p>
        </div>
    </div>

</body>

</html>