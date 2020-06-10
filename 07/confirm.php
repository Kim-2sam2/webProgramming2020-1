<?php
session_start();
?>

<?php
    if(isset($_POST['name'])){
        $_SESSION['name'] = $_POST['name'];
    }
    if(isset($_POST['words'])){
        $_SESSION['words'] = $_POST['words'];
    }
    $error=[];

    if(empty($_SESSION['name'])){
        $error[] = "이름을 입력해주세요.";
    } else{
        $name = trim($_SESSION['name']);
    }
    if(empty($_SESSION['words'])){
        $error[] = "좋아하는 단어를 입력해주세요.";
    } else{
        $words = trim($_SESSION['words']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>확인페이지</title>
</head>
<body>
    <div>
        <?php if(count($error)>0){?>
            <span class="error"><?php echo implode('<br>', $error);?></span><br>
            <span>
                <input type="button" value="돌아가기" onclick="location.href='input.html'">
            </span>
        <?php } else {?>
            <span>
                이름 : <?php echo($name);?><br>
                좋아하는 단어 : <?php echo($words);?><br>
                <input type="button" value="돌아가기" onclick="location.href='input.html'">
                <input type="button" value="송신한다" onclick="location.href='receive.php'">
            </span>
        <?php } ?>
    </div>
</body>
</html>
    