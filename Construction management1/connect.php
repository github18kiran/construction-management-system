<?php
$servername ="localhost:3307";
$username ="root";
$password ="";
$dbname ="tutorial";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    // echo "Successful";
}
else
{
    echo "Failed".mysqli_connect_error();
}
?>