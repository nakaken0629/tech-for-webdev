import "./style.scss";

document.getElementById("add_button").onclick = () => {
    /* 追加する <li>タグの作成 */
    var li = document.createElement("li");
    var text = document.createTextNode("新しい山");
    li.appendChild(text);

    /* <ul>タグに <li>タグを追加する */
    var ul = document.getElementById("article");
    ul.appendChild(li);
}
