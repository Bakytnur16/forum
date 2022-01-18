<?php
header("refresh:0;url=http://localhost:8081/login/index.html?to=register");
session_start();
$db = mysqli_connect("localhost","root","","user");
    if (isset($_POST['Register'])) {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        

        if($password == $confirm){
            // function lock_url($txt,$key='blog.qsjob.top'){  
            //     $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";  
            //     $nh = rand(0,64);  
            //     $ch = $chars[$nh];  
            //     $mdKey = md5($key.$ch);  
            //     $mdKey = substr($mdKey,$nh%8, $nh%8+7);  
            //     $txt = base64_encode($txt);  
            //     $tmp = '';  
            //     $i=0;$j=0;$k = 0;  
            //     for ($i=0; $i<strlen($txt); $i++) {  
            //         $k = $k == strlen($mdKey) ? 0 : $k;  
            //         $j = ($nh+strpos($chars,$txt[$i])+ord($mdKey[$k++]))%64;  
            //         $tmp .= $chars[$j];  
            //     }  
            //     return urlencode($ch.$tmp);  
            // }
            $pass = md5($password);
            $sql = "INSERT INTO user(user_name, user_pass, user_email, user_phone) VALUES ('$username', '$pass',' $email','$phone')";
            mysqli_query($db, $sql);

            echo"<script>alert('registration success')</script>";
            echo'<script>window.location.href="http://localhost:8081/login/index.html?to=login"</script>';
        }else{
            echo"<script>alert('The password is incorrectly entered twice')</script>";   
         }
     }
 include('index.html');
?>