<?php
session_start();
$con=mysqli_connect("localhost","root","","login");
if(isset($_POST['submit'])){
    $psw=$_POST['psw'];
    $email=$_POST['email'];
    $select="SELECT*FROM login WHERE email = '$email'";
    $runquery=mysqli_query($con, $select);
    $data=mysqli_fetch_assoc($runquery);

    if($email==$data['email'] && $psw==$data['password']){
        // echo "Login Successfully";
        if($data['role'] === 'admin'){
            $_SESSION['role']= $data['role'];
            $_SESSION['email']= $data['email'];
            header('location:admin/admin_dashboard.php');
        }
        else{
            $_SESSION['email'] = $email;
            header('location:registeration-form.php');
        }
     exit(); 
      }
    else{
        header('location:login.php?msg1= invalid access');
        exit();
    }
}
else{
    header('location:login.php?msg1= invalid access');
}
?>