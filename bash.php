<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="top">
        <div class="logo">
            <ul class="nav">
                <div class="login_info">
                    <a target="_blank" href="bash.php" style="color:#fff;">
                网站首页</a>
                管理员：<?php echo $_SESSION['username']?><a href="logout.php">[zhuxiao]</a>
                </div>
            </ul>
        </div>
    </div>
</body>
</html>