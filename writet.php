<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="\project\icon"> -->
    <!-- <link href="main.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/arf549nv6l3thjagix5k5lqppikxw1ft9khszcvgwf829j0v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <title>Talkezy</title>
    
    <script>
        tinymce.init({
        // language:'zh_CN',
        selector: 'textarea#image-tools',
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste image imagetools tinydrive wordcount'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image tinydriv',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        });
    </script>
    <style>
        *{
            margin:0;
            padding:0;  
        }
        body {
            background-color: #f6f6f6;
            height: 100%;
        }
        main{
            background-color: #f6f6f6;
            padding-top: 2%;
            /* height: 100%; */
        }
        .write{
            background-color: white;
            width:900px;
            height: 600px;
            margin:0 auto;
            /* border:black 1px solid; */
            border-radius: 16px;
        }
        h2{
            padding-top: 30px;
            font-size:10px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }
        .title{
            height: 60px;
            margin: 0 24px;
            display: flex;
            align-items: center;
        }
        .wpost{
            padding:2% 5%;
            height: 75%;
        }
        span{
            margin-bottom: 8px;
            line-height: 20px;
            display: flex;
            color:grey;
        }
        .contain input{
            padding-left:24px;
            border: none;
            width:80%;
            margin:2px;
            outline-style: none;

        }
        .contain{
            border:1px solid rgb(173, 173, 173);
            border-radius: 8px;
            /* display: inline; */
            /* text-align: center; */
            margin-bottom: 20px;
            
        }
        .contain1{
            margin-bottom: 20px;
            height: 300px;
        }
        .wpost1{
            min-height: 100px;
            position: relative;
            border-radius: 8px;
        }
        .btnPost{
            border-radius: 999px;
            background-color: #06f;
            font-size: 14px;
            line-height: 1.5;
            border: 5px solid;
            color: white;
            width: 80px;
            padding:10px 0;
        }
        .btnDiv{
            text-align: center;
        }
    </style>
</head>
<body>
<div>
        <?php
            include 'navi.php';
        ?>
    </div>
    <main>
        <form class="write" action="write.php" method="post">
            <div class="title">
                <h2>write post</h2>
                <!-- <div>drawf</div> -->
            </div>
            <div class="wpost">
                <div class="tTitle">
                    <span>Tittle</span>
                    <div class="contain">
                        <input id = "title" type="text"  name="title" maxlength="200" auto-height="" placeholder="Please enter the title">
                        <!-- <span>0/200</span> -->
                    </div>
                </div>
                <div class="wpost1">
                    <span>Article</span>
                    <div class="contain1">
                        <textarea  name="text" id="image-tools" style="resize:none;height:200px;">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="btnDiv">
                <button type="submit" class="btnPost" name="public">public</button>
                <!-- <button type="button" class="btnPost">saved</button> -->
            </div>
        </form>
    </main>
</body>
</html>