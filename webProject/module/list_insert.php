<?php
session_start();
$title = $_POST["title"];
$max = $_POST["max"];

//insert todoList
//return todoList.num

for ($i = 1; $i <= $max; $i++) {
    if (!isset($_POST[$i])) continue;
    $tmp = $_POST[$i];
    //insert todo
    //todo.content = tmp
    //todo.list = todoList.num
}