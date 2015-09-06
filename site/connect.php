<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","v");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO users (User_ID, Full_Name, Email_Address, Telephone_Number, Date_of_Birth, Password, Gender)
VALUES ('$_POST[post_User_ID]', '$_POST[post_Full_Name]', '$_POST[post_Email_Address]', '$_POST[post_Telephone_Number]','$_POST[post_Date_of_Birth]','$_POST[post_Password]','$_POST[post_Gender]')";
?>