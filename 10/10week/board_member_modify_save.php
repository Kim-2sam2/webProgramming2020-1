<?php
include("./include.php");

if(!$_SESSION['user_id']){
    echo("
    <script>
        alert('로그인이 필요한것 같아요!');
        history.back();
    </script>
    ");
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

$sql = "update tb_member set m_pass = '".$_POST['m_pass']."'where m_id = '".$_SESSION['user_id']."'";
sql_query($sql);

?>

<script>
    alert("뭘 바꾼거에요? 아무튼 바뀐것 같아요.");
    location.replace("index.php");
</script>