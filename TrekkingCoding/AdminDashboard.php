<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="top-nav-bar"><!--Top navigation bar-->
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-Top" href="#">
                    <img src="Logoo2.png" width="100" height="100 class="d-inline-block align-text-top">
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

        <div class="container text-left">
        <p>Product name</p>
        <input type="text" id="productName" class="form-control mt-3 mb-3" name="username" placeholder="Product name">
        <p>Product Details</p>
        <input type="text" id="ProductDetails" class="form-control mt-3 mb-3" name="username" placeholder="Product Details">
        <p>Product Price</p>
        <input type="text" id="ProductPrice" class="form-control mt-3 mb-3" name="username" placeholder="Product price">
        <p>Product Picture</p>
        <select class="form-select" aria-label="Default select example">
        <option selected>Select Category</option>
        <option value="1">Hilly</option>
        <option value="2">Himilayan</option>
        </select>
        <input type="file" class="form-control mt-3 mb-3" name="username" placeholder="Product price">
        <a href="Dashboard.html" class="btn btn-primary mb-4">Delete</a>

        <table class="table">
          <th>Hilly</th>
          <td>
              <div class="col"><img src="Images/Bag.png" alt="..." width="300px"> 
                    <p class="col-text">Bagpack</p>
                    <p class="col-text">Rs 4000</p>
                    <p class="col-text">Excellent Bagpack choice for hiking in Nepal.</p>
                    <a href="Dashboard.html" class="btn btn-primary">Delete</a>
                    <a href="AdminEditMenu.html" class="btn btn-primary">Edit</a>
                </td>
                <th>Himilayan</th>
                <td>
              <div class="col"><img src="Images/Bag.png" alt="..." width="300px"> 
                    <p class="col-text">Bagpack</p>
                    <p class="col-text">Rs 4000</p>
                    <p class="col-text">Excellent Bagpack choice for hiking in Nepal.</p>
                    <a href="Dashboard.html" class="btn btn-primary">Delete</a>
                    <a href="AdminEditMenu.html" class="btn btn-primary">Edit</a>
                </td>
        </table>


                </div>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
    </body>
</html>