<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

  <style>
    * {
        padding: 0;
        margin: 0;
        font-family: "Noto Sans Thai", sans-serif;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100vh;
        background-color: #33343f;
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

    .chat {
        display: flex;
        gap: 20px;
        padding: 25px;
        color: #fff;
        font-size: 15px;
        font-weight: 300;
    }

    .chat img {
        width: 35px;
        height: 35px;
    }

    .response {
        background-color: #494b59;
    }

    .messagebar {
        position: fixed;
        bottom: 0;
        height: 5rem;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-top: 1px solid #494b59;
        background-color: #33343f;
    }

    .messagebar .bar-wrapper {
        background-color: #494b59;
        border-radius: 5px;
        width: 60vw;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .bar-wrapper input {
        width: 100%;
        padding: 5px;
        border: none;
        outline: none;
        font-size: 14px;
        background: none;
        color: #ccc;
    }

    .bar-wrapper input::placeholder {
        color: #ccc;
    }

    .messagebar button {
        display: flex;
        align-items: center;
        justify-content: center;
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
    }

    .message-box {
        height: calc(100vh - 5rem);
        overflow-y: auto;
    }
</style>
</head>
<body>
    <div class="navbar">
        <nav class="nav_bar">

            <h2>SMART MEDICAL ROOM</h2>

            <ul>
                <li><a href="../Appointment/index.php">ขอรับบริการ</a></li>
                <li><a href="../BMi/index.php">เทคแคร์</a></li>
                <li><a href="../Health/index.html">คลินิครักษ์ยิ้ม</a></li>
                <li><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
                <li><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
                <li><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
                <li><a href="../login_page/home.php" class="btn-signin">HOME</a></li>
            </ul>
        </nav>
    </div>
  <div class="chatbox-wrapper">
    <div class="message-box">
      <div class="chat response">
        <img src="bot.png" alt="Chatbot">
        <span>สวัสดีครับ <br> 
          มีอะไรให้ผมช่วยแนะนำไหมครับ
        </span>
      </div>
    </div>
    <div class="messagebar">
      <div class="bar-wrapper">
        <input type="text" placeholder="Enter your message...">
        <button>
          <span class="material-symbols-rounded">
            send
          </span>
        </button>
      </div>
    </div>
  </div>

  <script src="script.js" type="module"></script>
</body>
</html>
