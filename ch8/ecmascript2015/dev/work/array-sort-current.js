const mountains = ["富士山", "北岳", "奥穂高岳", "間ノ岳", "槍ヶ岳"];

const filtered_mountains = mountains
    .filter(mountain => (mountain.slice(-1) == "岳"))
    .sort();

console.log(filtered_mountains);