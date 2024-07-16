<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มนัดเข้าใช้บริการ</title>
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
            background-image: url('picture.jpg'); /* เปลี่ยน path เป็นที่อยู่ของไฟล์ภาพ */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: blur(4px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .nav_bar {
            width: 100%;
            height: 80px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 0 20px;
        }

        .nav_bar h2 {
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

        .header {
            background-color: #C9F7FF;
            border-radius: 10px;
            margin: 10px;
        }

        .container {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 40%;
            align-items: center;
            position: relative;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            z-index: 2;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 4px;
            transition: 0.4s;
        }

        .container h1 {
            text-align: center;
            color: #333333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group .error {
            color: red;
            font-size: 12px;
            display: none;
        }

        .submit-btn {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        @media (max-width: 900px) {
            .nav_bar ul {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: white;
                align-items: center;
            }

            .nav_bar ul.active {
                display: flex;
            }

            .hamburger {
                display: flex;
            }

            .container {
                width: 90%;
            }
        }

        @media (max-width: 768px) {
            .nav_bar ul {
                font-size: small;
            }

            .nav_bar ul li a {
                padding: 10px;
            }

            .container {
                width: 90%;
                padding: 15px;
            }
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
        }
    </style>
</head>

<body>
    <nav class="nav_bar">
        <h2>SMART MEDICAL ROOM</h2>
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="nav__links">
            <li><a href="../Appointment/index.php">ขอรับบริการ</a></li>
            <li><a href="../BMi/index.php">เทคแคร์</a></li>
            <li><a href="../Health/index.html">คลินิกรักษ์ยิ้ม</a></li>
            <li><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
            <li><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
            <li><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
            <li><a href="../login_page/home.php" class="btn-signin">HOME</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>ฟอร์มนัดเข้าใช้บริการ</h1>
        <form id="appointmentForm" action="sendinfo.php" method="post" onsubmit="return validateForm()">
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
                
            <div class="form-group">
                <label for="name">ชื่อ-นามสกุล:</label>
                <input type="text" id="name" name="name" required>
                <div class="error" id="nameError">กรุณากรอกชื่อ-นามสกุล</div>
            </div>
            <div class="form-group">
                <label for="service">ยาที่แพ้ (ถ้ามี) :</label><br>
                <textarea id="service" name="service" rows="4" cols="50" ></textarea>
            </div>

            <div class="form-group">
                <label for="symptoms">อาการ:</label><br>
                <textarea id="symptoms" name="symptoms" rows="4" cols="50" required></textarea>
            </div>
            <div class="form-group">
                <label for="age">อายุ:</label>
                <input type="number" id="age" name="age" min="0" required>
                <div class="error" id="ageError">กรุณากรอกอายุ</div>
            </div>

            <div class="form-group">
                <label for="weight">น้ำหนัก (กก.):</label>
                <input type="number" id="weight" name="weight" min="0" required>
                <div class="error" id="weightError">กรุณากรอกน้ำหนัก</div>
            </div>

            <div class="form-group">
                <label for="height">ส่วนสูง (ซม.):</label>
                <input type="number" id="height" name="height" min="0" required>
                <div class="error" id="heightError">กรุณากรอกส่วนสูง</div>
            </div>


            <div class="form-group">
                <input type="submit" value="ส่งแบบฟอร์ม" class="submit-btn" name="submit">
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            var isValid = true;

            var name = document.getElementById("name").value;
            var age = document.getElementById("age").value;
            var weight = document.getElementById("weight").value;
            var height = document.getElementById("height").value;

            if (name === "") {
                document.getElementById("nameError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("nameError").style.display = "none";
            }

            if (age === "") {
                document.getElementById("ageError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("ageError").style.display = "none";
            }

            if (weight === "") {
                document.getElementById("weightError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("weightError").style.display = "none";
            }

            if (height === "") {
                document.getElementById("heightError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("heightError").style.display = "none";
            }

            return isValid;
        }

        function toggleMenu() {
            const navLinks = document.querySelector('.nav__links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>

</html>
