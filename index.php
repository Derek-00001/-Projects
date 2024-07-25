<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHOTO GALLERY WEBSITE</title>
  <link rel="stylesheet" href="website.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <!-- Navbar starts  -->
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">IMAGESBAZAAR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon-" style="color: white;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-dark" href="#nature">Natural</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-dark" href="#architecture">Architecture</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-dark" href="#travel">Travellers</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#contact">Contact </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#about">About Us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success text-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar ends  -->

  <!-- carousel starts  -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/ana-frantz-3uAHKIvavw8-unsplash.jpg" class="d-block w-100" alt="Sunrise">
      </div>
      <div class="carousel-item">
        <img src="images/mark-harpur-K2s_YE031CA-unsplash.jpg" class="d-block w-100" alt="Sunset">
      </div>
      <div class="carousel-item">
        <img src="images/navi-F6GPoByBDaU-unsplash.jpg" class="d-block w-100" alt="Nature">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousel ends  -->

  <!-- Adding another page section  -->

  <!-- if we want that when user clicks on nature section on navbar then the page needs to redirect it to nature section of the page. how to do it ? PRETTY SIMPLE
We'll create anchor tag and give them an id -->

  <a id="nature">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Nature</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-eberhardgross-707344.jpg" class="img-fluid pb-3" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-luisdelrio-15286.jpg" class="img-fluid pb-3" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-minan1398-1234035.jpg" class="img-fluid pb-3" alt="">
          </div>
        </div>
      </div>
    </section>
  </a>


  <a id="architecture">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Architecture</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-pixabay-262367.jpg" class="img-fluid pb-3" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-pixabay-256150.jpg" class="img-fluid pb-3" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-expect-best-79873-323780.jpg" class="img-fluid pb-3" alt="">
          </div>
        </div>
      </div>
    </section>
  </a>

  <a id="travel">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Travel</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-riciardus-307008.jpg" class="img-fluid pb-3" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-te-lensfix-380994-1371360.jpg" class="img-fluid pb-3" alt="">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/pexels-nubikini-386009.jpg" class="img-fluid pb-3" alt="">
          </div>
        </div>
      </div>
    </section>
  </a>

  <!-- ending another page section  -->

  <!-- New sections  -->

  <a id="contact">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Contact</h2>
      </div>
      <div class="w-50 m-auto">
        <form action="about.php" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Number:</label>
            <input type="text" name="number" class="form-control">
          </div><br>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>
  </a>

  <div class="footer">
    <a id="about">
      <section class="my-4">
        <div class="py-4">
          <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
          <h3 class="text-center">Mac</h3> <br>
          <p class="text-center"><b>I'm a passionate photographer interested in working in Nature, Architecture and
              travel photography.
              I'm a full time freelancer with an experience of 5 years.
            </b></p>
        </div>
    </a>
  </div>



  <!-- New sections  ends  -->






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"></script>

</body>
</html>