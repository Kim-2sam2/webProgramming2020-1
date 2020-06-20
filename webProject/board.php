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
</head>

<body>
    <div class="wrapper">
        <?php include "module/header.php"; ?>
        <section class="middle">
            <?php include "module/board_box.php"; ?>


            <!--aside의 정보를 계속 가지고 있어야함-->
            <?php include "module/aside.php" ?>

        </section>

        <footer>
            <?php include "module/footer.php" ?>
        </footer>
    </div>
</body>

</html>