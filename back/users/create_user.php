//create_user.php
<?php
    include("../config/cnx_db.php");
    $firstName = $_POST['f_name'];
    $lastName = $_POST['l_name'];
    $email = $_POST['email'];
    $pass = $_POST['passwd'];

    $sql = "INSERT INTO users (first_name,last_name,email,password) VALUES ('$firstName','$lastName','$email','$pass')" ;
    if($conn->query($sql)===TRUE){
        echo"<script>alert('User has been created successfully')</script>";
        header("refresh:0; url=http://127.0.0.1/market/front/users/login.html");
    }else{
        echo"<script>alert('Email already exists')</script>";
        header("refresh:0; url=http://127.0.0.1/market/front/users/create_user.html");
    }
?>