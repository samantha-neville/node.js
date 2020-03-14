//set up our server
const express = require('express')
const { Pool } = require('pg')
const app = express()
const port = 3000
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


var sql = "SELECT * FROM users";
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


});   


app.get('/home', function(req, res) {
    res.send("you are home");

});
app.get('/displayAll', function(req, res) {
    res.send("display all yep");

});
app.get('/search', function(req, res) {
    res.send("searchy searchy  loady");

});


//making an endpoint to get all of the people
app.get('/getPerson', function(req, res, next) {
	const id = req.query.id;
    var sql = "SELECT * FROM person WHERE id = $1::int";
    console.log('get person from DB with ID' + id);

    const params = [id];

    //a simple get query from the database
    pool.query(sql, params, function(err, result) {
		// If an error occurred...
		if (err) {
			console.log("Error in query: ")
			console.log(err);
			callback(err, null);
		}

		// Log this to the console for debugging purposes.
		// console.log("Found result: " + JSON.stringify(result.rows));


		// When someone else called this function, they supplied the function
		// they wanted called when we were all done. Call that function now
		// and pass it the results.

		// (The first parameter is the error variable, so we will pass null.)
		// callback(null, result.rows);
	});
  });

app.listen(port, () => console.log(`Example app listening on port ${port}!`))

