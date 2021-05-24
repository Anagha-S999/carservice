<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="data:image/png;base64,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" alt="" width="70" height="70">
      One Stop Automotive
      <br><p><i>Great Deals. Great Service.</i></p>
    </a>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/signup">Sign up</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/adminlogin">ADMIN</a></li>
            <li><a class="dropdown-item" href="/custlogin">CUSTOMER</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gallery">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col col-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.indusmotor.com/public/uploads/pages/179020210129170225.jpg" height="500px" width="500px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://thehimalayantimes.com/uploads/imported_images/wp-content/uploads/2016/11/Car-service.jpg" height="500px" width="500px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.gethow.org/wp-content/uploads/2020/01/car-service.jpg" height="500px" width="500px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="row">
<div class="col col-12 col-sm-6 col-lg-6">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="data:image/png;base64,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" alt="" width="90" height="90">
      <b>One Stop Automotive</b>
</div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://content.jdmagicbox.com/comp/thane/p4/022pxx22.xx22.131107180518.t8p4/catalogue/nextgen-bosch-car-service-thane-1zd0ascxia.jpg?clr=" height="250px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://thumbs.dreamstime.com/b/car-lift-mechanic-shop-garage-interior-auto-repair-workshop-vehicles-inside-maintenance-concept-workplace-business-183156173.jpg" height="250px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1613214150333-53afb7561e6d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y2FyJTIwc2VydmljZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" height="250px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://67degreescdn.co.uk/78/6/15445231915c0f8db706e07_istock-652660336.jpg?width=479&height=359&crop=auto" height="250px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://etimg.etb2bimg.com/photo/75869537.cms" height="250px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://da4dkroembtou.cloudfront.net/wp-content/uploads/2020/04/SDAH-Service-Centre-2-Custom.jpg" height="250px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="row">
<h1><center><i><b>"A Quick Start for your Life"</b></i></center></h1>



</div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <footer class="bg-light text-center text-lg-start" width="100px">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: light">
    © 2021 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">carservice.com</a>
  </div>
  <!-- Copyright -->
</footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>