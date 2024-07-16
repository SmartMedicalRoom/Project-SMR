
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
    :root {
      --primary-color: #73f3ad;
      --primary-color-dark: #5fe3c5;
      --secondary-color: #c7fdc7;
      --white: #ffffff;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Noto Sans Thai", sans-serif;
      background-image: linear-gradient(to right, var(--primary-color-dark), var(--primary-color));
      display:flex;
      flex-wrap: wrap;
    }

    nav {
      position: absolute;
      width: 100%;
      max-width: 1200px;
      min-height: 85px;
      left: 50%;
      transform: translateX(-50%);
      padding: 2rem 1rem;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      z-index: 1;
      font-size: 18px;
    }

    .nav__links {
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 13px;
      flex-wrap: wrap;
    }

    .link a {
      padding: 1rem;
      padding-top: 2rem;
      color: var(--white);
      text-decoration: none;
      transition: 0.3s;
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px;
    }

    .link a:hover {
      background-color: #96fae3;
      color: rgb(101, 94, 94);
    }

    .container {
      min-height: 100vh;
      display: flex;
      flex-wrap: wrap;
    }

    .container__left, .container__right {
      flex: 1 1 100%;
    }

    .container__left {
      background-image: url('picture.jpg'); 
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .container__right {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      text-align: center;
    }

    .left__content h4 {
      font-size: 2rem;
      color: var(--white);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .right__content h1 {
      font-size: 3rem;
      color: var(--white);
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .right__content h4 {
      font-size: 2rem;
      color: var(--white);
    }

    .right__content p {
      font-size: 1rem;
      color: var(--white);
      margin: 1rem 0;
    }

    .button {
      border-radius: 5px;
      border: none;
      background-color: #ffffff;
      width: 100px;
      height: 40px;
      cursor: pointer;
    }

    .button a {
      text-decoration: none;
      font-size: 1rem;
      font-weight: 600;
      color: gray;
      display: inline-block;
      line-height: 40px;
    }

    .socials {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 1.5rem;
    }

    .socials span {
      font-size: 1.5rem;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }

    .socials span:hover {
      color: rgb(164, 164, 164);
    }

@media (max-width: 320px) {

.nav__links {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.container__left {
  flex: 1 1 320px;
}

.button {
  width: 80px;
  height: 35px;
}

.button a {
  font-size: 0.875rem;
}
}

@media (min-width: 480px) {
.nav__links {
  gap: 20px;
}
}
.left__content{
  position: relative;
  top: 50px;
}
@media (min-width: 600px) {
.nav__links {
  gap: 25px;
}
}

@media (min-width: 768px) {
.container__left, .container__right {
  flex: 1;
}
}

@media (min-width: 900px) {
.right__content h1 {
  font-size: 4rem;
}

.right__content h4 {
  font-size: 2.5rem;
}

.right__content p {
  font-size: 1.25rem;
}

.button {
  width: 120px;
  height: 50px;
}

.button a {
  font-size: 1.25rem;
}
}

@media (min-width: 1024px) {
nav {
  font-size: 20px;
}

.right__content h1 {
  font-size: 5rem;
}
.left__content h4 {
      position: relative;
      top: -180px;
      }
.right__content h4 {
  font-size: 3rem;
}

.right__content p {
  font-size: 1.5rem;
}
}

@media (min-width: 1200px) {
nav {
  font-size: 20px;
}
.nav__links{
  padding: 0;
  margin: 0;
}
.right__content h1 {
  font-size: 5rem;
}

.right__content h4 {
  font-size: 3rem;
}

.right__content p {
  font-size: 1.3rem;
}

.button {
  width: 140px;
  height: 60px;
}

.button a {
  font-size: 1.5rem;
}
.left__content{
  position: relative;
  top: -50px;
}
.left__content h4{
  font-size: 50px ;
}
}
    </style>
</head>
<body>
<nav>
      <ul class="nav__links">
        <li class="link"><a href="../Show_data/showdata.php">ข้อมูลบุคลากร</a></li>
        <li class="link"><a href="../stock/index.php">ข้อมูลคลังยา</a></li>
        <li class="link"><a href="../Problem/index.php">แจ้งปัญหา</a></li>
        <li class="link"><a href="../Health/addnew.php">เคสล่าสุด</a></li>
      </ul>
    </nav>

    <div class="container">
      <div class="container__left">
        <div class="left__content">
          <h4>SMART MEDICAL ROOM</h4>
        </div>
      </div>
      <div class="container__right">
        <div class="right__content">
          <h1>SMR</h1>
          <h4>Smart Medical Room </h4>
          <h4>For Admin</h4>
          <p>
          ระบบการจัดการข้อมูลในห้องพยาบาลที่ใช้เทคโนโลยีอัจฉริยะเพื่อเพิ่มประสิทธิภาพในการบริการด้านสุขภาพและการจัดการข้อมูลทางการแพทย์ ระบบนี้ช่วยให้นักเรียนและบุคลากรสามารถเข้าถึงข้อมูลสุขภาพได้ง่ายขึ้น 
          </p>
        <button class="button"><a class="link_ol" href="logout.php">Logout</a></button>
        </div>
      </div>
    </div>
</body>
</html>
