<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_op.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <script>
        function navigateToSection() {
            const select = document.getElementById("activity-select");
            const selectedOption = select.options[select.selectedIndex].value;
            if (selectedOption) {
                document.getElementById(selectedOption).scrollIntoView({
                    behavior: "smooth"
                });
            }
        }
    </script>
    <style>
      * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Noto Sans Thai", sans-serif;
        }
        body {
            background-color: #E4FBFF;
        }

        .nav_bar {
            
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
        .bull {
            padding: 10px;
            background-color: rgb(247, 252, 255);
        }
        .bull h1 {
            font-weight: 500px;
            font-size: 30px;
        } 
       

        body {
            font-family: 'Noto Sans Thai', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .success {
            margin-top: 20px;
            color: green;
        }

        .error {
            margin-top: 20px;
            color: red;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
                margin: 20px auto;
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            input[type="text"],
            input[type="number"] {
                font-size: 14px;
            }

            input[type="submit"] {
                font-size: 16px;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .container {
                width: 100%;
                margin: 10px auto;
                padding: 10px;
            }

            h1 {
                font-size: 20px;
            }

            input[type="text"],
            input[type="number"] {
                font-size: 12px;
            }

            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }

        nav {
            background-color: rgb(247, 252, 255);
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid rgb(164, 164, 164);
            border-radius: 5px;
            outline: none;
            color: #333;
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        .event {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s;
        }

        .event:hover {
            transform: translateY(-5px);
        }

        .event img {
            width:300px;
           
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="nav_bar">
        

            <h2>SMART MEDICAL ROOM</h2>

            <ul>
                <li><a href="../Appointment/index.php">ขอรับยา</a></li>
                <li><a href="../BMi/index.php">เทคแคร์</a></li>
                <li><a href="../Health/index.html">คลินิครักษ์ยิ้ม</a></li>
                <li><a href="../Volunteer/volunteer.php">ข่าวสารและกิจกรรม</a></li>
                <li><a href="../Problem/add-new.php">รายงานปัญหา</a></li>
                <li><a href="../Register/register.php">ข้อมูลนักเรียน</a></li>
                <li><a href="../login_page/home.php" class="btn-signin">HOME</a></li>
            </ul>
     
    </div>
    <div class="bull">
        <h1><b>PUBLIC RELATION</b></h1>
    </div>
    <nav>
        <select id="activity-select" onchange="navigateToSection()">
            <option value="">เลือกกิจกรรม</option>
            <optgroup label="กิจกรรมอาสา">
                <option value="volunteer1">อาสาพัฒนาชุมชน</option>
                <option value="volunteer2">อาสาสอนหนังสือ</option>
            </optgroup>
            <optgroup label="กิจกรรมฝึกงาน">
                <option value="internship1">ฝึกงานที่บริษัท ABC</option>
                <option value="internship2">ฝึกงานในโรงพยาบาล</option>
            </optgroup>
            <optgroup label="กิจกรรมจากภายนอก">
                <option value="external1">งานสัมมนาวิชาการ</option>
                <option value="external2">งานแสดงสินค้านวัตกรรม</option>
            </optgroup>
        </select>
    </nav>
    <main>
        <section id="volunteer">
            <h2>กิจกรรมอาสา</h2>
            <div class="event" id="volunteer1">
                <img src="images3.webp" alt="อาสาพัฒนาชุมชน">
                <h3>อาสาพัฒนาชุมชน</h3>
                <p>การปลูกต้นไม้ และกิจกรรมทำความสะอาดชุมชน</p>
            </div>
            <div class="event" id="volunteer2">
                <img src="images4.webp" alt="อาสาสอนหนังสือ">
                <h3>อาสาสอนหนังสือ</h3>
                <p>จัดการเรียนการสอนในโรงเรียนหรือศูนย์การเรียนรู้ต่างๆ เช่น สอนหนังสือเด็ก</p>
            </div>
        </section>
        <section id="internship">
            <h2>กิจกรรมฝึกงาน</h2>
            <div class="event" id="internship1">
                <img src="images6.webp" alt="ฝึกงานที่บริษัท ABC">
                <h3>ฝึกงานที่บริษัท ABC</h3>
                <p>เรียนรู้และพัฒนาทักษะทางวิชาชีพที่สอดคล้องกับสาขาวิชาที่ศึกษา , สัมผัสประสบการณ์การทำงานในสภาพแวดล้อมจริง</p>
            </div>
            <div class="event" id="internship2">
                <img src="images5.webp" alt="ฝึกงานในโรงพยาบาล">
                <h3>ฝึกงานในโรงพยาบาล</h3>
                <p>สัมผัสประสบการณ์การทำงานในสภาพแวดล้อมจริงของโรงพยาบาล</p>
            </div>
        </section>
        <section id="external">
            <h2>กิจกรรมจากภายนอก</h2>
            <div class="event" id="external1">
                <img src="images1.webp" alt="งานสัมมนาวิชาการ">
                <h3>งานสัมมนาวิชาการ</h3>
                <p>ส่งเสริมการแลกเปลี่ยนข้อมูลและความรู้ใหม่ๆ ระหว่างนักวิชาการ ผู้เชี่ยวชาญ และผู้เข้าร่วม</p>
            </div>
            <div class="event" id="external2">
                <img src="images2.webp" alt="งานแสดงสินค้านวัตกรรม">
                <h3>งานแสดงสินค้านวัตกรรม</h3>
                <p>ปิดโอกาสให้ผู้เข้าร่วมได้แลกเปลี่ยนประสบการณ์จากการวิจัยหรือการปฏิบัติงานจริง</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; SMART MEDICAL ROOM FOR BANNASAN SCHOOL </p>
    </footer>
</body>

</html>