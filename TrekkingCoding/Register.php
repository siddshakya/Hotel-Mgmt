<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="text-center mt-5">
        <?php

        if(isset($_POST["submit"]))
        {
            $username = $_POST["username"];
            $emailAddress = $_POST["emailAddress"];
            $password = $_POST["password"];
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();


            if(empty($username)or empty($password)or empty($emailAddress))
            {
                echo("Please fill all Requirements");
            }
            require_once "database.php";
            $sql = "SELECT * FROM user_form WHERE email = '$emailAddress'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount > 0){
                array_push($errors,"Email already Exists");
            }
            if(count($errors) > 0){
                foreach($errors as $error){
                    echo"<div class='error'>$error</div>";
                }
            }else{
                echo("Success Recording User");
                require_once("database.php");
                $sql ="INSERT INTO user_form (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init( $conn );
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if($prepareStmt)
                {
                    mysqli_stmt_bind_param($stmt,"sss",$username, $emailAddress, $password_hash);
                    mysqli_stmt_execute($stmt);
                    echo"<div class='alert_success'>You are now registered</div>";
                }else{
                    die("something off");
                }
            }
        }
            ?>
            <form action="Register.php" method="post" style="max-width: 400px;margin: auto;">
                <img class="mt-4 mb-4" src="Logoo2.png" height="120">
                <h1 class="h3 mb-3">Register Account</h1>
                <input type="text" id="Username" class="form-control mt-3 mb-3" name="username" placeholder="Username">
                <input type="email" id="emailAddress" class="form-control mt-3 mb-3"name="emailAddress" placeholder="Email Address">
                <input type="password" id="Password" class="form-control mt-3 mb-3" name="password" placeholder="Password">
                <div class="mt-3">
                    <input type="submit" class="form-control mt-3 mb-3"value="Register" name="submit">            
                    <a href="Login.php" class="btn btn-primary">Back to Login</a>
                </div>
            </form>


            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
    </body>
</html>