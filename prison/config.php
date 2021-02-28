<?Php

$dbhost_name = "localhost";
$database = "prisonpro"; 
$username = "root";           
$password = "";          


try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


?>