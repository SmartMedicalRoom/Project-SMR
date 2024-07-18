
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Dan Aleko</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM6+51TlT78p3/8D59ogz5qI1a8Jp3R6a5xIX45" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(BG.png);
            background-size: cover;
            background-position: center;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <form method="POST" action="insert_register.php">
            <h1>สมัครสมาชิก</h1>
            <div class="input-box">
                <input type="text" id="firstname" name="firstname" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="text" id="lastname" name="lastname" placeholder="lastname" required>
            </div>
            <div class="input-box">
                <input type="number" id="phone" name="phone" maxlength="10" placeholder="Phone" required>
            </div>
            <div class="input-box">
                <input type="text" id="username" name="username" maxlength="10" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn">บันทึก</button>
            <button type="reset" name="cancel" class="btn cancel">ยกเลิก</button>
            <div class="register-link">
                <p>ลงชื่อเข้าใช้งาน <a href="login.php">ลงชื่อเข้าใช้งาน</a></p>
            </div>
        </form>
    </div>
</body>

</html>