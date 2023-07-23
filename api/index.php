
<?php
// Replace the following variables with your actual PostgreSQL database credentials
$host = 'ep-odd-paper-540852-pooler.us-east-1.postgres.vercel-storage.com'; // Usually 'localhost' or provided by Vercel
$port = '5432'; // Usually 5432
$dbname = 'vercel_db';
$user = 'default';
$password = 'xXk9cTjer8uA';

try {
    // Build the endpoint parameter for SNI support
    $endpointParam = "endpoint=$host";

    // Establish a connection to the PostgreSQL database with SSL options and endpoint
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password;sslmode=require;$endpointParam");

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the query to fetch all data from the table
    $stmt = $pdo->query("SELECT * FROM your_table_name");

    // Fetch all rows as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Echo the data
    foreach ($rows as $row) {
        echo "ID: {$row['id']}, Full Name: {$row['full_name']}, Gender: {$row['gender']}<br>";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
