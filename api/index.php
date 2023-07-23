<?php
// ElephantSQL database credentials
$host = 'stampy.db.elephantsql.com';
$port = '5432';
$username = 'kljxcbtt';
$password = 'PZoyG78XuGYVBSJd6olJX4c73C1yduYV';
$dbname = 'kljxcbtt';

// Establish a connection to the database
$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");

// Check if the connection was successful
if (!$db) {
    die("Connection failed: " . pg_last_error());
}

// Prepare the SQL query
$query = "SELECT * FROM users;";

// Execute the query
$result = pg_query($db, $query);

// Check if the query was executed successfully
if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Fetch and display the data
while ($row = pg_fetch_assoc($result)) {
    echo "Full Name: " . $row['full_name'] . ", Gender: " . $row['gender'] . "<br>";
}

// Close the database connection
pg_close($db);
?>
