<?php //include('connexion.php')?>
<?php  




include 'connexion.php';


if(isset($_POST['USER_NAME']) && isset($_POST['USER_EMAIL']) && isset($_POST['USER_PW'])) {
    $USER_NAME = $_POST['USER_NAME'];
    $USER_EMAIL = $_POST['USER_EMAIL'];
    $USER_PW = $_POST['USER_PW'];

    // Assuming you have already established the $conn connection

    // Sanitize input to prevent SQL injection
    $USER_NAME = mysqli_real_escape_string($conn, $USER_NAME);
    $USER_EMAIL = mysqli_real_escape_string($conn, $USER_EMAIL);
    $USER_PW = mysqli_real_escape_string($conn, $USER_PW);

    // Check if email already exists before inserting
    $checkEmailQuery = "SELECT USER_EMAIL FROM users WHERE USER_EMAIL = '$USER_EMAIL'";
    $emailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($emailResult) > 0) {
        echo "Email already exists.";
    } else {
        $sql = "INSERT INTO users (USER_NAME, USER_EMAIL, USER_PW) VALUES ('$USER_NAME', '$USER_EMAIL', '$USER_PW')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die(mysqli_error($conn));
        }

        header("Location: users.php"); // Redirect after successful insertion
        exit();
    }
}


// if (isset($_POST['USER_NAME']) && isset($_POST['USER_EMAIL']) && isset($_POST['USER_PW'])) {
//     $USER_NAME = $_POST['USER_NAME'];
//     $USER_EMAIL = $_POST['USER_EMAIL'];
//     $USER_PW = $_POST['USER_PW'];
    
//     // Use prepared statements to prevent SQL injection
//     $sql = "INSERT INTO users (USER_NAME, USER_EMAIL, USER_PW) VALUES (?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("sss", $USER_NAME, $USER_EMAIL, $USER_PW);

//     if ($stmt->execute()) {
//         header("Location: users.php"); // Redirect to users.php
//         exit(); // Terminate the script
//     } else {
//         die($stmt->error);
//     }

//     $stmt->close();
// }

// $conn->close();

?>