import got from 'got';

const url = 'https://www.impress.co.jp/';
const response = await got(url);
console.log(response.body);
