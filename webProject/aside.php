<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
?>

<section class="aside">
    <div>
        <?php if (!$userid) { ?>
        <form name="login" method="post" action="module/login.php">
            <input type="text" name="id" class="id" placeholder="아이디" />
            <input type="password" name="pass" class="pw" placeholder="비밀번호" />
            <input type="submit" class="login" value="로그인" />
            <input type="button" class="signup" value="회원 가입" />
        </form>
        <?php } else {
            $info = $username . "님 반갑습니다.";
        ?>
        <div class="info">
            <div class="user"><?= $info ?></div>
            <div class="update">
                <a href="module/info.php">정보수정</a>
            </div>
            <div class="logout">
                <a href="module/logout.php">로그아웃</a>
            </div>
        </div>
        <div class="sidebar">
            <?php include "module/sidebar.php" ?>

        </div>
        <?php } ?>
    </div>
</section>