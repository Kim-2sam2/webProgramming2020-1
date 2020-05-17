<?php
// 1. include.php 불러오기
include ("./include.php");

// 2. 글 데이터 불러오기
$sql = "select * from tb_board where b_idx = '".$_GET['b_idx']."'";
$result = sql_query($sql);
$data = mysqli_fetch_array($result);

// 3. 글이 없으면 메세지 출력후 되돌리기
if(!$data['b_idx']){
    echo("
    <script>
        alert('존재하지 않는 글 입니다.');
        history.back();
    </script>
    ");
}
// 글 내용 확인 출력
?>
<br/>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" style="font-zise:15px;font-weight:bold;">글 내용 확인</td>
    </tr>
</table>
<br/>
<table cellspacing="1" style="width:1000px;height:50px;border:0px;background-color:#999999;">
    <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">제목</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo($data['b_title']); ?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">작성자</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo($data['m_name']); ?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">작성일</td>
        <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo(substr($data['b_regdate'],0,10)); ?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">내용</td>
        <td align="left" valign="top" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo(nl2Br($data['b_contents'])); ?></td>
    </tr>
</table>
<br/>
<table style="width:1000px;height:50px;">
    <tr>
        <td align="center" valign="middle">
        <input type="button" value=" 목록 " onClick="location.href='./board_list.php?page=<?php echo($_GET['page']); ?>'">
        
        <!-- 5. 로그인 한 경우면 글쓰기, 답글쓰기 버튼 보여주기 -->
        <?php 
        if(isset($_SESSION['user_id'])){
        ?>    
            &nbsp;&nbsp;<input type="button" value=" 글쓰기 " onClick="location.href='./board_write.php';">
            &nbsp;&nbsp;<input type="button" value=" 답글쓰기 " onClick="location.href='./board_reply.php?b_idx=<?php echo($data['b_idx']); ?>';">
        <?php
        
        // 6. 자신의 글이면 삭제, 수정 버튼 보여주기
        if($_SESSION['user_id'] == $data['m_id']){
        ?>
        &nbsp;&nbsp;<input type="button" value=" 수정하기 " onClick="location.href='./board_modify.php?b_idx=<?php echo($data['b_idx']); ?>';">
        &nbsp;&nbsp;<input type="button" value=" 삭제하기 " onClick="board_delete(<?php echo($data['b_idx']); ?>);">
        <?php
        }}?>
        </td>
    </tr>
</table>
<script>
function board_delete(b_idx)
{
    if(confirm('답글을 포함한 글을 삭제 하시겠습니까?')){
        location.href='./board_delete.php?b_idx=' + b_idx;
    }
}
</script>