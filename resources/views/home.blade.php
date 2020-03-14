<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../css/css.css">
    <title>Flower Station </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
</head>
  <body>

    <div class="Container">
      {{-- ******************* navbar ******************* --}}
        <nav class="navbar navbar-expand-lg navbar-light nv-color">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Flower Station</a>
            <ul class="navbar-nav mt-2 mt-lg-0">

              <li class="nav-item">
                <div class="dropdown">
                  <a class=" nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">أقسام</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">الزوجات</a>
                    <a class="dropdown-item" href="#"> التخرج </a>
                    <a class="dropdown-item" href="#"> اخرى</a>
                  </div>
                </div>
              </li>

              <li class="nav-item"></li>
                <a class="nav-link" href="#">عنا </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">تسجيل كمتجر</a>
              </li>
            </ul>
            <ul class="navbar-nav mr-auto my-2 my-lg-0">
              <li>
                <a class="nav-link" href="#">
                  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Sign Up</button>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      {{-- *******************  end navbar ******************* --}}


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Image 1.jpg" height="650" width="1235" class=" responsive d-block" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>weddings</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <button type="button" class="btn btn-dark2">more</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Image6.jpg" height="650" width="1235" class=" responsive d-block" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Graduation</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <button type="button" class="btn btn-dark2">more</button>
              </div>
            </div>

            <div class="carousel-item">
              <img src="img/Image3.jpg" height="650" width="1235" class=" responsive d-block" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3>events</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <button type="button" class="btn btn-dark2">more</button>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


    </div>





@yield('name')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
