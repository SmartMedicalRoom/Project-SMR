<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $data = $_POST['data'];
  $quantity = $_POST['quantity'];

  $sql = "UPDATE `crud` SET `name`='$name',`data`='$data',`quantity`='$quantity' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    
  <title>ข้อมูลยาภายในคลังยา</title>
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
    .background{
      background-color: rgb(202, 247, 251 ,0.3);
    }
    .navbar_log {
        font-size: 40px;
        font-weight: bold;
        position: relative;
        left: 640px;
        color: rgb(62, 198, 217);
        text-shadow: 2px 2px 4px white;
    }
    .container{
     background-color: aliceblue;
     position: relative;
     top: 20px;
     height: 320px;
     width: 600px;
     border-radius: 10px;
     box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);
    }
    .text{
      font-size: 50px;
      font-weight: 900;
      position: relative;
      left: 200px;
      right: 100px;
      color: #04AA6D;
      padding: 10px;
    }
    .text_P{
      position: relative;
      left: 150px;
      color:gray ;
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
        <li class="link"><a href="#">เคสล่าสุด</a></li>
        <li><a href="../Admin_page/index.php" class="btn-signin">HOME</a></li>
    </ul>
  </nav>
<div class="background">
  <section class="navbar_log">
  ข้อมูลยาภายในคลังยา
  </section>
</div>
  <div class="container">
    <div class="text">
      <h3>แก้ไขข้อมูล</h3>
    </div>
      <p class="text_P">กดปุ่มอัปเดตหลังการแก้ไขข้อมูลสำเร็จ</p>
    

    <?php
    $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container-2 d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">ชื่อยา:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">ข้อมูลตัวยา:</label>
            <input type="text" class="form-control" name="data" value="<?php echo $row['data'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">จำนวน:</label>
          <input type="number" class="form-control" name="quantity" value="<?php echo $row['quantity'] ?>">
        </div>


        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>