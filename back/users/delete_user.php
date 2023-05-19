<?php
    include("../config/cnx_db.php");
    $userId=$_GET['id'];

    $sql="DELETE FROM users WHERE id='$userId'";
    if($conn->query($sql)===TRUE){
        if($conn->affected_rows>0){
            echo"<script>alert('El usuario se elimino correctamente')</script>";
            header("refresh:0;url=http://localhost/market/back/users/list_users.php");
        }else{echo"user no existe";}
    } else{
        echo"Error=user born't been deleted";
    }
?>