<?php
$conn=mysqli_connect("localhost","root","","blog");
if(!$conn)
{
    die('Connection Fail'.mysqli_connect_error());
}
?>