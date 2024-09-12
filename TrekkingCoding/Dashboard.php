<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Trekking</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body class="userDashboard">


    </div>

    <div class="container"><!--Product items-->
      <div id="carouselCaptions" class="carousel slide"><!--BLOG POSTS-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/less-crowd.jpg" class="da-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
              <h1>Trekking in Nepal</h1>
              <p>Nepal is a tremendously varied country with a wide range of cultures, topographies, and degrees of isolation. It's common to refer to "trekking in Nepal" as a single notion, although there are actually numerous distinct trekking regions, each with unique qualities. Seven of the fourteen 8000+ peak summits tower far above the valleys and glaciers, making Nepal's whole northern border effectively the heart of the Himalayas. How can you choose your ideal journey with so many options? The style of trekking should be taken into account first. You can camp anywhere, including the Kangchenjunga region, Inner Dolpo, and the far west of Nepal. Although camping is obviously less pleasant, it may take you to some of the most secluded mountain locations.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/Baudha.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Trips Around Kathmandu</h1>
              <p>Most trekkers heading out to Everest or Annapurna save at least one day on the end of their treks for Kathmandu. If you are wondering what are the best sightseeing options here are  great ideas to get you started SwayambhuNath on a hill top about 20 minutes walk from Thamel.  Walk-up the 365 steps to the stupa at the top which is a important pilgrimage place for Buddhist and enjoy the birds-eye views of Kathmandu.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row" >
            <div class="row gy-4 gx-10">
              <?php
                    include("ProductDatabase.php");
                    ?>
                    <div class="Hilly-img"><!--Category for Hilly Category-->
                      <div class="navbar bg-body-dark">
                        <div class="container-fluid">
                            <h2 class="cat-font">Hilly</h2>
                        </div>
         
                            <?php
                              include("ProductDatabase.php");
                              $sql = "SELECT * FROM products";
                              $result = mysqli_query($conn, $sql);
                              while($row = mysqli_fetch_array($result)){
                              ?>
                              <div class="col-12 col-md-6 col-lg-4 ">
                                <div class="card" style="width: 20rem">
                                  <?php
                                    $fileName = $row["Product_Image"];
                                    $imageUrl = "uploads/".$fileName;
                                    echo"<img src='$imageUrl' width=250>";
                                  ?>
                                <h5 class="card-title"> <?php echo $row["Product_Name"];?></h5>
                                <p class="card-text"><?php echo $row["Product_Details"];?></p>
                                <p class="card-text"><?php echo $row["Product_Price"];?></p>
                                <a href="ProductEdit.php?id=<?php echo $row["proid"];?>" class="btn btn-primary" name = "edit">Edit</a>
                                <a href="ProductDelete.php?id=<?php echo $row["proid"];?>" class="btn btn-danger" name = "edit">Delete</a>
                            </div>
                            </div>          
                            <?php
                            }?>
                        </div>
                      </div>
                      </div>
            </div>
      </div>

    </div>

                <div class="Himilayan-img"><!--Category for Himalayan Category-->
                    <nav class="navbar bg-body-dark">
                        <div class="container-fluid">
                            <h2 class="cat-font">Himalayan</h2>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="p-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="Images/Jacket.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Jacket</h5>
                                      <p class="card-text"> It offers thermal comfort worthy of a sleeping bag when temperatures drop dramatically. </p>
                                      <a href="Product.html" class="btn btn-primary">Buy Now</a>
                                      <a href="#" class="btn btn-primary">Add To cart</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="p-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="Images/Pole.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Trekking Pole</h5>
                                      <p class="card-text">Our uniquely designed trekking pole is a premium hiking equipment option for any hiker.</p>
                                      <a href="Product.html" class="btn btn-primary">Buy Now</a>
                                      <a href="#" class="btn btn-primary">Add To cart</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="p-4">
                            <div class="card" style="width: 18rem;">
                                <img src="Images/Gloves.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Gloves</h5>
                                  <p class="card-text"> Featuring digital material fingers, they offer gloves-on touchscreen functionality.</p>
                                  <a href="Product.html" class="btn btn-primary">Buy Now</a>
                                <a href="#" class="btn btn-primary">Add To cart</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    </nav>
                </div>

              </nav>
              <nav class="navbar bg-body-tertiary rounded"><!--Botom Navbar-->
                <p class="nav-heading">Contact Us</p>
                <nav class="navbar bg-body-tertiary">
                  <a href="Login.php" class="btn btn-primary">Log out</a>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>