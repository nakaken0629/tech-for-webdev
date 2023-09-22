let func_old = function () {
    console.log(this);
}
let func_arrow = () => {
    console.log(this);
}
const test = {
    func_old: func_old,
    func_arrow: func_arrow,
};

console.log("古い関数");
test.func_old();
console.log("アロー関数");
test.func_arrow();