
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "fdb29.awardspace.net";
$username = "3521067_nums";
$password = "S)n!}:9K4dIG8uGj";
$dbname = "3521067_nums";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, num FROM numb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["name"]. ", " . $row["num"] . ", <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>