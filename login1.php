<?php
// header("Content-type:text/html;charset=utf-8");
//    session_start();
//    if (isset($_POST['Login'])){
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
    $link = mysqli_connect("localhost","root","","user");
    if ($link){
        if(isset($_POST["Login"])){
            mysqli_query($link,'SET NAMES UTF8');
            $username = $_POST['username'];  
            $password = $_POST['password']; 
            $stmt=mysqli_prepare($link, "SELECT password FROM user WHERE name=?");
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->bind_result($pa);
            $stmt->fetch();
            $stmt->close(); 
            if ($pa == $password){
                echo'登陆成功';
            }else{
                echo'登陆失败';
            }
        }
    }
    
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="mainbody middle">
        <from class="form-box front" action="login.php" method="post">
            <div class="divL">
                <h1>Login</h1>
            </div>
            <div>
                <input id="username" required name="username" type="text" placeholder="please enter username length: 6-12 characters"></p>
                <input id="password" required name="password" type="password" placeholder= "please enter password length: 6-12 characters"></p>
                <!-- <button class="btn-submit" type="Submit" name="Login" value="Login"> -->
                    <!-- <a href="#" style="text-decoration: none;color:white;">Login</a></button> -->
                    <button type="Submit" name="Login" value="Login" class="btn-submit" >login</button>
                <input type="checkbox" name="remember" value="yes">seven days auto login
            </div>
            <div>
                <p style="margin-top: 40px;">Don't have account.Click here to <a id="signup">registration</a></p>
                <script type="text/javascript">
                    $("#signup").click(function(){
                    $(".middle").toggleClass("middle-flip");
                    });
                </script>

            </div>
        </from>
        <div id="back">
            <form class="form-box back" action="regis.php" method="post">
                <div>
                    <h1>register</h1>
                </div>
                <div>
                    <input id="username" required name="username" type="text" placeholder="please enter username length: 6-12 characters">
                    <input id="password" required name="password" type="password" placeholder= "please enter password length: 6-12 characters">
                    <input id="password" required name="confirm" type="password" placeholder= "please re-enter the password">
                    <input id="email" required name="email" type="email" placeholder= " please enter your email address,such as:123@gmail.com">
                    <input id="phone" required name="phone" type="tel" placeholder= "please enter your mobile number, 11 Significant Digits">
                    <p style="font-size: 14px;text-align:left; margin-left: 10%;display: flex;">I have read and accept the privacy policy.<input type="checkbox" name="save"></p>
                    <button type="Submit" name="Register" value="Register" class="btn-submit" >registration</button>
                </div>
                <div>
                    <p>Have a account ? Click here to <a id="login">login</a></p>
                    <script type="text/javascript">
                        $("#login").click(function(){
                        $(".middle").toggleClass("middle-flip");
                        });
                        if(location.search.includes('register')){
                            $(".middle").toggleClass("middle-flip");
                        }
                        // console.log(location.search);
                    </script>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>