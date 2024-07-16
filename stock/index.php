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
      background-image: url('picture.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      backdrop-filter: blur(3px);
      height: 100vh;
      width: 100vw;
      overflow: hidden;
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
      font-size: 25px;
      font-weight: 800;
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
    .head {
      background-color: rgba(202, 247, 251, 0.3);
      padding: 10px;
    
    }
    .head h1 {
      font-size: 28px;
      color: white;
      position: relative;
      left: 630px;
      top: 8px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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
      <li class="link"><a href="../Problem/index.php">แจ้งปัญหา</a></li>
      <li class="link"><a href="../Health/addnew.php">เคสล่าสุด</a></li>
      <li><a href="../login_page/admin.php" class="btn-signin">HOME</a></li>
    </ul>
  </nav>
  <section class="head">
    <h1>ข้อมูลยาภายในคลังยา</h1>
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
          <th scope="col">ชื่อยา</th>
          <th scope="col">ข้อมูลตัวยา</th>
          <th scope="col">จำนวน</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["data"] ?></td>
            <td><?php echo $row["quantity"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
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