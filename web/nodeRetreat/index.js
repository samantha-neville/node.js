//set up our server and all that jazzy stuff
const express = require('express')
const { Pool } = require('pg')
const app = express()
const port =  process.env.PORT ||3000
const connectionString = process.env.DATABASE_URL || "postgres://zbysucmtpsrwvw:0ff68dab033be013e3f2d3b2aaa6939b8bad8b63015892293d1176b827c32da8@ec2-3-224-165-85.compute-1.amazonaws.com:5432/d11jjk2h0d7bcm?ssl=true";
const pool = new Pool({connectionString: connectionString});
var router = express.Router();
var pg = require('pg');
module.exports = router;

//make it so we can get the variables
const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: true }));
//decide where static files come from
app.use(express.static('public'))  
//decide where our views (ejs stuff) comes from
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

/****************************************************************
 * HOME - where the app will go when a form requests /search
 ****************************************************************/
app.get('/home', function(req, res) {
    res.send("you are home");

});
/****************************************************************
 * DISPLAY ALL - where the app will go when a form requests /search
 ****************************************************************/
app.get('/displayAll', function(req, res) {
    
    var sql = "SELECT * FROM retreats";
    //a simple get query from the database
    pool.query(sql, function(err, result) {
        // If an error occurred...
        if (err) {
            console.log("Error in query: ")
            console.log(err);
        }

        // Log this to the console for debugging purposes.
        console.log("Back from DB with result:");
        console.log(result.rows);
        var jsonRetreats = JSON.stringify(result.rows);
        // Set up a JSON object of the values we want to pass along to the EJS result page
        const params = {jsonRetreats: jsonRetreats};
        displayRetreats(params, res);


    }); 
    // res.send("display all yep");


});


/****************************************************************
 * DISPLAY SEARCH - where the app will go when a form requests /displaySearch
 ****************************************************************/
app.get('/displaySearch', function(req, res) {
    var type = req.query.type;
    var start_date = req.query.start_date;
    var end_date = req.query.end_date;
    console.log(type, start_date, end_date);
    if (start_date == '' || end_date == '') {
        var sql = "SELECT * FROM retreats WHERE type=" + "'" + type + "'";
    }
    else {
        var sql = "SELECT * FROM retreats WHERE type="  + "'" + type + "'" +  "AND start_date >="  + "'" + start_date + "'" +  "AND start_date <="  + "'" + end_date + "'" +  "AND end_date >="  + "'" +  start_date  + "'" + "AND end_date <=" + "'" +  end_date + "'";
    }
    //a simple get query from the database
    pool.query(sql, function(err, result) {
        // If an error occurred...
        if (err) {
            console.log("Error in query: ")
            console.log(err);
        }

        var jsonRetreats = JSON.stringify(result.rows);
        const params = {jsonRetreats: jsonRetreats};
        displaySearch(params, res);


    }); 
    // res.send("display all yep");


});


//listen up
app.listen(port, () => console.log(`Example app listening on port ${port}!`))



/****************************************************************
 * DISPLAY RETREATS - callback function that displays retreats nicely
 ****************************************************************/
function displayRetreats(params, res) {
        // Render the response, using the EJS page "result.ejs" in the pages directory
        // Makes sure to pass it the parameters we need.
        res.render('displayAll', params);
}


/****************************************************************
 * DISPLAY SEARCH RESULTS - callback function that displays retreats nicely
 ****************************************************************/
function displaySearch(params, res) {
    // Render the response, using the EJS page "result.ejs" in the pages directory
    // Makes sure to pass it the parameters we need.
    res.render('displaySearch', params);
}
