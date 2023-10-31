<?php
    include("../config/config.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($username) && !empty($password)){
        $query = mysqli_query($sambung, "select * from dosen where username='$username' &&  password='$password'");
        $result = mysqli_num_rows($query);
        if($result>0){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["status"] = "login";
                header("location:../pages/dashboard.php");
        }else{
            $_SESSION["error"] = "username atau password anda salah";
                header("location:./index.php?loginerr");
        }
    }else{
        header("location:../index.php?app=error");
    }

?>