<?php
include 'func.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/board.css" />
    <link rel="stylesheet" type="text/css" href="css/aside.css" />
    <script type="text/javascript" src="scripts/common.js"></script>
    <script type="text/javascript" src="scripts/mylist.js"></script>

</head>

<body>
    <div class="wrapper">
        <header>
            <?php include "header.php"; ?>
        </header>

        <section class="middle">
            <div id="board_box">
                <ul id='viewer'>
                    <li>
                        <span class="col1">제목 : </span>
                        <span class="col2">이름 | 날짜</span>
                    </li>

                    <div id="content">
                        <ul>
                            <li id="list"></li>
                        </ul>
                    </div>
                </ul>
                <ul class="buttons">
                    <li>
                        <div onclick=''>좋아요</div>
                    <li>
                        <div onclick=''>목록</div>
                        <!--else-->
                    <li>
                        <div onclick=''>수정</div>
                    <li>
                        <div onclick=''>삭제</div>
                    <li>
                        <div onclick=''>목록</div>
                </ul>
            </div>

            <?php include "aside.php" ?>

        </section>

        <footer>
            <?php include "footer.php" ?>
        </footer>
    </div>
</body>

</html>