<?php
session_start();
$db = mysqli_connect("localhost","root","","user");
if($db){
    if(isset($_POST['Login'])) {
        $username = $_POST['username'];
        $password= $_POST['password'];
        $query = "select * from user where user_name='$username'";
        if($query){
            if($username['user_pass']) == md5($password){
                echo"the same";
                exit;
            }
            else{
                echo"no";
                exit;
            }
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
    //     $query = "select * from user where user_name='$username' and user_pass='$pass'";
    //     if($username['password'])!== md5($password)){

    //     }
    //     $result = $db->query($query);
    //     $rows=$result->fetch_assoc();
    //         if($rows){
    //             $_SESSION['username'] = $username;
    //             echo"<script>alert('Login success')</script>";
    //             echo'<script>window.location.href="http://localhost:8081/login/talkzy.php"</script>';

    //         }else{
    //             echo"<script>alert('The user name or password is wrong!')</script>";}
    // }
        }
else{
        echo"wrong";
    }
    // header("Content-Type: text/html; charset=utf8");
    // if(!isset($_POST["Login"])){
    //     exit("错误执行");
    // }//检测是否有submit操作 

    // $conn = mysqli_connect("localhost","root","","user");
    // $username = $_POST['username'];//post获得用户名表单值
    // $password = $_POST['password'];//post获得用户密码单值

    // if ($username && $password){//如果用户名和密码都不为空
    //          $sql = "select * from user where user_name = '$username' and user_pass='$password'";//检测数据库是否有对应的username和password的sql

    //          $result = $conn->query($sql);//执行sql
    //          $rows=$result->fetch_assoc();//返回一个数值
    //          if($rows){//0 false 1 true
    //             echo"chenggong";
    //             //    header("refresh:0;url=success.php");//如果成功跳转至success.php页面
    //             exit;
    //          }else{
    //             echo "用户名或密码错误";
    //             echo "
    //                 <script>
    //                         setTimeout(function(){window.kk='login.html';},1000);
    //                 </script>

    //             ";//如果错误使用js 1秒后跳转到登录页面重试;
    //          }
             

    // }else{//如果用户名或密码有空
    //             echo "表单填写不完整";
    //             echo "
    //                   <script>
    //                         setTimeout(function(){window.kk='login.html';},1000);
    //                   </script>";

    //                     //如果错误使用js 1秒后跳转到登录页面重试;
    // }

    // $conn->close();//关闭数据库
//         $result = mysqli_query($db,$query);

//         if($result){
//             // session_start();  
//             // $_SESSION['username'] = $username;  
//             echo"<script>alert('Welcome'.$username.'you are successfully logged in')</script>";
//             // echo'<script>window.location.href="http://127.0.0.1:5501/project/project1.html"</script>';  
//         }else{  
//             echo"<script>alert('wrong')</script>";
//             }  }}
// else{
//     echo "not connected";
// }
        // if ($username =="root" && $password =='root'){
        //      $_SESSION['username'] = $username;
        //      header('Location:main.php');
        // }
        //  else{
        //      echo '<script>
        //      alert("用户名或密码错误！")；
        //      location.href="login.php";
        //      </script>';}
        //  }
        // include('index.html?to=login'); 
//     $username = trim($_POST['username']);  
//     $password = trim($_POST['password']); 
   
//    if (($username == '') || ($password == '')){
//        header('refresh:3;url=http://localhost:8081/login/index.html?to=login');
//         echo"用户明或密码为空";
//         exit;
//         }elseif(($username != 'username') || ($password != 'password')){
//             header('refresh:3;url=http://localhost:8081/login/index.html?to=login');
//             echo"密码不正确";
//             exit;
//         }elseif (($username == 'username') && ($password == 'password')){
//             $_SESSION['username'] = $username;
//             $_SESSION['isLogin'] = 1;
//             if ($_POST['remember'] == "yes"){
//                 setcookie('username',$username,time()+7*24*60*60);
//                 setcookie('code',md5($username.md5($password)),time()+7*24*60*60);
//             }else{
//                 setcookie('username','',time()-999);
//                 setcookie('code','',time()-999);
//             }
//             // header('');
//         }
//         }
    // $link = mysqli_connect("localhost","root","","user");
    // if ($link){
    //     if(isset($_POST["Login"])){
    //         mysqli_query($link,'SET NAMES UTF8');
    //         $username = $_POST['username'];  
    //         $password = $_POST['password']; 
    //         $stmt=mysqli_prepare($link, "SELECT password FROM user WHERE name=?");
    //         $stmt->bind_param('s', $username);
    //         $stmt->execute();
    //         $stmt->bind_result($pa);
    //         $stmt->fetch();
    //         $stmt->close(); 
    //         if ($pa == $password){
    //             echo'登陆成功';
    //         }else{
    //             echo'登陆失败';
    //         }
    //     }
    // }
   // include('index.html');
    // session_start();
    // if (isset($_POST['Login'])) {  
    //      $username = $_POST['username'];  
    //      $password = $_POST['password'];  
    //      if ($username =="root" && $password =='root'){
    //          $_SESSION['username'] = $username;
    //          header('Location:main.php');
    //      }
    //      else{
    //          echo '<script>
    //          alert("用户名或密码错误！")；
    //          location.href="login.php";
    //          </script>';}
    //      }
        // $db = new mysqli("localhost","root","","user");  
        //     if($db) {
        //         echo("sucsess");
        //     }else{
        //         echo("failed");}}
    // if (isset($_POST['Login'])) {  
    //      $username = $_POST['username'];  
    //      $password = $_POST['password'];
    //     $query = "select * from user where user_name='$username' and user_pass='$password'"; 
    //     $result = mysqli_query($db,$query);

    //     if($result){
    //         session_start();  
    //         $_SESSION['username'] = $username;  
    //         echo"<script>alert('Welcome'.$username.'you are successfully logged in')</script>";
    //         // echo'<script>window.location.href="http://127.0.0.1:5501/project/project1.html"</script>';  
    //     }else{  
    //         echo"<script>alert('wrong')</script>";
    //         }  
    
        // if(($username == '')  || ($password == '')){  
        //     header('refresh:3;url=login.html');  
        //     echo "Username or password cannot be empty";  
        //     exit;            
        // }elseif(($username != 'user_name')  || ($password != 'user_pass')){  
        //     echo "Username or password is incorrect";  
        //     exit;  
        // }elseif(($username = 'user_name')  || ($password = 'user_pass')){  
        //     echo "Welcome".$username."you are successfully logged in";  
        //     echo'<script>window.location.href="http://127.0.0.1:5501/project/talkzy.html"</script>';  
        // }    
// session_start();
// $db = mysqli_connect("localhost","root","","user");
//     if (isset($_POST['Register'])) {
//         session_start();
//         $username = $_POST['username'];
//         $password = $_POST['password'];
//         $confirm = $_POST['confirm'];
//         $email = $_POST['email'];
//         $phone = $_POST['phone'];

//         if($password == $confirm){
//             $password = md5($password);
//             $sql = "INSERT INTO user(user_name, user_pass, user_email, user_phone) VALUES ('$username', '$password',' $email','$phone')";
//             mysqli_query($db, $sql);

//             echo"<script>alert('registration success')</script>";
//             echo'<script>window.location.href="http://localhost:8081/login/index.html?to=login"</script>';
//         }else{
//             echo"<script>alert('The password is incorrectly entered twice')</script>";
//         }
//      }
        // }
include('index.html');
?>