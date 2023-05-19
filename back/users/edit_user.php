<?php
    include("../config/cnx_db.php");
    $id_user=$_GET['id'];

    $sql="SELECT * from users WHERE id='$id_user'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $id_user=$row['id'];
            $name=$row['first_name'];
            $last_name=$row['last_name'];
            $email=$row['email'];
            $pass=$row['password'];
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body >
    <center>
        <form name="editUserForm" action="http://localhost/market/back/users/update_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id_user; ?>" required> 
            <label>First Name:</label><br> <input type="text" name="f_name" placeholder="Tom" value="<?php echo $name; ?>" required> <br>
            <label>Last name:</label> <br> <input type="text" name="l_name" placeholder="Mcalister" value="<?php echo $last_name; ?>" required> <br>
            <label>Email</label> <br> <input type="email" name="email" placeholder="example@email.com" value="<?php echo $email; ?>" required> <br>
            <label>Password</label><br> <input type="password" name="passwd" placeholder="****" value="<?php echo $pass; ?>" required> <br>
            <input type="submit" value="Actualizar">
        </form>
    </center>

</body>
</html>