var http = require('http');
var url = require('url');


function onRequest(req, res) {
    let q = url.parse(req.url, true).query;

    if (req.url == "/home") {
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write('<html><body><h1>Welcome to the Home Page</h1></body></html>');
        res.end();
    } else if (req.url == "/getData") {
        res.writeHead(200, {'Content-Type': 'application/json'});
        res.write(JSON.stringify({"name":"Brian Earl","class":"cse341"}));
        res.end();
    } else if (req.url == "/add?num1=" + q.num1 + "&num2=" + q.num2 + "&dType=" + q.dType) {
        let sum = parseInt(q.num1) + parseInt(q.num2);
        if (q.dType == "html") {
            let msg = `${q.num1} plus ${q.num2} is ${sum}`;

            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write(`<html><body><h1>${msg}</h1></body></html>`);
            res.end();
        }
        if (q.dType == "json") {
            res.writeHead(200, {'Content-Type': 'application/json'});
            res.write(JSON.stringify({"num1": q.num1,"num2": q.num2, "sum": sum}));
            res.end();
        }
    } else if (req.url == "/multiply?num1=" + q.num1 + "&num2=" + q.num2 + "&dType=" + q.dType) {
        let product = parseInt(q.num1) * parseInt(q.num2);
        if (q.dType == "html") {
            let msg2 = `${q.num1} times ${q.num2} is ${product}`;

            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write(`<html><body><h1>${msg2}</h1></body></html>`);
            res.end();
        }
        if (q.dType == "json") {
            res.writeHead(200, {'Content-Type': 'application/json'});
            res.write(JSON.stringify({"num1": q.num1,"num2": q.num2, "sum": product}));
            res.end();
        }
    } else { 
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.write("Page Not Found");
        res.end();
    }
}

var server = http.createServer(onRequest);
server.listen(8888);