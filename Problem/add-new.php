<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $issue = $_POST['issue'];

   $sql = "INSERT INTO `problem`(`id`, `issue`) VALUES (NULL,'$issue')";

   $result = mysqli_query($conn, $sql);
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
   <link rel="stylesheet" href="styles_op.css">
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
   .container{
    height: 250px;
   }
   .text_nav{
    font-size: 20px;
    font-weight: 800;
    position: relative;
    left: 250px;
    top: 10px;
   }
   .text_2{
    position: relative;
    left: 180px;
    top: 10px;
   }
   .form-control{
    position: relative;
    height: 50px;
    margin: 5px;
   
   }
   .btn{
    position: relative;
    top: 10px;
   }
</style>

<body>
   <nav class="nav_bar">

      <h2>SMART MEDICAL ROOM</h2>

      <ul>
        <li class="link"><a href="../Appointment/index.php">ขอรับยา</a></li>
        <li class="link"><a href="../BMi/index.php">เทคแคร์</a></li>
        <li class="link"><a href="#">คลินิครักษ์ยิ้ม</a></li>
        <li class="link"><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
        <li class="link"><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
        <li class="link"><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
        <li class="link"><a href="../login_page/home.php" class="btn-signin">HOME</a></li>
        
      </ul>
   </nav>
   <div class="background">
      <section class="navbar">
         <h1>ข้อมูลการแจ้งปัญหา</h1>
      </section>
   </div>

   <div class="container">
      <div class="text_nav">
         <h3>แจ้งปัญหา</h3>
         </div>
         <p class="text_2">กรอกข้อมูลด้านล่างเพื่อรายงานปัญหา</p>
      

      <div class="container-2 d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">ปัญหา :</label>
                  <input type="textarea" class="form-control" name="issue" >
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