<?php
include("./include.php");

if(!$_SESSION['user_id']){
    echo("
    <script>
        alert('로그인이 필요한것 같아요!');
        location.replace('board_login.php');
    </script>
    ");
}

if(trim($_POST['b_title'])==""){
    echo("
    <script>
        alert('글 제목을 입력해 주세요.ㅎㅎ');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['b_contents'])==""){
    echo("
    <script>
        alert('글 내용을 입력해 주세요.ㅎㅎ');
        history.back();
    </script>
    ");
    exit;
}

$sql = "INSERT INTO tb_board SET b_reply = '', m_id = '".$_SESSION['user_id']."', m_name = '".$_SESSION['user_name']."',b_title = '".addslashes(htmlspecialchars($_POST['b_title']))."', b_contents = '".addslashes(htmlspecialchars($_POST['b_contents']))."', b_regdate = now()";
sql_query($sql);
//퀘러에러 났으니까 여기서 뭐 수정해봐
$b_idx = mysqli_insert_id($connect);

$sql = "update tb_board set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);

?>

<script>
    alert("글을 저장했습니다.");
    location.replace("./board_list.php");
</script>