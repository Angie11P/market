<?php
    //Login 
    include("../config/cnx_db.php");
    $email=$_POST['email'];
    $pass=$_POST['passwd'];
    $sql="SELECT * FROM market WHERE email='$email' AND passwd='$pass'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo"User has been found suceessfully.You're login";
    }else{ "Verify your data";
    }
?>