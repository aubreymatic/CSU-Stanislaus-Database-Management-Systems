<html>

<head> 
   <link rel="stylesheet" type="text/css" href="../styles.css">
</head>

<body>

<?php
include '../info.php';
$servername = "localhost";
$dbname = "cgolpashin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql statement
$sql = "SELECT * FROM Award";
$result = $conn->query($sql);

// outputs results
if ($result->num_rows > 0) {
    
    echo "<table><tr><th>AWID int</th><th>AwName varchar</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["AWID"]."</td><td>".$row["AwName"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>