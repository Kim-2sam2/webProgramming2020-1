<div class="myBoard">
    <div class="myBoard_list">
        <div class="col" onclick="show()">
            test
        </div>
        <div class="col" onclick="show()">
            mylist
        </div>
        <div class="col" onclick="show()">
            mylist1
        </div>
        <div class="col" onclick="show()">
            mylist1
        </div>
        <div class="col" onclick="show()">
            mylist1
        </div>
        <div class="col" onclick="show()">
            mylist1
        </div>
        <div class="col" onclick="show()">
            mylist1
        </div>
    </div>

    <div class="viewer">
        <!--default view-->
        <form class="insert_view" name="insert_list" method="post" action="#">
            <div class="input_form">
                <input type="text" class="title" placeholder="제목" />
                <input type="text" class="todo" placeholder="할 일" />
                <div id="button_div">
                    <button type="button" class="add" onclick="addList()">
                        ADD
                    </button>
                </div>
            </div>
            <div class="insert_form">
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
                <div id="title">
                    title
                </div>
                <button id="close" onclick="hide()">X</button>

                <ul id="todo_list">
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">asdasd</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                    <li>
                        <input class="check" type="checkbox" onclick="check_todo()" />
                        <div id="content">123123</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>