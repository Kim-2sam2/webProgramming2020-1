function main_list(arr, url) {
  var node = document.createElement("li");
  node.className = "content";

  var a = document.createElement("a");
  a.className = "id";
  a.setAttribute("href", "index.php");
  a.innerHTML = "@user1";

  var ul = document.createElement("ul");
  ul.className = "todo";

  var li = document.createElement("li");
  li.innerHTML = "@todo";
}
