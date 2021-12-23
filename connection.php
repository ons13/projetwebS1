<?php 
$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="login_sample_db";
if (!$con = mysqli_connect($dbhost,$dbuser , $dbpassword,$dbname))
{
    die("sorryy!! faileed ");
}