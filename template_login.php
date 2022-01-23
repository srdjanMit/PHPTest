<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Login</h2>
            <p>Please fill in your email and password</p>
            <?php global $message;
            echo $message
            ?>
        </div>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
        <p>Don't have an account yet? <a href="register.php">Register here</a> or return to <a href="index.php">Home
                page</a></p>
    </form>
</div>
</body>
</html>
