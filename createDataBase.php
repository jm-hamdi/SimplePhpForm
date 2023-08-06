

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

// Create a connection
$conn = new mysqli($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

//creation de la base de données
// if(isset($_GET["DbName"])):
//     $db=$_GET["DbName"];
//     $sql='CREATE DATABASE IF NOT EXISTS '.$db;

//     $result=mysqli_query($conn,$sql);
//     if($result):
//         echo "base de données créer";
//     else:
//         die(mysqli_error($conn));
//     endif;
// endif;

// ?>  
<?php
$newDatabase = 'DbName';

// Create a new database
$sql = "CREATE DATABASE IF NOT EXISTS $newDatabase";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>





</body>
</html>
