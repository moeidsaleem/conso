
var express = require('express');
var app = express();


// server setup

app.use(express.static(__dirname + '/public'));




app.listen(8000);
console.log('working on 8000');