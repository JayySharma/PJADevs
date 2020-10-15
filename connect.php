<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$businessName = $_POST["businessName"];
$contactno=$_POST["contactno"];
$email = $_POST["email"];
$businessType=$_POST["businessType"];
$anyMessage=$_POST["anyMessage"];

$conn = new mysqli('localhost', 'id15124314_devanshisingh', 'Qwerty!23456','id15124314_mall');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
$stmt=$conn->prepare("insert into businessreg(fname,lname,businessName,contactno,email,businessType,anyMessage)values(?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss",$fname,$lname,$businessName,$contactno,$email,$businessType,$anyMessage);
$stmt->execute();
echo "data entered..";
$stmt->close();
$conn->close();
}
?>
