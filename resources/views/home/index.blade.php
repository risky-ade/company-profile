<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Profile</title>
    {{-- css --}}
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    {{-- fontawsome --}}
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css">
    {{-- custom css --}}
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top py-2">
        <div class="container">
          <a class="navbar-brand fw-bold" href="/"><img width="50" height="40" src="/assets/img/logo.jpg" alt=""><span class="primary"> CV.</span>Citra Mandiri Sukses</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link fw-bolder active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/about">About Us</a></li>
                  <li><a class="dropdown-item" href="/team">Team</a></li>
                  <li><a class="dropdown-item" href="/testimonial">Testimonial</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder" aria-current="page" href="/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder" aria-current="page" href="/portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder" aria-current="page" href="/contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- EndNav --}}
   {{-- carousel --}}
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/fto1.jpg" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque magni provident, nam maxime iure repellendus laborum sapiente voluptatem modi, quam quo odio fuga ipsum facilis voluptates explicabo hic eum quia.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/img/fto2.jpg" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt nemo animi maxime beatae qui voluptatibus neque ratione quos mollitia veritatis perferendis incidunt, blanditiis ipsa quibusdam dolor ea ut! Earum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/img/fto3.jpg" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt dolore, temporibus necessitatibus amet error molestias fugit dolores dicta cum. Illo asperiores fugiat nesciunt doloremque. Iusto quasi amet ullam deleniti!</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  {{-- end carousel --}}
  {{-- About-Us --}}
  <div class="about-us mt-5">
    <div class="container">
      <div class="title-container">
      <h2 class="text-center fw-bold">ABOUT US</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <h3 class="fw-bold about-us-title">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </h3>
          <p class="fw-bolder mt-4 about-us-subtitle">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt deserunt magni corporis iure placeat dicta, adipisci error ad autem amet ullam tenetur officiis a blanditiis facilis temporibus pariatur doloremque dolores?
          </p>
        </div>
        <div class="col-md-6">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, vero ipsum. Odit, fugiat quos delectus natus excepturi cum ipsum vel, iste explicabo asperiores alias, tenetur nesciunt quibusdam voluptates. Exercitationem, harum.
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fa-solid fa-check-double primary"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
            <li class="list-group-item">
              <i class="fa-solid fa-check-double primary"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
            <li class="list-group-item">
              <i class="fa-solid fa-check-double primary"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
            <li class="list-group-item">
              <i class="fa-solid fa-check-double primary"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
          </ul>
          <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vitae consequatur ut modi nostrum obcaecati officiis aut! Sapiente repellat fugit assumenda ipsa, doloribus impedit reiciendis quia, harum vel, suscipit eius?</p>
        </div>
      </div>
    </div>
  </div>
  {{-- end About-us --}}
  {{-- service --}}
  <div class="services mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">SERVICES</h2>
      </div>
    </div>
  </div>
  {{-- end service --}}
  <div class="vh-50">
    
  </div>

    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/vendor/js/all.min.js"></script>
  </body>
</html>