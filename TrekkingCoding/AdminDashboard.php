<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php
    include("ProductDatabase.php");
      if(isset($_POST["submit"])){
        echo"whatt?";
        $productName = mysqli_real_escape_string($conn, $_POST["ProductName"]);
        $productDetails = mysqli_real_escape_string($conn, $_POST["ProductDetails"]);
        $productPrice = mysqli_real_escape_string($conn, $_POST["ProductPrice"]);
        $productImage = mysqli_real_escape_string($conn, $_POST["ProductImage"]);
        /*
        //adding images
        if(!empty($_FILES["productImage"]["name"])){
          echo"what now";
          $productImage = basename($_FILES["image"]["name"]);
          $imageType = pathinfo($productImage, PATHINFO_EXTENSION);
          $allowedTypes = array("jpg", "jpeg", "png");
          if(in_array($imageType, $allowedTypes)){
            $image = $_FILES['image']['name'];
            $imageContent = addslashes(file_get_contents($image));
            $sql = "INSERT INTO products (Product_Image) VALUES ('$productImage')"; 
        }else{
          echo"file not uploades";
        }     
         */
        if(empty($productName)or empty($productDetails) or empty($productPrice))
        {
          echo("please complete product details");
        }else{
          $sql = "INSERT INTO products (Product_Name, Product_Details, Product_Price, Product_Image) VALUES ('$productName', '$productDetails', '$productPrice', '$productImage')"; 
          if(mysqli_query( $conn, $sql )){
            echo("Sucess recording product");
          }else{
            die("error recording");
          }

        }
      }
    
      
      if(isset($_POST["Update_Product"])){ 
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $productName =mysqli_real_escape_string($conn, $_POST["ProductName"]);
        $productDetails = mysqli_real_escape_string($conn, $_POST["ProductDetails"]);
        $productPrice = mysqli_real_escape_string($conn, $_POST["ProductPrice"]);
        $productImage = $_FILES["ProductImage"];

        if(empty($productName)or empty($productDetails) or empty($productPrice))
        {
          echo("please complete product details");
        }else{
          $sql = "UPDATE products SET Product_Name = '$productName', Product_Details = '$productDetails', Product_Price = '$productPrice', Product_Image ='$productImage' WHERE proid=$id"; 
          if(mysqli_query( $conn, $sql)){
            echo("Sucess updating product");
          }else{
            die("error recording");
          }

        }
      }
      ?>
      <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-Top" href="#">
              <img src="Logoo2.png" width="100" height="100 class="d-inline-block align-text-top>
            </a>
            <p class="nav-heading">Admin Dashboard</p>
            <nav class="navbar bg-body-tertiary">
              <div class="container-fluid">
                <form class="d-flex" role="search">
                  <a href="Login.php" class="btn btn-primary">Logout</a>
              </form>
              </div>
            </nav>
          </div>
        </nav>

  <form action="AdminDashboard.php" method="post">
  <div class="container text-left">
  <p>Product name</p>
  <input type="text" id="ProductName" class="form-control mt-3 mb-3" name="ProductName" placeholder="Product name">
  <p>Product Details</p>
  <input type="text" id="ProductDetails" class="form-control mt-3 mb-3" name="ProductDetails" placeholder="Product Details">
  <p>Product Price</p>
  <input type="text" id="ProductPrice" class="form-control mt-3 mb-3" name="ProductPrice" placeholder="Product price">
  <select class="form-select" aria-label="Default select example">
  <option selected>Select Category</option>
  <option value="1">Hilly</option>
  <option value="2">Himilayan</option>
  </select>
  <p class="mt-3">Product Picture</p>
  <input type="file" class="form-control mt-3 mb-3" name="ProductImage" id="image">
  <input type="submit" class="btn btn-primary form-control mt-3 mb-3"value="Add Product" name="submit">            
    
  <table class="table">
    <th>Hilly</th>
    <td>
      <?php
      include("ProductDatabase.php");
      $sql = "SELECT * FROM products";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row["Product_Name"];?></td>
          <td><?php echo $row["Product_Details"];?></td>
          <td><?php echo $row["Product_Price"];?></td>
          <td><a href="ProductEdit.php?id=<?php echo $row["proid"];?>" class="btn btn-primary" name = "edit">Edit</a></td>
          <td><a href="" class="btn btn-danger" name = "delete">Delete</a></td>
        </tr>
        <?php
      }
      ?>
      <th>Himilayan</th>
          </table>

    </form>
   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  

    </body>
</html>