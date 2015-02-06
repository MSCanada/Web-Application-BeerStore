

<?php
$servername = "mysql.1freehosting.com";
$username = "u452418890_wines";
$password = "cricket";
$dbname = "u452418890_wines";
$username1=$_GET['username'];
$password1=$_GET['password'];



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "INSERT INTO login (username, password)
VALUES ('".$username1."','".$password1."')";


if ($conn->query($sql) === TRUE) {
    echo "You are now registered:end";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>  

