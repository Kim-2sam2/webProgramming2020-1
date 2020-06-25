function addList() {
  var todo = document.getElementsByClassName("todo");
  var text = todo[0].value;
  var textnode = document.createTextNode(text);
  var li = document.createElement("LI");
  var node = document.createElement("DIV");
  var button = document.createElement("BUTTON");
  var list = document.getElementsByClassName("myList");

  var index = list[0].getAttribute("index");
  index = parseInt(index) + 1;
  list[0].setAttribute("index", index);
  li.id = index;

  var max = document.getElementById("max");
  max.value = index;

  var hidden = document.createElement("input");
  hidden.type = "hidden";
  hidden.name = index;
  hidden.value = todo[0].value;

  button.className = "remove";
  button.setAttribute("type", "button");
  button.setAttribute("onclick", "remove(this)");
  button.setAttribute("target", index);
  button.innerHTML = "제거";

  node.appendChild(hidden);
  node.appendChild(textnode);
  li.appendChild(node);
  li.appendChild(button);
  list[0].appendChild(li);
  todo[0].value = "";
}

function remove(x) {
  //var target = x.getAttribute("target");
  var feild = x.parentNode;
  document.getElementsByClassName("myList")[0].removeChild(feild);
}

function call_list(index) {
  //show();
  var node = document.getElementsByClassName("todo_view");
  var input = document.createElement("input");
  input.type = "hidden";
  input.name = "col";
  input.value = index;

  var form = document.createElement("form");
  form.method = "post";
  form.appendChild(input);
  form.style.display = "none";
  node[0].appendChild(form);
  //document.body.appendChild(form);
  form.submit();
}

function show(x) {
  //document.getElementsByClassName("view")[0].style.display = "block";
  document.getElementById(x).style.display = "block";
}

function hide(x) {
  //document.getElementsByClassName("view")[0].style.display = "none";
  document.getElementById(x).style.display = "none";
}

function check_todo(x) {
  var index = x.getAttribute("index");
  var form = document.getElementById(index);
  if (x.checked == true) {
    x.nextElementSibling.style.textDecoration = "line-through";
    form.submit();
  } else {
    x.nextElementSibling.style.textDecoration = "none";
    form.submit();
  }
}


function view_todo(content, fin, num) {
  var todo = document.getElementById("side_todo_list");
  var input = document.createElement("INPUT");
  input.className = "side_check";
  input.setAttribute("type", "checkbox");
  input.setAttribute("index", num);
  input.setAttribute("onclick", "check_todo(this)");
  var div = document.createElement("DIV");
  div.innerHTML = content;

  var hidden = document.createElement("input");
  hidden.type = "hidden";
  hidden.name = "checked";
  hidden.value = fin;

  var hidden2 = document.createElement("input");
  hidden2.type = "hidden";
  hidden2.name = "num";
  hidden2.value = num;

  var form = document.createElement("form");
  form.method = "post";
  form.id = num;
  form.action = "checked_db.php";
  form.appendChild(hidden);
  form.appendChild(hidden2);
  if (fin) {
    input.setAttribute("checked", "checked");
    div.style.textDecoration = "line-through";
  }
  var node = document.createElement("LI");
  node.appendChild(form);
  node.appendChild(input);
  node.appendChild(div);
  todo.appendChild(node);
}
