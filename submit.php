<?php 
include 'connection.php';
$message = $_REQUEST['message'];
$fname = $_REQUEST['name'];
$email = $_REQUEST['mail'];
$subject = $_REQUEST['subject'];

$sql = "INSERT INTO `form data` ('message', 'name', 'mail', 'subject') VALUES
  ('$message','$fname','$email','$subject')";

$result = mysqli_query($conn,$sql);
    if($result){
        echo "record added";
    }else{
        echo  "something wrong";
    }  

?>