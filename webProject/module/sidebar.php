<?php
session_start();
$con = mysqli_connect("localhost", "user_20160705", "12345", "webp_20160705");
$sql = "select * from todoList_20160705 where id = '$userid' order by regist_day limit 1";
$result = mysqli_query($con, $sql);
$num_match = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_match) {
    $list_num = $row["num"];

    $sql = "select T.content, T.finish from todo_20160705 T
    inner join todoList_20160705 L on L.num = T.list
    where L.id = '$userid' and T.list = '$list_num'";
    $result = mysqli_query($con, $sql);

    $num_match = mysqli_num_rows($result);
    echo ("
    <ul id='side_todo_list'>
        <div id='title'>
            title
        </div>
    ");

    while ($todo = mysqli_fetch_array($result)) {
        $content = $todo['content'];
        $fin = $todo['finish'];

        echo ("<script> console.log('$todo'); </script>");
        echo ("<script> view_todo('$content', $fin) </script>");
    }
    echo ("</ul>");
}
mysqli_close($con);