const mysql = require('mysql2/promise');

module.exports = createConnection = async () => {
    return await mysql.createConnection({
        host: "db",
        port: 3306,
        user: "root",
        password: "password1234",
        database: "simpleweb"
    });
}
