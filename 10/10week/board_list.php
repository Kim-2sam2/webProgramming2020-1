<?php
// 1. include.php 불러오기
include ("./include.php");
?>

<br/>
<table style="width:1000px;height:50px;border:5px #CCCCCC solid;">
    <tr>
        <td align="center" valign="middle" style="font-zise:15px;font-weight:bold;">게시글 목록</td>
    </tr>
</table>
<br/>
<table cellspacing="1" style="width:1000px;height:50px;border:0px;background-color:#999999;">
    <tr>
        <td align="center" valign="middle" width="5%" style="height:30px;background-color:#CCCCCC;">번호</td>
        <td align="center" valign="middle" width="60%" style="height:30px;background-color:#CCCCCC;">제목</td>
        <td align="center" valign="middle" width="15%" style="height:30px;background-color:#CCCCCC;">글쓴이</td>
        <td align="center" valign="middle" width="20%" style="height:30px;background-color:#CCCCCC;">작성일</td>
    </tr>

<?php

// 2. 페이지 변수 설정
if(isset($_GET['page']) && $_GET['page'] > 0){
    // 현재 페이지 값이 존재하고 0 보다 크면 그대로 사용
    $page = $_GET['page'];
}else{
    // 그 외의 경우는 현재 페이지를 1로 설정
    $page = 1;
}
// 한 페이지에 보일 글 수
$page_row = 10;
// 한줄에 보여질 페이지 수
$page_scale = 10;
// 페이징을 출력할 변수 초기화
$paging_str = "";

// 3. 전체 글 갯수 알아내기
$sql = "select count(*) as cnt from tb_board where 1";
$total_count = sql_total($sql);

// 4. 페이지 출력 내용 만들기
$paging_str = paging($page, $page_row, $page_scale, $total_count);

// 5. 시작 열을 구함
$from_record = ($page - 1) * $page_row;

// 6. 글목록 구하기
$query = "select * from tb_board where 1 order by b_num desc, b_reply asc limit ".$from_record.", ".$page_row;
$result = mysqli_query($connect, $query);

// 7.데이터 갯수 체크를 위한 변수 설정
$i = 0;

// 8.데이터가 있을 동안 반복해서 값을 한 줄씩 읽기
while($data = mysqli_fetch_array($result)){

    // 9. 댓글 앞에 붙을 기호 만들기
    $reply_str = "";
    $reply_depth = strlen($data['b_reply']);
    if ($reply_depth > 0){
        for ($k=0; $k<$reply_depth; $k++){
            $reply_str .= '&nbsp;&nbsp;&nbsp;';
        }
        $reply_str .= '┗';
    }

?>
    
    <tr>
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?php echo(($total_count - (($page - 1) * $page_row) - $i ));?></td>
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?php echo("$reply_str");?>
        <a href="./board_view.php?b_idx=<?php echo("$data[b_idx]");?>&page=<?php echo("$page");?>"><?php echo("$data[b_title]");?></a></td>
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?php echo($data['m_name']);?></td>
        <td align="center" valign="middle" style="height:30px;background-color:#FFFFFF;"><?php echo(substr($data['b_regdate'],0,10));?></td>
    </tr>
    
<?php
    // 10.데이터 갯수 체크를 위한 변수를 1 증가시킴
    $i++;
}

// 11.데이터가 하나도 없으면 
if($i == 0){
?>
    <tr>
        <td align="center" valign="middle" colspan="4" style="height:50px;background-color:#FFFFFF;">게시글이 없습니다.</td>
    </tr>
<?php
}
?>
</table>
<br/>
<table style="width:1000px;height:50px;">
    <tr>
        <td align="center" valign="middle"><?php echo($paging_str); ?></td>
    </tr>
<?php
// 12. 로그인 한 경우면 글쓰기 버튼 보여주기
    if(isset($_SESSION['user_id'])){
?>

    <tr>
        <td align="center" valign="middle"><input type="button" value=" 글쓰기 " onClick="location.href='./board_write.php';"></td>
    </tr>
<?php
    }      
?>
</table>