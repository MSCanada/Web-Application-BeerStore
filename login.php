

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





$sql = "SELECT password FROM login where username="."'".$username1."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$password_fromdb=$row["password"];
if($password_fromdb==$password1)
{
	echo "{\"value\":\"correct\"}:end";
}
else
{
echo "{\"value\":\"incorrect\"}:end";

}
        
    }
} else {
    echo "{\"value\":\"Username not Exists\"}:end";
}


$conn->close();






?>  

