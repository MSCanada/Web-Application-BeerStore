

<?php
$servername = "mysql.1freehosting.com";
$username = "u452418890_wines";
$password = "cricket";
$dbname = "u452418890_wines";

$test="{\"Android\":[";
$user_name=$_GET['user_name'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "SELECT * FROM wines where username='".$user_name."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$test=$test."{\"company_name\":"."\"".$row["company_name"]."\"".",\"colour\":"."\"".$row["colour"]."\"".",\"status\":"."\"".$row["status"]."\"".",\"address\":"."\"".$row["address"]."\"".",\"city\":"."\"".$row["city"]."\"".",\"state\":"."\"".$row["state"]."\"".",\"postal\":"."\"".$row["postal"]."\"".",\"country\":"."\"".$row["country"]."\"".",\"phone\":"."\"".$row["phone"]."\"".",\"url\":"."\"".$row["url"]."\"".",\"notes\":"."\"".$row["notes"]."\""."},";
        
    }
} else {
    echo "0 results";
}
$test1=substr($test, 0, -1);
$test=$test1."]}:end";
echo $test;
$conn->close();





?>  

