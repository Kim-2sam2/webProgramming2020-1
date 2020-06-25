<?php
include 'func.php';
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";

if (!$userid) {
    echo ("
                <script>
                alert('로그인 후 이용해 주세요!');
                location.href='index.php';
                </script>
    ");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>20160705</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/mylist.css" />
    <link rel="stylesheet" type="text/css" href="css/aside.css" />
    <script type="text/javascript" src="scripts/common.js"></script>
    <script type="text/javascript" src="scripts/mylist.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <?php include "header.php"; ?>
        </header>

        <!--main section-->
        <section class="middle">
            <?php include "mylist_board.php"; ?>

            <?php include "aside.php"; ?>

        </section>

        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>
</body>

</html>