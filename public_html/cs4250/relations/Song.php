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
$sql = "SELECT * FROM Song";
$result = $conn->query($sql);

// outputs results
if ($result->num_rows > 0) {
    
    echo "<table><tr><th>sID int</th><th>sName varchar</th><th>sDate date</th><th>Genre varchar</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sID"]."</td><td>".$row["sName"]."</td><td>".$row[sDate]."</td><td>".$row[Genre]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>