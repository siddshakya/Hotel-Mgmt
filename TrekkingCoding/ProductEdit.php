<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>

  <div class="container text-left">
    <h1>Edit Product Details</h1>
    <?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        include"ProductDatabase.php";
        $sql = "SELECT * FROM products WHERE proid=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>

    <form action="AdminDashboard.php" method="post" enctype="multipart/form-data">
    <p>Product name</p>
  <input type="text" id="ProductName" class="form-control mt-3 mb-3" name="ProductName" value="<?php echo $row["Product_Name"]; ?>">
  <p>Product Details</p>
  <input type="text" id="ProductDetails" class="form-control mt-3 mb-3" name="ProductDetails" value="<?php echo $row["Product_Details"]; ?>">
  <p>Product Price</p>
  <input type="text" id="ProductPrice" class="form-control mt-3 mb-3" name="ProductPrice" value="<?php echo $row["Product_Price"]; ?>">
  <select class="form-select" aria-label="Default select example">
  <option selected>Select Category</option>
  <option value="1">Hilly</option>
  <option value="2">Himilayan</option>
  </select>
  <p class="mt-3">Product Picture</p>
  <input type="file" class="form-control mt-3 mb-3" name="ProductImage" value="<?php echo $row["Product_Image"]; ?>">
  <input type="submit" class="btn btn-warning mt-3 mb-3"value="Update Product" name="Update_Product">    
  <td><a href="ProductDelete.php?id=<?php echo $row["proid"];?>" class="btn btn-danger" name = "edit">Delete</a></td>
  <td><a href="AdminDashboard.php" class="btn btn-primary" name = "delete">Go back</a></td>
  </div>
  <input type="hidden" name = "id" value='<?php echo $row['proid']?>'>
    </form>

        <?php
    }
    ?>
    
   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  

    </body>
</html>