<?php
    include("../config/cnx_db.php");
    $id=$_POST['id'];
    $name=$_POST['f_name'];
    $last_name=$_POST['l_name'];
    $email=$_POST['email'];
    $password=$_POST['passwd'];

    $sql=
        "UPDATE 
            users
        SET 
            first_name='$name',
            last_name='$last_name',
            email='$email',
            password='$password'
        WHERE
            id='$id'";

    if($conn->query($sql)===TRUE){
        echo"<script>alert('El user se Actualizo correctamente')</script>";
        header("refresh:0;url=http://localhost/market/back/users/list_users.php");
    } else {
        //echo error;
        echo"<script>alert('El user no se pudo Actualizar de manera correcta')</script>";
        header("refresh:0;url=http://localhost/market/back/users/list_users.php");
    }

?>