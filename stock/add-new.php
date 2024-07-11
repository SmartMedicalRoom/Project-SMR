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

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    .navbar h1{
      position: relative;
      left: 630px;
      text-shadow: 2px 2px 4px white;
    }
   .btn-signin:hover {
      color: white;
   }

   .background {
      background-color: rgb(202, 247, 251, 0.3);
   }

   .container {
      margin-top: 20px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);
    }

   .container {
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
         <li class="link"><a href="#">แจ้งปัญหา</a></li>
         <li class="link"><a href="#">เคสล่าสุด</a></li>
         <li><a href="../Admin_page/index.php" class="btn-signin">HOME</a></li>
      </ul>
   </nav>
   <div class="background">
      <section class="navbar">
         <h1>ข้อมูลยาภายในคลังยา</h1>
      </section>
   </div>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New</h3>
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