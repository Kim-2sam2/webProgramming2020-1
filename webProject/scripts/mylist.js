function addList() {
  var todo = document.getElementsByClassName("todo");
  var textnode = document.createTextNode(todo[0].value);
  var li = document.createElement("LI");
  var node = document.createElement("DIV");
  var list = document.getElementsByClassName("myList");
  node.appendChild(textnode);
  li.appendChild(node);
  list[0].appendChild(li);
  todo[0].value = "";
}

function show() {
  document.getElementsByClassName("view")[0].style.display = "block";
}

function hide() {
  document.getElementsByClassName("view")[0].style.display = "none";
}

function check_todo() {
  var chkbox = document.querySelectorAll("#todo_list .check");
  for (var i in chkbox) {
    if (chkbox[i].checked == true) {
      chkbox[i].nextElementSibling.style.textDecoration = "line-through";
    } else {
      chkbox[i].nextElementSibling.style.textDecoration = "none";
    }
  }
}
