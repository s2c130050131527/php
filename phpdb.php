<?php


$server="localhost";
$user="root";
$pwd="mysql";



$conn = mysqli_connect($server,$user,$pwd);

if(!$conn)
{
die("connection failed");
    echo mysql_connect_error();
}
else
{
    echo "connection successfull";
}

$sql="create database phppractice";
if(mysqli_query($conn,$sql))
{
    echo "db created successfully";
}
else
{
    echo "db cretion failed";
}

?>