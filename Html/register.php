<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mynewdb";
$conn = new mysqli($servername, $username, $password, $dbname);



$site =  $_POST['site'];
$street = $_POST['street'];
$telephone = $_POST['telephone'];
$city = $_POST['city'];
$officeemail = $_POST['oemailadd'];
$state = $_POST['state'];
$website = $_POST['website'];
$pincode = $_POST['pincode'];
$eavailable = $_POST['yesno'];
$ename = $_POST['ename'];
$estreet = $_POST['sadress2'];
$etelephone = $_POST['telephone2'];
$ecity = $_POST['city2'];
$eofficemail = $_POST['oemailadd2'];
$estate = $_POST['state2'];
$ewebsite = $_POST['website2'];
$epincode = $_POST['pincode2'];
$registered = $_POST['eyesno'];
$ecno = $_POST['ecr'];
#$certificate = $_POST['upload'];
$finalname = $_POST['nameofperson'];
// $designnation = $_POST['designation'];


$sql = "INSERT INTO formdata (site,streetadd,telephone,city,officeemail,state,website,pincode,eavailable,ename,estreet,etelephone,ecity,eofficeemail,estate,ewebsite,epincode,registered,ecno,finalname)
VALUES('$site','$street','$telephone','$city','$officeemail','$state','$website','$pincode','$eavailable','$ename','$estreet','$etelephone','$ecity','$eofficemail','$estate','$ewebsite','$epincode','$registered','$ecno','$finalname')";

$result = $conn->query($sql);




$conn->close();
?>




