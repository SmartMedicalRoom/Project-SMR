<?php
include 'condb.php';
$name = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$password=hash('sha512',$password);

$sql = "INSERT INTO member (name, lastname, telephone,username, password,status) 
VALUES ('$name','$lastName','$phone',  '$username', '$password','0')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script> window.location='register.php';</script>";
}else{
    echo "Eror" .$sql . "<br /><br" . mysqli_error($con);
    echo "<script> alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
}

mysqli_close($conn);


?>