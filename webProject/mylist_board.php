<div class="myBoard">
    <div class="myBoard_list">
        <!--show에 파라미터 넘겨주고 check_todo()랑 hide()에서도 적용-->
        <?php
        //include 'func.php';
        //session_start();
        //$userid = $_POST["userid"];
        $con = connectDB();
        $sql = "select L.title, L.num from todoList_20160705 L where L.id = '$userid'";
        $title_query = mysqli_query($con, $sql);
        $test = mysqli_num_rows($title_query);

        while ($title_arr = mysqli_fetch_array($title_query)) {
            $index = $title_arr['num'];
            $title = $title_arr['title'];
            echo ("
                <div class='col' onclick='call_list($index)'>
                $title
                </div>
                ");
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

        <!--popup view-->
        <div class="view">
            <div class="todo_view">
                <?php
                header("Cache-Control: no cache"); //post 전송 후 뒤로가기 에러 제거
                if (array_key_exists('col', $_POST)) {
                    call_todo($_POST['col']);
                    unset($_POST['col']);
                    echo ("<script> show() </script>");
                }

                function call_todo($index)
                {
                    global $con;
                    $sql = "select L.title, T.content, T.finish, T.num from todo_20160705 T
                    inner join todoList_20160705 L
                    on T.list = L.num
                    where T.list = $index";
                    $todo_query = mysqli_query($con, $sql);
                    $todo_arr = mysqli_fetch_array($todo_query);
                    $title = $todo_arr['title'];
                    mysqli_close($con);

                    echo (" 
                        <div id='title'> $title </div>
                        <button id='close' onclick='hide()'>X</button>
                        <ul id='todo_list'>
                    ");

                    //수정기능 조건문 시작부분(isset($_POST))//
                    do {
                        $index = $todo_arr['num'];
                        $content = $todo_arr['content'];
                        $fin = $todo_arr['finish'];

                        if ($fin) {
                            echo ("
                            <li>
                            <form method='post' id='$index' action='checked_db.php'>
                                <input type='hidden' name='checked' value='$fin' ></input>
                                <input type='hidden' name='num' value='$index'></input>
                            </form>
                        
                            <input class='check' type='checkbox' index='$index' checked='checked onclick='check_todo(this)' />
                            <div id='content' style='text-decoration: line-through'>$content</div>
                        </li>");
                        } else {
                            echo ("
                            <li>
                            <form method='post' id='$index' action='checked_db.php'>
                                <input type='hidden' name='checked' value='$fin'></input>
                                <input type='hidden' name='num' value='$index'></input>
                            </form>
                        
                            <input class='check' type='checkbox' index='$index' onclick='check_todo(this)' />
                            <div id='content'>$content</div>
                            </li>
                            ");
                        }
                    } while ($todo_arr = mysqli_fetch_array($todo_query));

                    echo ("</ul>");
                }
                ?>
            </div>
            <!--todoView-->
        </div>
    </div>
</div>