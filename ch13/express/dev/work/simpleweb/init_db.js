const fs = require('fs').promises;
const createConnection = require('./db.js');

(async () => {
    const connection = await createConnection()

    for (file of ['drop_table.sql', 'create_table.sql']) {
        const sql = await fs.readFile(file, "utf-8");
        const result = await connection.execute(sql);
    }

    connection.close();
    console.log("テーブルが初期化されました");
})()
