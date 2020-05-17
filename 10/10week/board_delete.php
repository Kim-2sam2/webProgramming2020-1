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


$sql = "select * from tb_board where b_idx = '".$_GET['b_idx']."'";
$resurlt = sql_query($sql);
$data = mysqli_fetch_array($resurlt);
    
if(!$data['b_idx']){
    echo("
    <script>
        alert('글 .. 없어요!');
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

$sql = "delete from tb_board where b_num = '".$data['b_num']."' and b_reply like '".$data['b_reply']."%'";
sql_query($sql);
?>

<script>
    alert("글을 처치했습니다.");
    location.replace("./board_list.php");
</script>