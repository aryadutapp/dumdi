<?php

// Connect to the Postgres database
$dbhost = "ep-odd-paper-540852-pooler.us-east-1.postgres.vercel-storage.com";
$dbname = "verceldb";
$dbuser = "default";
$dbpassword = "xXk9cTjer8uA";
$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpassword options=endpoint=ep-odd-paper-540852");

// Get all the rows from the table
$sql = "SELECT * FROM data_customer";
$result = pg_query($conn, $sql);

// Echo all the rows
while ($row = pg_fetch_assoc($result)) {
    echo $row['column_name'] . PHP_EOL;
}

// Close the connection
pg_close($conn);

?>
