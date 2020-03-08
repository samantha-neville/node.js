//set up our server
const express = require('express')
const app = express()
const port = 3000
//make it so we can get the variables
const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: true }));

//this is what is run when the form request is sent
app.get('/math', function(req, res) {
    var num1 = req.query.num1; 
    var num2 = req.query.num2;
    var type = req.query.type;

    console.log(type);
   
    if (type == 'add') { 
        var sum = parseInt(num1) + parseInt(num2);
        res.send("solution: " + num1 + "+" + num2 + "=" + sum);
    }
    if (type == 'multiply') {
        var sum = parseInt(num1) * parseInt(num2);
        res.send("solution: " + num1 + "x" + num2 + "=" + sum);
    }
    if (type == 'subtraction') {
        var sum = parseInt(num1) - parseInt(num2);
        res.send("solution: " + num1 + "-" + num2 + "=" + sum);
    }
    if (type == 'divide') {
        var sum = parseInt(num1) / parseInt(num2);
        res.send("solution: " + num1 + "/" + num2 + "=" + sum);
    }

});

app.get('/calculateRate', function(req, res) {
    var weight = parseFloat(req.query.weight); 
    var type = req.query.type;
    var price = 0;
    console.log(weight, type);
    if (type == 'stamped') {
        if (weight < 1) {
            price = .55;
        }
        else if (weight < 2) {
            price = .70;
        }
        else if (weight < 3) {
            price = .85;
        }
        else if (weight < 3.5) {
            price = 1.00;
        }
        else {
            console.log('too big');
        }
        console.log('price'+price); 
    }
    if (type == 'metered') {
        if (weight < 1) {
            price = .50;
        }
        else if (weight < 2) {
            price = .65;
        }
        else if (weight < 3) {
            price = .80;
        }
        else if (weight < 3.5) {
            price = .95;
        }
        else {
            console.log('too big');
        }
        console.log('price'+price); 
    }
    if (type == 'flats') {
        if (weight < 1) {
            price = 1.00;
        }
        else if (weight < 2) {
            price = 1.20;
        }
        else if (weight < 3) {
            price = 1.40;
        }
        else if (weight < 4) {
            price = 1.60;
        }
        else if (weight < 5) {
            price = 1.80;
        }
        else if (weight < 6) {
            price = 2.00;
        }
        else if (weight < 7) {
            price = 2.20;
        }
        else if (weight < 8) {
            price = 2.40;
        }
        else if (weight < 9) {
            price = 2.60;
        }
        else if (weight < 10) {
            price = 2.80;
        }
        else if (weight < 11) {
            price = 3.00;
        }
        else if (weight < 12) {
            price = 3.20;
        }
        else if (weight < 13) {
            price = 3.40;
        }
        else {
            console.log('too big');
        }
        console.log('price'+price); 
    }
    if (type == 'retail') {
        if (weight < 4) {
            price = 3.80;
        }
        else if (weight < 8) {
            price = 4.60;
        }
        else if (weight < 12) {
            price = 5.30;
        }
        else if (weight < 13) {
            price = 15.90;
        }
        else {
            console.log('too big');
        }
        console.log('price'+price); 

    }
    //here is the stuff that makes it so that we can send our info over to the display page
    app.engine('.html', require('ejs').__express);
    app.set('view engine', 'ejs');
    const params = {weight: weight, price: price, type: type};
    res.render('result', params);

});

app.listen(port, () => console.log(`Example app listening on port ${port}!`))
app.use(express.static('public'))

