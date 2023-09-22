let i = 0;
for (let i = 0; i < 10; i++) { /* ここの変数iは、上の変数iと別のもの */
    process.stdout.write(".");
}
console.log();
console.log(i);