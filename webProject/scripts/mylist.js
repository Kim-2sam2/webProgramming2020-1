function addList() {
  var todo = document.getElementsByClassName("todo");
  var textnode = document.createTextNode(todo[0].value);
  var li = document.createElement("LI");
  var node = document.createElement("DIV");
  var button = document.createElement("BUTTON");
  var list = document.getElementsByClassName("myList");

  var index = list[0].getAttribute("index");
  list[0].setAttribute("index", index + 1);
  li.id = index;

  button.setAttribute("type", "button");
  button.setAttribute("class", "remove");
  button.setAttribute("onclick", "remove(this)");
  button.setAttribute("target", index);
  button.innerHTML = "제거";
  node.appendChild(textnode);
  li.appendChild(node);
  li.appendChild(button);
  list[0].appendChild(li);
  todo[0].value = "";
}

function remove(x) {
  var target = x.getAttribute("target");
  var feild = x.parentNode;
  console.log(target);
  console.log(feild);
  document.getElementsByClassName("myList")[0].removeChild(feild);
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
    console.log(chkbox[i]);
    if (chkbox[i].checked == true) {
      chkbox[i].nextElementSibling.style.textDecoration = "line-through";
    } else {
      chkbox[i].nextElementSibling.style.textDecoration = "none";
    }
  }
}

function side_check_todo() {
  var chkbox = document.querySelectorAll("#side_todo_list .side_check");
  for (var i in chkbox) {
    console.log(chkbox[i]);
    if (chkbox[i].checked == true) {
      chkbox[i].nextElementSibling.style.textDecoration = "line-through";
    } else {
      chkbox[i].nextElementSibling.style.textDecoration = "none";
    }
  }
}

function view_todo(content, fin) {
  var todo = document.getElementById('side_todo_list');
  var input = document.createElement("INPUT");
  input.setAttribute("class", "side_check");
  input.setAttribute("type", "checkbox");
  input.setAttribute("onclick", "side_check_todo()");
  var div = document.createElement("DIV");
  div.innerHTML = content;

  if (fin) {
    input.setAttribute("checked", "checked");
    div.style.textDecoration = "line-through";
  }
  var node = document.createElement("LI");
  node.appendChild(input);
  node.appendChild(div);
  todo.appendChild(node);
}
