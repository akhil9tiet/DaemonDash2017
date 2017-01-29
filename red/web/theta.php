<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname="ngo";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$a="hovertable";
$b="center";
if(isset($_POST['submit'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
    $name = $_POST['Name'];
    $location=$_POST['Location'];
    $domain=$_POST['Domain'];
    $interests=$_POST['Interests'];
    $weburl=$_POST['WebURL'];
    $email=$_POST['Email Address'];
    $phone=$_POST['Phone'];
    $chairperson=$_POST['Chairperson'];
    $password=$_POST['Password'];
    // Now you can do whatever with this variable.
}
echo $name;
echo $location;
echo $domain;
echo $interests;
echo $weburl;
echo $email;
echo $phone;
echo $chairperson;
echo $password;
$password1=sha1($str);

$sql = "INSERT INTO non_profit_organization
VALUES ('12', '$password1','$name','$location', '$domain','$interests','300','$weburl','$email','$phone','$chairperson')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>