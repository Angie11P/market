<?php

//develooper:Angie
//Database emgime commection
//credentials
$host = "localhost";
$port ="3306";
$username = "root";
$password = "";
$dbname = "market";


//Mysql connection
$conn=new mysqli ($host,$username,$password,$dbname,$port);

//check connection
if ($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}else {
    echo "connection succesfully";
}
?>