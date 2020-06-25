<?php
include 'func.php';
session_start();

$con = connectDB();
$sql = "select * from user_20160705";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>20160705</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
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
            <div id="admin_box">
                <ul id="member_list">
                    <li>
                        <span class="col1">아이디</span>
                        <span class="col2">이름</span>
                        <span class="col3">이메일</span>
                        <span class="col4">삭제</span>
                    </li>
                    <?php
                    $total = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_array($result)) {
                        $userid = $row["id"];
                        $username = $row["name"];
                        $email = $row["email"];
                        $admin = $row["admin"];
                        if ($admin) continue;
                    ?>
                    <li>
                        <form method="post" action="admin_user_update.php">
                            <span class="col1"><?= $userid ?></span>
                            <span class="col2"><?= $username ?></span>
                            <span class="col3"><?= $email ?></span>
                            <span class="col4"><button type="button"
                                    onclick="location.href='admin_user_delete.php?userid=<?= $userid ?>'">삭제</button></span>
                        </form>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
        <footer>
            <?php include "footer.php"; ?>

        </footer>
    </div>
</body>

</html>