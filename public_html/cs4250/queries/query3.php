<html>
<head>  
        SELECT M.FName , M.LName , M.Bdate FROM `Musician` M ORDER BY M.Bdate DESC;

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
$sql = "SELECT M.FName , M.LName , M.Bdate FROM `Musician` M ORDER BY M.Bdate DESC";
$result = $conn->query($sql);

// outputs results
if ($result->num_rows > 0) {
    
    echo "<table><tr><th>FName varchar</th><th>LName varchar</th><th>Bdate date</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["FName"]."</td><td>".$row["LName"]."</td><td>".$row[Bdate]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>
