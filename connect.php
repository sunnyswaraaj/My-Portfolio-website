<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="my_Portfolio";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection  fail");
}

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO `user_info` (`s.no`, `name`, `email`, `messages`, `date`) VALUES (NULL, '$name', '$email', '$message', current_timestamp())";
if($conn->query($sql)==true){
    echo "messages send successfully...";
}
else{
    echo "Error";
}
$conn->close();
?>


