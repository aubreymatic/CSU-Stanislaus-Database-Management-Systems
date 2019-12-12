<html>

<head> 
   <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

   <?php
include 'info.php';
$servername = "localhost";
$dbname = "cgolpashin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql statement
if (isset($_POST['query'])) {
   $userInput = $_POST['query'];
}

if ((strstr($userInput, "delete")) !== false) {

   echo "<p>Do not use update, delete, create, insert, or drop.</p>";

} else if ((strstr($userInput, "update")) !== false) {

   echo "<p>Do not use update, delete, create, insert, or drop.</p>";

} else if ((strstr($userInput, "create")) !== false) {

   echo "<p>Do not use update, delete, create, insert, or drop.</p>";

} else if ((strstr($userInput, "drop")) !== false) {

   echo "<p>Do not use update, delete, create, insert, or drop.</p>";

} else if ((strstr($userInput, "insert")) !== false) {

   echo "<p>Do not use update, delete, create, insert, or drop.</p>";

} else {
   $sql = $userInput;
}

$result = $conn->query($sql);

// outputs results
if ($result->num_rows > 0) 
   {
      echo "<table><tr>";
      $field=$result->fetch_fields();
// output column names  
     foreach ($field as $col)
     {
        echo "<th>".$col->name."</th>";
     }
     echo "</tr>";

// output data of each row
     while($row = $result->fetch_row()) 
     {
        echo "<tr>";

        for ($i=0;$i < $result->field_count;$i++)
        {
           echo "<td>".$row[$i]."</td>";
        }

        echo "</tr>";
      }
     echo "</table>";

  }

else  
{
 echo "No data found";
}

$conn->close();
?>

</body>

</html>