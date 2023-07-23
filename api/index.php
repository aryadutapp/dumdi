<?php
// Replace the following variables with your actual PostgreSQL database credentials
$host = 'ep-odd-paper-540852-pooler.us-east-1.postgres.vercel-storage.com';
$port = '5432';
$dbname = 'vercel_db';
$user = 'default';
$password = 'xXk9cTjer8uA';

try {
    // Establish a connection to the PostgreSQL database using libpq key=value syntax
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    if (!$conn) {
        echo "Connection failed";
        exit;
    }

    // Prepare and execute the query to fetch all data from the table
    $query = "SELECT * FROM your_table_name"; // Replace "your_table_name" with your actual table name
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Query execution failed";
        exit;
    }

    // Echo the data
    while ($row = pg_fetch_assoc($result)) {
        echo "ID: {$row['id']}, Full Name: {$row['full_name']}, Gender: {$row['gender']}<br>";
    }

    // Close the connection
    pg_close($conn);

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
