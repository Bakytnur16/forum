<?php
$db = mysqli_connect("localhost","root","","user");
    if($db){
        if (isset($_POST['public'])) {
            session_start();
            $title = $_POST['title'];
            $text = $_POST['text'];
            if($title != NULL && $text !=NULL ){
                $sql = "INSERT INTO article(art_title, art_content) VALUES ('$title', '$text')";
                mysqli_query($db, $sql);
                 echo"<script>alert('Public success')</script>";
                 header("refresh:0;url=write.php");
                }else{
                    echo"<script>alert('The title or context can not null')</script>";
                } }
            }
    else{
         echo"no";
     }
include('writet.php');
?>