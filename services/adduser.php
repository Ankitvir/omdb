<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="p-5">
        <form action="createuser.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control "></input>
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
            <!-- <a href="index.php" class="btn btn-secondary ml-2">Cancel</a> -->
        </form>
    </div>
</body>
</html>