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

if(trim($_POST['b_idx'])==""){
    echo("
    <script>
        alert('글 .. 없어요!');
        history.back();
    </script>
    ");
    exit;
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

$sql = "select * from tb_board where b_idx = '".$_POST['b_idx']."'";
$result = sql_query($sql);
$data = mysqli_fetch_array($result);

if(!$data['b_idx']){
    echo("
    <script>
        alert('없는 글이에요!');
        history.back();
    </script>
    ");
}
if($data['m_id'] != $_SESSION['user_id']){
    echo("
    <script>
        alert('다른분이 쓴 글은 삭제가 안돼요.');
        history.back();
    </script>
    ");
}

$sql = "update tb_board set b_title = '".addslashes(htmlspecialchars($_POST['b_title']))."', b_contents = '".addslashes(htmlspecialchars($_POST['b_contents']))."' where b_idx = '".$_POST['b_idx']."'";
sql_query($sql);
?>

<script>
    alert("글이 바뀐거에요? 멋져요!");
    location.replace("./board_list.php");
</script>