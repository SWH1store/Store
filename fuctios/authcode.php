<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['register_btn'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
 
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($con , $check_email_query);
     if(mysqli_num_rows($check_email_query_run) > 0){
    $_SESSION["message"]="البريد الاكتروني مسسجل من قبل";
    header('location: ../resgister.php');
    else{
     if($password == $cpassword){
       $insert_query = "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
         $insert_query_run = mysqli_query($con, $insert_query);
           if($insert_query_run){
    $_SESSION["message"]="تم تسجيل الدخول";
    header('Location: ../login.php');
    }
     else{
    $_SESSION["message"]="خطا في تسجيل الدخول";
    header('Location: ../resgister.php');
     }

     }else{
    $_SESSION['message'] = 'كلمة المرور ليست مطابقة';
    header("Location: ../resgister.php");
    }}
    }
    }


else if(isset($_POST['login_btn']))
  {
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $login_query = "SELECT * FROM users WHERE phone='$phone' AND password='$password'";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run) > 0){

    }else{
        $_SESSION["message"]="بيانات الدخول غير صحيحه";
        header('Location: ../login.php')
    }
  }

?>   