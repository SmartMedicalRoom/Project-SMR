<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Noto Sans Thai", sans-serif;
            background-image: url('picture.jpg');
            font-family: "Noto Sans Thai", sans-serif;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: blur(4px);
            height: 100vh;
            width: 100vw;
            overflow: hidden;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
        }
        .btn-secondary {
            width: 100%;
            margin-top: 10px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>สมัครสมาชิก</h2>
        <form method="POST"  action="insert_register.php">
            <div class="mb-3">
                <label for="firstname" class="form-label">ชื่อ</label>
                <input type="text" id="firstname" name="firstname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" id="lastname" name="lastname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                <input type="number" id="phone" name="phone" maxlength="10"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" maxlength="10" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
            <button type="reset" name="cancel" class="btn btn-secondary">ยกเลิก</button>
        </form>
        <a href="login.php">ลงชื่อเข้าใช้งาน</a>
    </div>
</body>
</html>
