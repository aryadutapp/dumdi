<?php

// Connect to the Postgres database
$dbhost = "ep-odd-paper-540852-pooler.us-east-1.postgres.vercel-storage.com";
$dbname = "verceldb";
$dbuser = "default";
$dbpassword = "xXk9cTjer8uA";
$dbopt = "endpoint=ep-odd-paper-540852";

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpassword options=$dbopt");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Prepare the SQL query
$query = "SELECT * FROM data_customer;";

// Execute the query
$result = pg_query($conn, $query);

// Check if the query was executed successfully
if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Fetch and display the data
while ($row = pg_fetch_assoc($result)) {
    echo "Full Name: " . $row['full_name'] . ", Gender: " . $row['gender'] . "<br>";
}

// Close the database connection
pg_close($conn);
?>
