<?php
session_start();
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
    <script type="text/javascript" src="scripts/mylist.js"></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <?php include "header.php"; ?>
        </header>

        <!--main section-->
        <section class="middle">
            <?php include "myboard.php"; ?>

            <!--aside의 정보를 계속 가지고 있어야함-->
            <?php include "aside.php" ?>

        </section>

        <footer>
            <?php include "footer.php" ?>
        </footer>
    </div>
</body>

</html>