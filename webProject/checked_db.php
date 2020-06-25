<?php

include 'func.php';
$index = $_POST["num"];
if (isset($_POST["checked"])) {
    $checked = $_POST["checked"];
} else {
    $checked = $_POST["checked_my"];
}
$con = connectDB();
if (!$checked) {
    $sql = "update todo_20160705 set finish = 1 where num = $index";
} else {
    $sql = "update todo_20160705 set finish = 0 where num = $index";
}
mysqli_query($con, $sql);
mysqli_close($con);

if (isset($_GET['show'])) {
    $index = $_GET["show"];
    echo ("<script> location.href='mylist.php?show=$index'</script>");
} else {
    echo ("<script>history.go(-1);</script>");
}