<?php
include 'func.php';
session_start();
$num = $_GET["num"];
$page = $_GET["page"];
$con = connectDB();
$sql = "select L.title, L.id, L.regist_day, L.view, T.content, T.finish from todo_20160705 T
        inner join todoList_20160705 L on L.num = T.list
        where L.num = $num";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
$userid = $row["id"];
$regist_day = $row["regist_day"];
$title = $row["title"];
$view = $row["view"];
//$likes = $row["likes"];
$new_view = $view + 1;
$sql = "update todoList_20160705 set view=$new_view where num=$num";
mysqli_query($con, $sql);
//종료 필수//
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
                    <li id='top'>
                        <span class="col1">제목 : <?= $title ?></span>
                        <span class="col2"><?= $userid ?> | <?= $regist_day ?></span>
                    </li>

                    <li id="content">
                        <ul>
                            <?php
                            do {
                                $content = $row["content"];
                                $finish = $row["finish"];
                                if ($finish) {
                                    echo ("<li><span style='text-Decoration: line-through'>$content<span></li>");
                                } else {
                                    echo ("<li><span>$content<span></li>");
                                }
                            } while ($row = mysqli_fetch_array($result));
                            ?>
                        </ul>
                    </li>
                </ul>
                <ul class="buttons">
                    <?php
                    if ($userid == $_SESSION["userid"]) {
                        echo ("
                            <li>
                                @@post방식으로@@
                                <div onclick='locate('mylist_update.php?num'>수정</div>
                            </li>
                            <li>
                                <div onclick=''>삭제</div>
                            </li>
                            <li>
                                <div onclick = locate('board.php?page=$page')>목록</div>
                            </li>
                        ");
                    } else {
                        echo ("
                            <li>
                                <div onclick=''>좋아요</div>
                            </li>
                            <li>
                                <div onclick= locate('board.php?page=$page')>목록</div>
                            </li>
                        ");
                        //좋아요 -> 이미지로
                        //1. png에서 배경 채운다
                        //2. 두개의 이미지 변환
                        //checkbox 응용
                    }
                    ?>



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