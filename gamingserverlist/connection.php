
<meta name="viewport" content="width=device-width, initial-scale=.8">

<?php


//error_reporting(0);
//Xammpp on Linux

require_once '/opt/lampp/vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "";
$db = "gamingserverlist";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



/*

require_once 'C:\Users\hidde\vendor\autoload.php';

$servername = "localhost";
$username = "root";
$password = "";
$db = "gamingserverlist";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

*/

// CPANEL

/*
require_once '../vendor/autoload.php';

$servername = "p3plzcpnl480477.prod.phx3.secureserver.net";
$username = "z8yjh28bv856";
$password = "Greenwolf17$";
$db = "gamingserverlist";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
?>