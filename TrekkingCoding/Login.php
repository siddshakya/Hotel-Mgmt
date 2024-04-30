<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body class="login">
        <?php
        if(isset($_POST["login"])){
            $emailAddress = $_POST["emailAddress"];
            $password = $_POST["password"];
            require_once("database.php");
            $sql = "SELECT * FROM user_form WHERE email = '$emailAddress'";
            $result = mysqli_query ($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                    header("Location: Dashboard.html");
                    die();
            }
            else{
                echo "<div class='text-white bg-dark'>email or password does not match </div>";
            }
        }
        ?>
            <div class="text-center mt-5">
                <form style="max-width: 400px;margin: auto"method="post">
                    <img class="mt-4 mb-4" src="Logoo1.png" height="170">
                    <h1 class="front-page">Sign in</h1>
                    <input type="email" id="emailAddress" class="form-control mt-3 mb-3" name="emailAddress" placeholder="Email Address" required="required">
                    <input type="password" id="Password"  class="form-control" name="password" placeholder="Password" required="required">
                    <div class="mt-3">                
                        <button type="submit" value ="login" name="login" class="btn btn-primary btn-block">User Login</button>
                        <a href="Register.php" class="btn btn-primary">Register</a>
                        <button type="submit-1" class="btn btn-primary btn-block" formaction="AdminLogin.php">Admin Login</button>
                    </div>
                </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
    </body>
</html>