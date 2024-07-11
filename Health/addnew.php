<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_form_db";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Noto Sans Thai", sans-serif;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #E4FBFF;
        }

        .nav_bar {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 0 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav_bar h2 {
            color: #3498db;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .nav_bar ul {
            display: flex;
            list-style: none;
        }

        .nav_bar ul li {
            margin-left: 20px;
        }

        .nav_bar ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            text-transform: uppercase;
            transition: color 0.3s ease;
            letter-spacing: 1px;
        }

        .nav_bar ul li a:hover {
            color: gray;
        }

        .btn-signin {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background 0.3s ease;
        }

        .btn-signin:hover {
            background: linear-gradient(45deg, #2980b9, #8e44ad);
        }

        .navbar h1 {
            text-align: center;
            margin: 20px 0;
            color: #3498db;
        }

        .box {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .container input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        .container button {
            padding: 10px 20px;
            border: none;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
<nav class="nav_bar">

<h2>SMART MEDICAL ROOM</h2>

<ul>
    <li class="link"><a href="../Show_data/showdata.php">ข้อมูลบุคลากร</a></li>
    <li class="link"><a href="../stock/index.php">ข้อมูลคลังยา</a></li>
    <li class="link"><a href="../Problem/index.php">แจ้งปัญหา</a></li>
    <li class="link"><a href="../Health/addnew.php">เคสล่าสุด</a></li>
    <li><a href="../login_page/admin.php" class="btn-signin">HOME</a></li>
</ul>
</nav>
    <section class="navbar">
        <h1>ข้อมูลบุคลากรและนักเรียน</h1>
    </section>

    <div class="box">
        <form action="addnew.php" method="POST" class="container">
            <input type="text" name="search" placeholder="ชื่อผู้ใช้ หรือ ไอดี">
            <button type="submit">ค้นหา</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Symptoms</th>
                    <th>Age</th>
                    <th>Tel.</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $home = isset($_POST['search']) ? $_POST['search'] : '';

                $query = "SELECT id, alias, symptoms, age, phone FROM health_data WHERE id LIKE '%$home%' OR alias LIKE '%$home%'";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['alias']}</td>
                                <td>{$row['symptoms']}</td>
                                <td>{$row['age']}</td>
                                <td>{$row['phone']}</td>
                              </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
