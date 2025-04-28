<?php
$host="localhost";
$username="root";
$password="";
$dbname="tourists";

$conn = new mysqli($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Get the place from URL query parameter
// if (isset($_GET['place'])) {
//     $place = $_GET['place'];
// } else {
//     echo "No place selected.";
// }

?>
