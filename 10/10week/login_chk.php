<?php
include("./include.php");

if(isset($_SESSION['user_id'])){
    echo("
    <script>
        alert('로그인이 되어 있습니다.ㅎㅎ');
        history.back();
    </script>
    ");
}

if(trim($_POST['m_id'])==""){
    echo("
    <script>
        alert('아이디를 입력해 주세요.ㅎㅎ');
        history.back();
    </script>
    ");
    exit;
}

if($_POST['m_pass']==""){
    echo("
    <script>
        alert('비밀번호를 입력해 주세요.ㅎㅎ');
        history.back();
    </script>
    ");
    exit;
}

$chk_sql = "select * from tb_member where m_id = '".trim($_POST['m_id'])."'";
$chk_result = sql_query($chk_sql);
$chk_data = mysqli_fetch_array($chk_result);

if($chk_data['m_idx']){
    if($_POST['m_pass'] == $chk_data['m_pass']){
        $_SESSION['user_idx'] = $chk_data['m_idx'];
        $_SESSION['user_id'] = $chk_data['m_id'];
        $_SESSION['user_name'] = $chk_data['m_name'];
    echo("
    <script>
        alert('환영합니다.');
        location.replace('board_list.php');
    </script>
    ");
    exit;
    }else{
        echo("
        <script>
            alert('그건 비번이 틀린것 같네요.');
            history.back();
        </script>
        ");
        exit;
    }
}else{
    echo("
        <script>
            alert('계신거 맞나요?');
            history.back();
        </script>
        ");
        exit;
}
?>
