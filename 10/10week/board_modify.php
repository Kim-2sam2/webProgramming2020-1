<?php
// 1. include.php 불러오기
include ("./include.php");

// 2. 로그인 안한 회원은 로그인 페이지로 보내기
if(!$_SESSION['user_id']){
    echo("
    <script>
        alert('로그인 하셔야 합니다.');
        history.back();
    </script>
    ");
}

// 3. 글 데이터 불러오기
$sql = "select * from tb_board where b_idx = '".$_GET['b_idx']."'";
$result = sql_query($sql);
$data = mysqli_fetch_array($result);

// 4. 글이 없으면 메세지 출력후 되돌리기
if(!$data['b_idx']){
    echo("
    <script>
        alert('존재하지 않는 글 입니다.');
        history.back();
    </script>
    ");
}

// 5. 본인의 글이 아니면 메세지 출력후 되돌리기
if($data['m_id'] != $_SESSION['user_id']){
    echo("
    <script>
        alert('본인의 글이 아닙니다.');
        history.back();
    </script>
    ");
}

// 5. 글 수정 화면 출력
?>

<br/>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" style="font-zise:15px;font-weight:bold;">작성글 수정</td>
    </tr>
</table>
<br/>
<form name="bWriteForm" method="post" action="./board_modify_save.php" style="margin:0px;">
<input type="hidden" name="b_idx" value="<?php echo($data['b_idx']); ?>">
<table style="width:1000px;height:50px;border:0px;">
    <tr>
        <td align="center" valign="middle" style="width:200px;height:50px;background-color:#CCCCCC;">글 제목</td>
        <td align="left" valign="middle" style="width:800px;height:50px;"><input type="text" name="b_title" style="width:780px;" value="<?php echo($data['b_title']); ?>"></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:200px;height:200px;background-color:#CCCCCC;">글 내용</td>
        <td align="left" valign="middle" style="width:800px;height:200px;">
        <textarea name="b_contents" style="width:800px;height:200px;"><?php echo($data['b_contents']) ?></textarea>
        </td>
    </tr>
    <!-- 4. 글쓰기 버튼 클릭시 입력필드 검사 함수 write_save 실행 -->
    <tr>
        <td align="center" valign="middle" colspan="2"><input type="button" value=" 글수정 " onClick="write_save();">&nbsp;&nbsp;&nbsp;<input type="button" value=" 뒤로가기 " onClick="history.back();"></td>
    </tr>
</table>
</form>
<script>
// 5.입력필드 검사함수
function write_save()
{
    // 6.form 을 f 에 지정
    var f = document.bWriteForm;

    // 7.입력폼 검사

    if(f.b_title.value == ""){
        alert("글 제목을 입력해 주세요.");
        return false;
    }

    if(f.b_contents.value == ""){
        alert("글 내용을 입력해 주세요.");
        return false;
    }

    // 8.검사가 성공이면 form 을 submit 한다
    f.submit();

}
</script>