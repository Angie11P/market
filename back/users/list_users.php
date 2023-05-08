<?php  include("../config/cnx_db.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>..</th>
        </tr>
        <?php 
            $sql= "SELECT * FROM users";
            $result= $conn->query($sql);
            if($result -> num_rows>0){
                while ($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>".$row ['first_name']."</td>
                            <td>".$row ['last_name']."</td>
                            <td>".$row ['email']."</td>
                            <td><a href='edit_user.php?id=".$row['id']."'><img src='../../front/icons/lapiz.png' width='15'></a>&nbsp;
                            <a href='delete_user.php?id=".$row['id']."'><img src='../../front/icons/eliminar.png' width='15'></a></td>
                        </tr>";
                }
            }?>
    </table>
</body>
</html>