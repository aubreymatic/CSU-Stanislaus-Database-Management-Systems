<html>
<head>  
        SELECT COUNT(A.AName) FROM `Artist` A WHERE A.AName LIKE 'A%';

        <link rel="stylesheet" type="text/css" href="../styles.css">
</head>>

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
$sql = "SELECT COUNT(A.AName) FROM `Artist` A WHERE A.AName LIKE 'A%'";
$result = $conn->query($sql);

// outputs results
if ($result->num_rows > 0) {
    
    echo "<table><tr><th>Count(A.AName)</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["COUNT(A.AName)"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>