<?php

include 'func.php';
$index = $_POST["num"];
$checked = $_POST["checked"];
$con = connectDB();
if (!$checked) {
    $sql = "update todo_20160705 set finish = 1 where num = $index";
} else {
    $sql = "update todo_20160705 set finish = 0 where num = $index";
}
mysqli_query($con, $sql);
mysqli_close($con);
echo ("<script>history.back();</script>");
