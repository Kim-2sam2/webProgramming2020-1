<?php
include("./include.php");

$_SESSION=[];
session_destroy();
?>

<script>
    alert("로그아웃 완료 @.@");
    location.replace("board_login.php");
</script>