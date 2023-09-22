/* クラスの宣言 */ class Mountain {
    constructor(options) {
        this.name = options.name;
        this.height = options.height;
    }

    info() {
        return `${this.name} (${this.height}m)`;
    }
}

/* クラスの利用 */
fuji = new Mountain({ name: "富士山", height: 3776 });
console.log(fuji.info());