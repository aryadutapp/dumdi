
<?php
// Replace the following variables with your actual PostgreSQL database credentials
$host = 'ep-odd-paper-540852-pooler.us-east-1.postgres.vercel-storage.com'; // Usually 'localhost' or provided by Vercel
$port = '5432'; // Usually 5432
$dbname = 'vercel_db';
$user = 'default';
$password = 'xXk9cTjer8uA';

// Replace the following variables with your actual PostgreSQL database credentials
$connectionString = "host=your_postgres_host port=your_postgres_port dbname=your_database_name user=your_database_user password=your_database_password";

try {
    // Establish a connection to the PostgreSQL database using libpq key=value syntax
    $conn = pg_connect($connectionString);

    if (!$conn) {
        echo "Connection failed";
        exit;
    }

    // Prepare and execute the query to fetch all data from the table
    $query = "SELECT * FROM your_table_name";
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

