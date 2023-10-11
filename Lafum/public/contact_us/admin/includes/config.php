<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','imagewiz_member');
define('DB_PASS','**Rg082856pg**');
define('DB_NAME','imagewiz_member');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>