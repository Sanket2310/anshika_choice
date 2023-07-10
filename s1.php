<?php

$name=$_POST['name'];
$conn=mysqli_connect('localhost','root','','Practice');
$sql="INSERT INTO answer (`name`) VALUES ('$name')";
$run=mysqli_query($conn,$sql);
if($run)
    echo "inserted";
else
    echo "not inserted";;
?>
