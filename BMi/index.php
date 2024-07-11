 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmi_db";

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    if ($height > 0 && $weight > 0) {
        $bmi = $weight / (($height / 100) ** 2);
        $category = "";

        if ($bmi < 18.5) {
            $category = "ผอมเกินไป";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $category = "น้ำหนักปกติ";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $category = "น้ำหนักเกิน";
        }elseif ($bmi >= 30 && $bmi < 34.9) {
            $category = "อ้วน (ระดับ 1)t";
        }elseif ($bmi >= 35 && $bmi < 39.9) {
            $category = " อ้วน (ระดับ 2)";
        }
         else {
            $category = "อ้วนมาก (ระดับ 3)";
        }

        // เตรียมและ bind
        $stmt = $conn->prepare("INSERT INTO bmi_records (name, height, weight, bmi, category) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sddds", $name, $height, $weight, $bmi, $category);

        if ($stmt->execute()) {
            $success_message = "ค่าดัชนีมวลกายของคุณคือ: $category";
        } else {
            $error_message = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $error_message = "โปรดกรอกค่าน้ำหนักส่วนสูงของคุณอีกครั้ง หรือแจ้งปัญหา";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .response {
            background-color: #494b59;
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

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }


        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .success {
            margin-top: 20px;
            color: green;
        }

        .error {
            margin-top: 20px;
            color: red;
        }

        .heard {
            display: flex;

        }

        .button {
            position: relative;
            left: 170px;
            width: 100px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #3498db, #8e44ad);
        }

        .link {
            text-decoration: none;
            font-size: larger;
            font-weight: 600;
            color: #fff;
        }
        .BMI{
            font-weight: 500;
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
        <div class="heard">
            <h1 class="BMI">ค่าดัชนีมวลกาย</h1>
            <button class="button"><a class="link" href="gpt.php">เทคแคร์</a></button>
        </div>
        <form method="post" action="index.php">
            <label for="name">ชื่อ-นามสกุล:</label>
            <input type="text" id="name" name="name" required>

            <label for="height">ส่วนสูง (ซม.):</label>
            <input type="number" id="height" name="height" required>

            <label for="weight">น้ำหนัก (กก.):</label>
            <input type="number" id="weight" name="weight" required>

            <input type="submit" value="Calculate BMI">
            <?php if (!empty($success_message)) {
                echo "<p class='success'>$success_message</p>";
            } ?>
            <?php if (!empty($error_message)) {
                echo "<p class='error'>$error_message</p>";
            } ?>
        </form>
    </div>
</body>

</html>