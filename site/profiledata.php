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


$email = $_POST["myusername"];
$password1 = $_POST["mypassword"];;
$sql = "select * from users where Email_Address='" . $email . "'";
$result = $conn->query($sql);


/*	
//$sql1 = "SELECT Password FROM users WHERE Email_Address='""$email'";
$stmt = $conn->prepare("SELECT Password FROM users WHERE Email_Address='?'");
$stmt->bind_param("s", $email);

$result =$stmt->query($stmt);
//$password =$conn->($sql1);*/

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dbpass = $row["Password"];
		if($dbpass == $password1){
			header("location:profile.html");
		}
    }
	
} else {
    //echo "<script type='text/javascript'>alert('failed!')</script>";
}


//    if ($password1==$password) {
    // output data of each row
  //  header("location:profile.html");
//	} 
//	else {
 //   echo "invalid";
	//}

 
//}
$conn->close();
?>