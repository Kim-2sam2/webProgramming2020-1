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


$sql = "select * from tb_board where b_idx = '".$_POST['b_idx']."'";
$result = sql_query($sql);
$data = mysqli_fetch_array($result);

if(!$data['b_idx']){
    echo("
    <script>
        alert('글 .. 없어요!');
        history.back();
    </script>
    ");
}

if(strlen($data['b_reply']) == 3){
    echo("
    <script>
        alert('답글을 더이상 쓸 수 없네요.');
        history.back();
    </script>
    ");
}

$sql2 = "select * from tb_board where b_num = '".$data['b_num']."' and b_reply like '".$data['b_reply']."%' order by b_reply desc limit 1";
$result2 = sql_query($sql2);
$data2 = mysqli_fetch_array($result2);

$last_reply_char = substr($data2['b_reply'], strlen($data['b_reply']), 1);

if($last_reply_char == "Z"){
    echo("
    <script>
        alert('답글을 더이상 쓸 수 없네요.');
        history.back();
    </script>
    ");
}

if(trim($_POST['b_title'])==""){
    echo("
    <script>
        alert('답글 제목을 입력해 주세요.ㅎㅎ');
        history.back();
    </script>
    ");
    exit;
}

if(trim($_POST['b_contents'])==""){
    echo("
    <script>
        alert('답글 내용을 입력해주세요.');
        history.back();
    </script>
    ");
    exit;
}

$b_num = $data['b_num'];
if($last_reply_char){
    $b_reply = $data['b_reply'].chr(ord($last_reply_char)+1);
}else{
    $b_reply = $data['b_reply']."A";
}

$sql = "insert into tb_board set b_num = '".$b_num."', b_reply = '".$b_reply."', m_id = '".$_SESSION['user_id']."', m_name = '".$_SESSION['user_name']."', b_title = '".addslashes(htmlspecialchars($_POST['b_title']))."', b_contents = '".addslashes(htmlspecialchars($_POST['b_contents']))."', b_regdate = now()";
sql_query($sql);

?>

<script>
    alert('답글이 설치되었습니다!');
    location.replace('./board_list.php');
</script>
