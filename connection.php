<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'saurav';

$conn = mysqli_connect($server,$username,$password,$dbName);
if($conn){
echo "connection suucessful";
} else{
    echo "error";
}
?>