<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="D:\zuoye\webka\project\icon">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <title>Talkezy</title>
</head>
<body>
 <header>
        <nav>
            <div class="logo">
                <a href="http://localhost:8081/login/talkzy.php"><img src="icon\mainlogo.png" width="120px"></a>
            </div>
            <div class="menu">
                    <ul>
                        <li><a href="http://localhost:8081/login/talkzy.php">home</a></li>
                        <li><a href="#">found</a></li>
                        <li><a href="search.html">research</a></li>
                        <li><a href="#">answer</a></li>
                    </ul>
            </div>
            <div class="searchBar">
                    <input type="text" placeholder="lets search for interesting questions" />
                    <button type="button" class="searchBtn">
                        <a href='http://localhost:8081/login/search.php'><img src="icon/search.png" width="15px"></a>
                    </button>
            </div>
            <div>
                <button type="button" class="writeSub" onclick="window.open('http://localhost:8081/login/write.php')">Write</button>
            </div>
            <div>
                <?php if(isset($_SESSION['username'])) : ?>
                    <div class="afterlogin">
                        <div class="notification">
                                <div float="left">
                                    <a href="http://127.0.0.1:5501/project/noti.html"><img src="icon/noti.png" width="25px"></a>
                                </div>
                        </div>
                        <div class="userinfo">
                            <button class="dropbtn"><img src="pic/read.jpg" width="35px"></button>
                            <div class="dropdown-content">
                                <a href="http://127.0.0.1:5501/project/pi.html"><img src="icon/personal.png" width="25px" style="margin-right: 5px;">personal page</a>
                                <a href="logout.php"><img src="icon/logout.png" width="20px" style="margin-right: 5px;">logout</a>
                            </div>
                        </div>
                        <a href="#">Welcome home，<?php echo $_SESSION['username']; ?></a>
                    </div>
                <?php else: ?>
                    <div class="login">
                        <button type="button" class="btnLogin">
                            <a href="http://localhost:8081/login/index.html?to=register">
                                <img src="icon/regis.png" width="30px"></a>
                            <span>Register</span>
                        </button> 
                        <button type="button" class="btnLogin">
                            <a href="http://localhost:8081/login/index.html?to=login">
                            <img src="icon/login.png" width="25px"></a>
                            <span>Login</span>
                        </button>
                    </div>
                <?php endif ?>
    </header>
    <?php 
    // include_once('project\talkzy.html');
    ?>
</body>
</html>