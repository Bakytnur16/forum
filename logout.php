<?php
session_start();
function loginout(){
    unset($_SESSION['username']);
}
loginout();
echo"<script>window.location.href='http://localhost:8081/login/talkzy.php'</script>";
?>