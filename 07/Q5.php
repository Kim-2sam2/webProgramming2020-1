<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q5</title>
</head>
<body>
    <?php
        $table = $_GET["table"];
        if($table == "free"){
            $borad_title = "자유게시판";
        } else {
            $borad_title = "공지사항";
        }
    ?>
    <h1><?= $borad_title?></h1>
</body>
</html>