<div class="myBoard">
    <div class="myBoard_list">
        <?php
        //include 'func.php';
        //session_start();
        //$userid = $_POST["userid"];
        $con = connectDB();
        $sql = "select L.title, L.num from todoList_20160705 L where L.id = '$userid'";
        $title_query = mysqli_query($con, $sql);
        $test = mysqli_num_rows($title_query);

        while ($title_arr = mysqli_fetch_array($title_query)) {
            $list_index = $title_arr['num'];
            $title = $title_arr['title'];
            echo ("
                <div class='col' onclick='show($list_index)'>
                $title
                </div>
                
            ");
            call_todo($list_index);
        }
        if (isset($_GET['show'])) {
            $i = $_GET["show"];
            echo ("<script>show($i);</script>");
        }
        ?>
    </div>

    <div class="viewer">
        <!--default view-->
        <form class="insert_view" name="insert_list" method="post" action="mylist_insert.php">
            <div class="input_form">
                <input type="text" name="title" class="title" placeholder="제목" />
                <input type="text" class="todo" placeholder="할 일" />
                <div id="button_div">
                    <button type="button" class="add" onclick="addList()">
                        ADD
                    </button>
                </div>
            </div>
            <div class="insert_form">
                <input type="hidden" id="max" name="max"></input>
                <ul class="myList" index="0">

                </ul>
                <div id="button_div">
                    <input type="submit" value="저장" />
                </div>
            </div>
        </form>
    </div>

    <!--popup view-->
    <?php
    function call_todo($list_index)
    {
        global $con;
        $sql = "select L.title, L.num as todoList_num, T.content, T.finish, T.num as todo_num from todo_20160705 T
                    inner join todoList_20160705 L
                    on T.list = L.num
                    where T.list = $list_index";
        $todo_query = mysqli_query($con, $sql);
        $todo_arr = mysqli_fetch_array($todo_query);
        $title = $todo_arr['title'];


        $num = $todo_arr['todoList_num'];

        echo (" 
                    <div class='view' id='$list_index'>
                    <div class='todo_view'>
                    <div id='del'>
                    <form method='post' id='delete_$list_index' action='mylist_delete.php'>
                    <input type=hidden name='num' value=$num></input>
                    </form>
                    <div id='del_btn' onclick='del($list_index)'>삭제</div>
                    </div>   
                        <div id='title'> $title </div>
                        
                        <button id='close' onclick='hide($list_index)'>X</button>
                        <ul id='todo_list'>
                    ");

        do {
            $todo_index = $todo_arr['todo_num'];
            $content = $todo_arr['content'];
            $fin = $todo_arr['finish'];

            if ($fin) {
                echo ("
                            <li>
                            <form method='post' id='$todo_index' action='checked_db.php?show=$list_index'>
                                <input type='hidden' name='checked_my' value='$fin' ></input>
                                <input type='hidden' name='num' value='$todo_index'></input>
                                <input type='hidden' name='url' value='mylist.php'></input>
                            </form>
                        
                            <input class='check' type='checkbox' index_my='$todo_index' checked='checked' onclick='check_todo_my(this)' />
                            <span id='content' style='text-decoration: line-through'>$content</span>
                        </li>");
            } else {
                echo ("
                            <li>
                            <form method='post' id='$todo_index' action='checked_db.php?show=$list_index'>
                                <input type='hidden' name='checked_my' value='$fin'></input>
                                <input type='hidden' name='num' value='$todo_index'></input>
                                <input type='hidden' name='url' value='mylist.php'></input>
                            </form>

                            <input class='check' type='checkbox' index_my='$todo_index' onclick='check_todo_my(this)' />
                            <span id='content'>$content</span>
                            </li>
                            ");
            }
        } while ($todo_arr = mysqli_fetch_array($todo_query));

        echo ("
                    </ul>
                    </div>
                    <!--todoView-->
                    </div>
                    <!--view-->
                    
            ");
    }
    ?>


</div>
<?php mysqli_close($con); ?>