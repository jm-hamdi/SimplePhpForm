<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-md-5 p-3">
    <form action="insertUser.php" method="post" class="form" >
        <div >
            <label for="USER_NAME" class="form-label">User Name</label>
            <input type="text" name="USER_NAME" class="form-control">
        </div>
        <div >
            <label for="USER_EMAIL" class="form-label">Mail</label>
            <input type="email" name="USER_EMAIL" class="form-control">
        </div>
        <div >
            <label for="USER_PW" class="form-label">Password</label>
            <input type="password" name="USER_PW" class="form-control">
        </div>
        <div>
            <input type="submit" value="Enregister" class="btn btn-primary">
        </div>
    </form>
    </div>
</body>
</html>