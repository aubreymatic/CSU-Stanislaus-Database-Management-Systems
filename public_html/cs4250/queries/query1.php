<html>
<head>  
    SELECT A.AName, S.sName from `Song` S, `Compose` C, `Artist` A WHEREA.Aid = C.Aid and C.sID = S.sID and A.AName = Aleda;
    
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
$sql = "SELECT A.AName, S.sName from `Song` S, `Compose` C, `Artist` A WHERE A.Aid = C.Aid and C.sID = S.sID and A.AName = 'Aleda'";
$result = $conn->query($sql);

// outputs results
if ($result->num_rows > 0) {
    
    echo "<table><tr><th>AName varchar</th><th>sName varchar</th></tr>";
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["AName"]."</td><td>".$row["sName"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>

</html>
