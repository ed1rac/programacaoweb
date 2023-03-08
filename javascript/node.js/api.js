//conectando a uma API json externa
const https = require('https');
const url = 'https://raw.githubusercontent.com/alexfelipe/imersao-java/json/top250.json';
//fazendo a conexão
https.get(url, (res) => {
    let body = '';
    res.on('data', (d) => {
        body += d;
    });
    res.on('end', () => {
        // Transformando o body em um objeto
        let json = JSON.parse(body);
        // Imprimindo o objeto
        //console.log(json);
        console.log(JSON.stringify(json, null, 2));
    });
}).on('error', (e) => {
    console.error(e);
});
