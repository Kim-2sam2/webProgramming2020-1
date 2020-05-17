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

if($_POST['m_name']==""){
    echo("
    <script>
        alert('이름을 입력해 주세요.ㅎㅎ');
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


if($_POST['m_pass'] != $_POST['m_pass2']){
    echo("
    <script>
        alert('비밀번호 그게 맞나요?');
        history.back();
    </script>
    ");
    exit;
}


$chk_sql = "select * from tb_member where m_id = '".trim($_POST['m_id'])."'";
$chk_result = sql_query($chk_sql);
$chk_data = mysqli_fetch_array($chk_result);


if($chk_data['m_idx']){
    echo("
    <script>
        alert('오, 이미 있는 아이디에요!');
        history.back();
    </script>
    ");
    exit;
}

$sql = "insert into tb_member (m_id,m_name,m_pass) values ('".trim($_POST['m_id'])."','".trim($_POST['m_name'])."','".$_POST['m_pass']."')";
sql_query($sql);

?>
<script>
    alert("우리와 함께해요!");
    location.replace("board_login.php");
</script>