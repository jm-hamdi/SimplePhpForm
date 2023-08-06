

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
   <?php

// Include the database creation file
require_once 'createDatabase.php';

// Set up database connection
$database = 'DbName'; // Replace with your actual database name
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//SQL query to create a table
$sql = "CREATE TABLE IF NOT EXISTS users (
    USER_ID INT(5) AUTO_INCREMENT PRIMARY KEY,
                USER_NAME VARCHAR(20) NOT NULL,
                USER_PW VARCHAR(10) NOT NULL,
                USER_EMAIL VARCHAR(50) UNIQUE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


/*
$serverName='localhost';
$userName='root';
$password='';
$db='';
$conn=mysqli_connect($serverName,$userName,$password);
if(!$conn){
    die('Impossible de se connecter au serveur'.mysqli_connect_error());
}
if(isset($_POST["DbName"])):
    $sql='CREATE DATABASE IF NOT EXISTS '.$_POST["DbName"];

    $result=mysqli_query($conn,$sql);
    if($result):
       if(mysqli_select_db($conn,$_POST["DbName"])):
            $sql='CREATE TABLE USERS(
                USER_ID INT(5) AUTO_INCREMENT PRIMARY KEY,
                USER_NAME VARCHAR(20) NOT NULL,
                USER_PW VARCHAR(10) NOT NULL,
                USER_EMAIL VARCHAR(50) UNIQUE NOT NULL
            )';
            $res=mysqli_query($conn,$sql);
            if($res):
                echo 'database creer avec succes';
            else:
                echo 'impossible  '.mysqli_error($conn);
            endif;
        endif;
    else:
        echo 'impossible de creer  '.mysqli_error($conn);
    endif;
endif;
*/
?>   
</body>
</html>
