<?php
include 'config.php';
if(isset($_POST['submit'])){
    $username = mysql_real_escape_string($conn,$_POST['username']);
}
?>
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="text-center mt-5">
            <form style="max-width: 400px;margin: auto;">
                <img class="mt-4 mb-4" src="Logoo2.png" height="120">
                <h1 class="h3 mb-3">Register Account</h1>
                <input type="text" id="Username" class="form-control mt-3 mb-3" name="username" placeholder="Username">
                <input type="email" id="emailAddress" class="form-control mt-3 mb-3" placeholder="Email Address">
                <input type="password" id="Password" class="form-control mt-3 mb-3" placeholder="Password">
                <div class="mt-3">                
                    <a href="Login.html" class="btn btn-primary" name="submit">Register</a>
                    <a href="Login.html" class="btn btn-primary">Back to Login</a>
                </div>
            </form>
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
    </body>
</html>