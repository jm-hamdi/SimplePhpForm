<?php include('connexion.php')?>
<?php  
 $sql='select USER_ID,USER_NAME,USER_EMAIL from USERS order by USER_ID asc';
 $result=mysqli_query($conn,$sql);
 if(!$result){
    die(mysqli_error($conn));
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="m-3">
    <a href="CreateUser.php" style="text-decoration: none;" class="btn btn-primary">Créer</a>
    </div>
<div class="col-md-5 p-3">
 <table class="table ">
        <thead>
            <th>Nom</th>
            <th>Email</th>
            <th >Action</th>
            
        </thead>

        <tbody>
           

            <?php
while ($user = mysqli_fetch_array($result)) {
    $userName = htmlspecialchars($user['USER_NAME']);
    $userEmail = htmlspecialchars($user['USER_EMAIL']);
    $userID = $user['USER_ID'];
?>
    <tr>
        <td><?php echo $userName; ?></td>
        <td><?php echo $userEmail; ?></td>
        <td>
            <a href="upDateUser.php?id=<?php echo $userID; ?>" style="text-decoration: none;">Edit</a>
            |
            <a href="DeleteUser.php?id=<?php echo $userID; ?>" style="text-decoration: none;">Delete</a>
        </td>
    </tr>
<?php
}
?>


        </tbody>
    </table>   
</div> 

<div class="m-3">
    <a href="index.php" style="text-decoration: none;">Page d'accueil</a>
</div>


</body>
</html>
