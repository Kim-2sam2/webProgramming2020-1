<?php
include 'func.php';
session_start();

$con = connectDB();
$list_index = $_GET["num"];

$sql = "select likes from todoList_20160705 where num = $list_index";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$likes = $row["likes"];
$new_likes = $likes + 1;

$sql = "update todoList_20160705 set likes=$new_likes where num=$list_index";
mysqli_query($con, $sql);
mysqli_close($con);

echo "
<script>
    location.href = 'board_view.php?num=$list_index';
</script>
";
