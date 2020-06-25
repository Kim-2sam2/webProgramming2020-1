<?php
include 'func.php';
$num = $_POST["num"];
$con = connectDB();
$sql = "delete from todo_20160705 where list = $num";
mysqli_query($con, $sql);

$sql = "delete from todoList_20160705 where num = $num";
mysqli_query($con, $sql);

mysqli_close($con);

if (isset($_POST["page"])) {
    $page = $_POST['page'];
    echo ("<script>location.href='board.php?page=$page</script>");
} else {
    echo ("<script>location.href='mylist.php'</script>");
}