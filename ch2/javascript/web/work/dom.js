const addArticle = () => {
    /* 追加する<li>タグの作成 */
    let liElement = document.createElement("li");
    let node = document.createTextNode("新しい山");
    liElement.appendChild(node);

    /* <ul>タグに<li>タグを追加する */
    let ulElement = document.getElementById("article");
    ulElement.appendChild(liElement);
}
