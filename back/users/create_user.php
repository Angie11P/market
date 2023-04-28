//create_user.php
<?php
    include("../config/cnx_db.php");
    $firstName = $_POST['f_name'];
    $lastName = $_POST['l_name'];
    $email = $_POST['email'];
    $pass = $_POST['passwd'];

    $sql = "INSERT INTO users (first_name,last_name,email,password) VALUES ('$firstName','$lastName','$email','$pass')" ;
    $conn->query($sql);
?>