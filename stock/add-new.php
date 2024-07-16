<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $name = $_POST['name'];
   $data = $_POST['data'];
   $quantity = $_POST['quantity'];

   $sql = "INSERT INTO `crud`(`id`, `name`, `data`, `quantity`) VALUES (NULL,'$name','$data','$quantity')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
   <title>ข้อมูลยาภายในคลังยา</title>
</head>
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
      padding: 10px;
      background-color: white;
      position: relative;
      top: 20px;
      height: 320px;
      width: 600px;
      border-radius: 10px;
      box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);
   }

   .text {
      font-size: 50px;
      font-weight: 900;
      position: relative;
      left: 200px;
      right: 100px;
      color: #04AA6D;
      padding: 10px;
   }

   .text_P {
      position: relative;
      left: 150px;
      color: gray;
   }
</style>

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
   <div class="background">
      <section class="head">
         <h1>ข้อมูลยาภายในคลังยา</h1>
      </section>
   </div>

   <div class="container">
      <div class="text-center mb-4">
         <h3>เพิ่มข้อมูลคลังยา</h3>
         <p class="text-muted">กรอกข้อมูลด้านล่างเพื่อเพิ่มข้อมูลในคลังยา</p>
      </div>

      <div class="container-2 d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ชื่อยา :</label>
                  <input type="text" class="form-control" name="name">
               </div>

               <div class="col">
                  <label class="form-label">ข้อมูลตัวยา :</label>
                  <input type="text" class="form-control" name="data">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">จำนวน :</label>
               <input type="number" class="form-control" name="quantity">
            </div>


            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>