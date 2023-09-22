console.log("処理 1");
new Promise((resolve, result) => {
    console.log("処理 2");
    resolve();
}).then(() => {
    console.log("処理 1'");
});