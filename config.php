<?Php
/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "tictan";       // Your database name
$username = "root";            // Your login userid 
$password = "NEWPASSWORD";            // Your password modifié le 18/06/2019 par FN
//////// End of database details of your server //////
//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 