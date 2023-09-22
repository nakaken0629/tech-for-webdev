const mountains = ["富士山", "北岳", "奥穂高岳", "間ノ岳", "槍ヶ岳"];

/* 作業中の結果の保存場所 */
let filtered_mountains = [];

/* 「岳」で終わる山のみ対象とする */
for (const mountain of mountains) {
    if (mountain.slice(-1) == "岳") {
        filtered_mountains.push(mountain);
    }
}

/* 名前で並び替える */
filtered_mountains.sort();

console.log(filtered_mountains);