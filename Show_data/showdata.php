<?php include_once('connect.php'); ?>
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
            background: linear-gradient(45deg, #8e44ad, #3498db);
        }

        .navbar {
            background-color: rgba(202, 247, 251, 0.3);
            color: gray;
            padding: 20px;
            text-align: center;
        }

        .navbar h1 {
            text-shadow: 2px 2px 4px white;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            max-width: 800px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.1);
        }

        .box {
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.1);
        }

        .row_tt {
            margin: 20px;
            letter-spacing: 1px;
        }

        .tim {
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        input[type="text"] {
            width: calc(100% - 100px);
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2980b9;
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
        <form action="showdata.php" method="POST" class="container">
            <input type="text" name="search" placeholder="ชื่อผู้ใช้ หรือ ไอดี">
            <button type="submit">ค้นหา</button>
        </form>
        <table>
            <div class="row_tt">
                <thead>
                    <tr class="try">
                        <th class="tim">ID</th>
                        <th class="tim">Name</th>
                        <th class="tim">Lastname</th>
                        <th class="tim">Tel</th>
                    </tr>
                </thead>
            </div>
            <tbody>
                <?php
                if (isset($_POST['search'])) {
                    $home = $_POST['search'];
                } else {
                    $home = "";
                }
                $query = "SELECT id, name, lastname, telephone FROM member WHERE ID LIKE '%$home%' or name LIKE '%$home%' or lastname LIKE '%$home%'";
                $path = mysqli_query($conn, $query);

                if ($path) {
                    if (mysqli_num_rows($path) > 0) {
                        while ($row = mysqli_fetch_assoc($path)) {
                ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['telephone']; ?></td>
                            </tr>
                <?php
                        }
                    } else {
                        echo '<tr><td colspan="5">No results found</td></tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">Error: ' . mysqli_error($conn) . '</td></tr>';
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
