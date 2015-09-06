<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "v";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (User_ID, Full_Name, Email_Address, Telephone_Number, Date_of_Birth, Password, Gender)
VALUES (1, 'hhhhhff', 'joffhn@exffample.com', 550000000, '2012.02.03', '55555', 'women')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>
</body>