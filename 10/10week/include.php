<?php
session_start();

include("./lib.php");

$db_host = "localhost";
$db_user="user1";
$db_pass="pass1";
$db_name="name1";
$db_port="3306";
$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);
?>

<DOCTYPE html>
<html long="kr">
    <head>
        <title>게시판</title>
    </head>
    <body>
        <table style = "width:1000px;height:50px;border:5px #CCCCCC solid;">
            <tr>
                <td align="center" valign = "middle" colspan="3" style="font-size:15px;font-weight:bold;">PHP게시판</td>
            </tr>
            <tr>
                <td align="center" valign = "middle" colspan="3" style="font-size:12px"><a href="./board_list.php">글 목록 보기</a></td>
                <td align="center" valign = "middle" colspan="3" style="font-size:12px"><a href="./board_list.php">
                <?php
                if(isset($_SESSION['user_id'])){
                    echo("<a href='./board_logout.php'>로그아웃</a>");
                }else{
                    echo("<a href='./board_login.php'>로그인</a>");
                }
                ?>
                </td>
                <td align="center" valign = "middle" colspan="3" style="font-size:12px">
                <?php
                if(isset($_SESSION['user_id'])){
                    echo("<a href='./board_member_modify.php'>회원정보 수정</a>");
                }else{
                    echo("<a href='./board_register.php'>회원가입</a>");
                }
                ?>
                </td>
            </tr>
        </table>
    </body>
</html>