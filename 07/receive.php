<?php
session_start();
$error=[];

if(!empty($_SESSION['name']) && !empty($_SESSION['words'])){
    $name = $_SESSION['name'];
    $words = $_SESSION['words'];
}else{
    $error[]="세션 오류입니다.";
}

killSession();
?>

<?php
function killSession(){
    $_SESSION = [];

    if(isset($_COOKIE[session_name()])){
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time()-36000, $params['path']);
    }

    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>완료페이지</title>
</head>
<body>
    <?php if (count($error)>0) {?>
        <span class="error"><?php echo implode('<br',$error);?></span><br>
        <a href="input.html">첫페이지로 돌아간다</a>
    <?php }else{?>
        <span>
            다음과 같이 받았습니다. 고맙습니다.
            <HR>
            <span>
                이름 : <?php echo ($name); ?><br>
                좋아하는 단어 : <?php echo ($words); ?><br>
                <a href="input.html">첫페이지로 돌아간다</a>
            </span>
        </span>
    <?php }?>
</body>
</html>