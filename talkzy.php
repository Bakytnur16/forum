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
<!-- <scrip>
         $(function(){
            $("#head").load('project/navi.html');
            //  $("#head").load('http://localhost:8081/login/navi.php',{"username":"username"});
            //   $(".headerpage").load('http://127.0.0.1:5501/project/navi.html');
            //  $(".footerpage").load("http://www.load.com/footer.html");
         });
 </script> -->
</head>

<body>
    <div>
        <?php
            include 'navi.php';
        ?>
    </div>
    <!-- <div id="head"><script type="text/javascript" src="http://localhost:8081/login/navi.php"></script></div> -->
    <!-- <iframe src="http://localhost:8081/login/navi.php" frameborder="0" scrolling="no" marginheight="10px"></iframe> -->
    <main>
        <div class="ma">
            <article> 
                <div id="note" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#note" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#note" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#note" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#note" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#note" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#note" data-bs-slide-to="5"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="pic/1.jpg"  class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="pic/2.jpg"  class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="pic/3.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="pic/4.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="pic/5.jpg" class="d-block w-100">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#note" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#note" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <!-- <div class="public">
                </div> -->

                <div class="post">
                    <div class="newPost">
                        <div class="postUser" >
                            <div >
                                <a href="#"><img class="logoUser" src="pic/2.jpg"></a>
                            </div>
                            <div style="margin-left: 12px;">
                                <div class="userName">shuak</div>
                                <p style="color:rgb(134, 120, 120);font-size: 14px;">two minute ago</p>
                            </div>
                            <!-- header -->
                            
                            <!-- <p>User1</p> -->
                        </div>
                        <div class="postInfo">
                            <p>Upskilling is the process of learning additional skills and competencies. It has recently become a buzzword because continuous technological advancement has caused companies to rapidly change the way they operate. This means that employees consistently have to add to their existing knowledge and skill sets to keep up with the new trends and retain business. If employees do not upskill, they will add to the skill gap – the gap between the number of roles that require certain skills and the number of people that actually possess those skills. They might lose their jobs, or their future employability might be threatened.

                                Over the past year, many people have acquired more time to invest in themselves, due to working from home or being furloughed. They have been looking for healthy distractions from work and the pandemic, and this has led to a reported rise in upskilling.</p>
                        </div>
                        <div>
                            <div class="postSet">
                                <div><img class="like" src="icon\like.png" width="30px"></div>
                                <div><img class="comment" src="icon\commen.png" width="30px"></div>
                                <div><img class="share" src="icon\share.png" width="30px"></div>
                                <div style="margin-left: auto;"><img class="collect" src="icon\star.png" width="30px"></div>
                            </div>
                            <div>
                                <!-- <span>
                                    <span>670</span>
                                    views
                                </span> -->
                            </div>
                        </div>
                    </div>

                </div>
            </article>
                <aside>
                    <div class="writeUser">
                        <div>
                            <button style="margin:10px 10px;" onclick="window.open('http://localhost:8081/login/write.html')">
                                <img src="icon/ques.png" width="30px">
                                <div style="font-size: 10px;">answer question</div>
                            </button>
                            <button style="margin-right: 20px;" onclick="window.open('http://localhost:8081/login/write.php')">
                                <img src="icon/write.png" width="30px">
                                <div style="font-size: 10px;">write post</div>
                            </button>
                            <button>
                                <img src="icon/topic.png" width="30px" onclick="window.open('http://127.0.0.1:5501/project/write.html')">
                                <div style="font-size: 10px;">create topic</div>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="bookU">
                        <a target="_blank" href="#" width="30px">Bookmarks</a>
                        <a target="_blank" href="#">Drafts</a>
                    </div> -->
                    <div class="hotTopic">
                        <div><span>#Hot Topic</span></div>
                        <div class="topic">
                            <ul>
                                <li><a href="#">#New year</a></li>
                                <li><a href="#">#Weather</a></li>
                                <li><a href="#">#Astana</a></li>
                                <li><a href="#">#LOL</a></li>
                                <li><a href="#">#football</a></li>
                                <li><a href="#">#Song</a></li>
                                <li><a href="#">#Kazakstan</a></li>
                                <li><a href="#">#Cat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="recomUser">
                        <div><span>Recommend users</span></div>
                        <div class="userRecom">
                            <ul>
                                <li><a href="#">
                                    <img class="logoUser" src="pic/2.jpg" style="margin-right:10px;">User1</a></li>
                                <li><a href="#">
                                    <img class="logoUser" src="pic/2.jpg" style="margin-right:10px;">User2</a></li>
                                <li><a href="#">
                                    <img class="logoUser" src="pic/2.jpg" style="margin-right:10px;">User3</a></li>
                                <li><a href="#">
                                    <img class="logoUser" src="pic/2.jpg" style="margin-right:10px;">User4</a></li>
                                <li><a href="#">
                                    <img class="logoUser" src="pic/2.jpg" style="margin-right:10px;">User5</a></li>
                            </ul>
                        </div>
                    </div>
                    <footer>
                        <p style="font:14px grey">
                            Auther:shuak
                            contact us:
                            shuakbakytnur@gmail.com 
                        </p>
                    </footer>
                </aside>
        </div>
    </main>
</body>

</html>