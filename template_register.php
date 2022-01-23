<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Register</h2>
            <p>Please fill the form to register</p>
            <?php global $message;
            echo $message
            ?>
        </div>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="repeatPassword">Repeat Password</label>
            <input type="password" name="repeatPassword" id="repeatPassword" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a> or return to <a href="index.php">Home page</a></p>
    </form>
</div>
</body>
</html>
