<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>ข้อมูลยาภายในคลังยา</title>
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
      flex-direction: row;
      justify-content: space-around;
      align-items: center;
      background-color: white;
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
    .navbar{
      background-color:rgb(202, 247, 251 ,0.3);
      color: gray;
    }
    .btn-signin:hover {
      color: white;
    }
    .navbar h1{
      position: relative;
      left: 630px;
      text-shadow: 2px 2px 4px white;
    }
    .container {
      margin-top: 20px;
      background-color: aliceblue;
      border-radius: 5px;
      box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);
    }

    .btn {
      background-color: #04AA6D;
      transition-duration: 0.4s;
      color: white;
      margin: 5px;
    }

    .btn:hover {
      background-color: rgb(62, 255, 217);
    }

    .tr {
      background-color: #3498db;
    }
  </style>
</head>

<body>
  <nav class="nav_bar">

    <h2>SMART MEDICAL ROOM</h2>

    <ul>
        <li class="link"><a href="../Show_data/showdata.php">ข้อมูลบุคลากร</a></li>
        <li class="link"><a href="../stock/index.php">ข้อมูลคลังยา</a></li>
        <li class="link"><a href="#">แจ้งปัญหา</a></li>
        <li class="link"><a href="../Health/addnew.php">เคสล่าสุด</a></li>
        <li><a href="../login_page/admin.php" class="btn-signin">HOME</a></li>
    </ul>
  </nav>
  <section class="navbar">
    <h1>รายงานปัญหา</h1>
  </section>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn">เพิ่มข้อมูล</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr class="tr">
          <th scope="col">ID</th>
          <th scope="col">รายงานปัญหา</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `problem`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["issue"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>