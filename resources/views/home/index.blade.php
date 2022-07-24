<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Profile</title>
    {{-- css --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- fontawsome --}}
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
    {{-- custom css --}}
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top py-2">
        <div class="container">
          <a class="navbar-brand fw-bold" href="/"><img width="50" height="40" src="/img/logo.jpg" alt=""><span class="primary"> CV.</span>Citra Mandiri Sukses</a>
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
        <img src="/img/fto1.jpg" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque magni provident, nam maxime iure repellendus laborum sapiente voluptatem modi, quam quo odio fuga ipsum facilis voluptates explicabo hic eum quia.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/fto2.jpg" class="d-block w-100 carousel-img" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt nemo animi maxime beatae qui voluptatibus neque ratione quos mollitia veritatis perferendis incidunt, blanditiis ipsa quibusdam dolor ea ut! Earum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/fto3.jpg" class="d-block w-100 carousel-img" alt="...">
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
  <div class="services mt-5 bg-light py-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">SERVICES</h2>
      </div>
      <p class="text-center mt-4">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam unde rem perspiciatis, id incidunt accusantium veritatis nostrum 
      </p>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card border-0 text-center p-4">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-3x"></i>
              </div>
              <div class="card-title mt-3">Lorem ipsum</div>
              <p class="card-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-3x"></i>
              </div>
              <div class="card-title mt-3">Lorem ipsum</div>
              <p class="card-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-3x"></i>
              </div>
              <div class="card-title mt-3">Lorem ipsum</div>
              <p class="card-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-3x"></i>
              </div>
              <div class="card-title mt-3">Lorem ipsum</div>
              <p class="card-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-3x"></i>
              </div>
              <div class="card-title mt-3">Lorem ipsum</div>
              <p class="card-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-3x"></i>
              </div>
              <div class="card-title mt-3">Lorem ipsum</div>
              <p class="card-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- end service --}}
  
  {{-- portfolio --}}
    <div class="portfolio mt-5">
      <div class="container">
          <div class="title-container">
          <h2 class="text-center fw-bold">PORTFOLIO</h2>
          </div>
        <div class="row mt-5">
         <div class="col-md-12">
          <div class="masonry">
            <div class="masonry-sizer"></div>
            <div class="masonry-item mt-3">
              <img src="/img/p1.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p2.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p3.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p4.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p5.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p6.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p7.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p8.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p9.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p10.jpg" alt="" class="img-fluid" />
            </div>
            <div class="masonry-item mt-3">
              <img src="/img/p11.jpg" alt="" class="img-fluid" />
            </div><div class="masonry-item mt-3">
              <img src="/img/p12.jpg" alt="" class="img-fluid" />
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
    {{-- end portfolio --}}

    <div class="clients mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">CLIENTS</h2>
        </div>
      </div>
    </div>
  <div class="vh-50">
    
  </div>

    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/vendor/fontawesome/js/all.min.js"></script>
    {{-- <script src="/vendor/masonry/masonry.pkgd.min.js"></script> --}}
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="/js/app.js"></script>
    {{-- <script src="/js/jquery-3.6.0.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
</html>