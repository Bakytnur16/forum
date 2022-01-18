<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="D:\zuoye\webka\project\icon">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <title>Talkezy</title>
    <script>
        $(function(){
            $("#head").load('http://127.0.0.1:5501/project/navi.html');
            // $(".headerpage").load('http://127.0.0.1:5501/project/navi.html');
            // $(".footerpage").load("http://www.load.com/footer.html");
        });
    </script>
    <style>
        body{
            height:auto;
        }
        /* main{
            margin:0 auto;
            width:60%;
            height:500px;
            border:black 2px solid;
            background-color: white;
        } */
        h1{
            /* margin:0 auto; */
            height: 300px;
            text-align: center;
            font-family:Sans-serif;
        }
    </style>
</body>
<div>
        <?php
            include 'navi.php';
        ?>
    </div>
    <main>
        <h1>Can not find any post</h1>
    </main>
</html>