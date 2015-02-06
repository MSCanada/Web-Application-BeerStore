<!DOCTYPE html>
<html>
<body>

<?php
$servername = "mysql.1freehosting.com";
$username = "u452418890_wines";
$password = "cricket";
$dbname = "u452418890_wines";
$json_a=json_decode($_GET['subject'],true);
$user_name=$json_a["username"];
$colour= $json_a["colour"];
$phone= $json_a["phone"];
$status= $json_a["status"];
$postal= $json_a["postal"];
$address= $json_a["address"];
$company_name= $json_a["company_name"];
$state= $json_a["state"];
$notes= $json_a["notes"];
$url= $json_a["url"];
$city= $json_a["city"];
$country= $json_a["country"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";




$sql = "INSERT INTO wines (company_name, address, city,state,postal,country,phone,url,notes,status,colour,username)
VALUES ('".$company_name."','".$address."','".$city ."','".$state."','".$postal."','".$country."','".$phone."','".$url."','".$notes."','".$status."','".$colour."','".$user_name."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>  

</body>
</html>