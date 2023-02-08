<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light position-sticky" style="background-color: #B01B1B">
        <div class="container">
            <a class="navbar-brand text-white fs-2 p-2" href="#">EduTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active p-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-3" href="#">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-3" href="#">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white p-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mt-2 px-5 d-inline-block text-white login " href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide slider mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                <div class="slider-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                <div class="slider-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                <div class=" slider-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-md-6 ">
                <h1 style="color: #4D4D4D;">Set Your Goal with Us</h1>
            </div>
            <div class="col-md-6  text-end">
                <h1><a href="" class="text-danger">View All</a></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
              <a href="#">
                <div class="card cate_card">
                    <div class="card-body">
                      <h4 class="card-title p-4"><i class="fa-solid fa-business-time fa-2xl text-danger"></i> Business</h4>
                      <div class="d-flex justify-content-between">
                        <p class="card-text p-4 d-inline">5 Course</p> 
                        <a href="#" class="bg-dark rounded-circle me-4 p-1"><i class="fa-solid fa-arrow-right category_font"></i></a>
                      </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4">
              <a href="#">
                <div class="card cate_card">
                    <div class="card-body">
                      <h4 class="card-title p-4"><i class="fa-solid fa-code fa-2xl text-success"></i> Development</h4>
                       <div class="d-flex justify-content-between">
                            <p class="card-text p-4 d-inline">5 Course</p> 
                            <a href="#" class="bg-dark rounded-circle me-4 p-1"><i class="fa-solid fa-arrow-right category_font "></i></a> 
                       </div> 
                    </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4">
              <a href="#">
                <div class="card cate_card">
                    <div class="card-body">
                      <h4 class="card-title p-4"><i class="fa-solid fa-pen-nib fa-2xl text-danger"></i> Design</h4>
                      <div class="d-flex justify-content-between">
                        <p class="card-text p-4 d-inline">10 Course</p> 
                        <a href="#" class="bg-dark rounded-circle me-4 p-1"><i class="fa-solid fa-arrow-right category_font"></i></a>
                      </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-4">
              <a href="#">
                <div class="card cate_card">
                    <div class="card-body">
                      <h4 class="card-title p-4"><i class="fa-solid fa-chart-simple fa-2xl text-primary"></i> Marketing</h4>
                        <div class="d-flex justify-content-between ">
                            <p class="card-text p-4 d-inline">10 Course</p> 
                            <a href="#" class="bg-dark rounded-circle p-1 me-4"><i class="fa-solid fa-arrow-right category_font"></i></a>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-4">
              <a href="#" class="link">
                <div class="card cate_card">
                    <div class="card-body">
                      <h4 class="card-title p-4"><i class="fa-solid fa-music fa-2xl text-dark"></i> Music</h4>
                      <div class="d-flex justify-content-between">
                        <p class="card-text p-4 d-inline">10 Course</p> 
                        <a href="#" class="bg-dark rounded-circle p-1 me-4"><i class="fa-solid fa-arrow-right category_font"></i></a>
                      </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-sm-4 mt-4">
              <a href="">
                <div class="card cate_card">
                    <div class="card-body">
                      <h4 class="card-title p-4"><i class="fa-solid fa-notes-medical fa-2xl text-info"></i> Physics</h4>
                      <div class="d-flex justify-content-between">
                        <p class="card-text p-4 d-inline">7 Course</p> 
                        <a href="#" class="bg-dark rounded-circle p-1 me-4 "><i class="fa-solid fa-arrow-right category_font"></i></a>
                      </div>
                    </div>
                </div>
              </a>
            </div>
        </div>

        <div class="d-flex justify-content-center p-5">
            <hr style="width: 900px;"/>
        </div>
    </div>

    <div style="background: #D9D9D9; height: 600px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mt-4">
                      <div class="card" style=" background-color: #000000">
                          <div class="card-body ">
                            <div style="background-image: url('{{ asset('frontend/img/Rect.png') }}')">

                            </div>
                          </div>
                      </div>
                </div>
                <div class="col-sm-4 mt-4">
                      <div class="card" style=" background-color: #000000">
                          <div class="card-body ">
                            <div style="">

                            </div>
                          </div>
                      </div>
                </div>
                <div class="col-sm-4 mt-4">
                      <div class="card" style=" background-color: #000000">
                          <div class="card-body ">
                            <div class="newskill">
                                
                                <img src="{{ asset('frontend/img/man.png') }}" alt="">
                            </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="journey">
            <div class="row">
                <div class="col-md-4">
                    <div class="journey-content">
                        <img class="rounded" src="{{ asset('frontend/img/journey.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 offset-md-2">
                    <div class="text-white journey-content-1">
                        <div>
                          <h1>Start your journey with us</h1>
                          <p class="mt-3">Now wherever you are, it doesn't matter! Because everyone is learning and winning with us, the country's most trusted digital learning organization. But how? Watch the video next to find out how.</p>
                          <div class="text-center joruney-btn mt-5">
                              <a href="" class="px-3">About Us</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="counter" style="">
                          <h1 class="">50K+</h1> 
                          <h4>Students</h4>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="counter">
                          <h1 class="">50K+</h1> 
                          <h4>Students</h4>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                      <div class="counter">
                          <h1 class="">50K+</h1> 
                        <h4>Students</h4>
                      </div>
                        
                    </div>
                    <div class="col-md-6 p-0">
                      <div class="counter">
                        <h1 class="">50K+</h1> 
                        <h4>Students</h4>      
                      </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class=" counter-pic d-flex justify-content-center align-items-end">
                    <img  src="{{ asset('frontend/img/counter-kid.png') }}" class="mt-5" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="section-7">
        <div class="row">
          <div class="col-md-6">
              <div class="text-white p-5 ">
                <h1>Why choose Edutech?</h1>
                <h5>Edutech is a reliable institute for quality study and exam preparation of 100K  students across the country with the best mentors and latest technology!</h5>
              </div>
          </div>
          <div class="col-md-6">
              <div class="row p-5">
                  <div class="col-md-6">
                    <div class="p-4 mb-2 section-content">
                      <a href="">
                        <div class="d-flex">
                          <i class="fa-sharp fa-solid fa-book"></i>
                          <h5 class="ms-3">Best Content</h5>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-4 mb-2 section-content">
                      <a href="">
                        <div class="d-flex">
                          <i class="fa-sharp fa-solid fa-book"></i>
                          <h5 class="ms-3">Easy Study Metarial</h5>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-4 mb-2 section-content">
                      <a href="">
                        <div class="d-flex">
                          <i class="fa-sharp fa-solid fa-book"></i>
                          <h5 class="ms-3">Budget Friendly</h5>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-4 mb-2 section-content">
                      <a href="">
                        <div class="d-flex">
                          <i class="fa-sharp fa-solid fa-book"></i>
                          <h5 class="ms-3">Fluent Presentation</h5>
                        </div>
                      </a>
                    </div>
                  </div>
                  
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mentor">
        <div class="container">
          <div class="">
            <h2 class="fav">Favourite Mentor</h2>
          </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="text-center border-end">
                    <img src="{{ asset('frontend/img/mentor.png') }}" alt="">
                    <h3 class="text-white mt-2">Charlse Xiaver</h3>
                    <p class="text-white">Mind Control Power</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="text-center border-end">
                    <img src="{{ asset('frontend/img/mentor1.png') }}" alt="">
                    <h3 class="text-white mt-2">Logan</h3>
                    <p class="text-white">Healing Power</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="text-center border-end">
                    <img src="{{ asset('frontend/img/mentor2.png') }}" alt="">
                    <h3 class="text-white mt-2">Watcher</h3>
                    <p class="text-white">Watch Every Universe</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="text-center border-end">
                    <img src="{{ asset('frontend/img/mentor.png') }}" alt="">
                    <h3 class="text-white mt-2">Charlse Xiaver</h3>
                    <p class="text-white">Mind Control Power</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="our-journey">
            <div class="row">
                <div class="col-md-4">
                    <div class="our-journey-content">
                        <img class="rounded" style="width: 390px; height: 371px;" src="{{ asset('frontend/img/journey.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7 offset-md-1">
                    <div class=" our-journey-content-1">
                        <h1>Start your journey with us</h1>
                        <p class="mt-3">Now wherever you are, it doesn't matter! Because everyone is learning and winning with us, the country's most trusted digital learning organization. But how? Watch the video next to find out how.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-8">
      <div class="container">
        <div class="p-5">
          <p class="gradute-text">Listen from Graduates</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="gradu-content">
              <div class="d-flex">
                <div class="me-4">
                  <img src="{{ asset('frontend/img/gradu.png') }}" alt="">
                </div>
                <div>
                  <h3>Jhon Doe</h3>
                  <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam justo, ultrices ut varius ac, luctus vel tellus.</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="gradu-content">
              <div class="d-flex">
                <div class="me-4">
                  <img src="{{ asset('frontend/img/gradu1.png') }}" alt="">
                </div>
                <div>
                  <h3>Jhon Doe</h3>
                  <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam justo, ultrices ut varius ac, luctus vel tellus.</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="text-white p-4">
                <h2>EduTech</h2>
                <p>Unlock Your Potential, Learn Anywhere Anytime.</p>
              </div>
          </div>
          <div class="col-md-2">
              <div class="text-white p-4">
                  <h4 class="mb-3">Company</h4>
                  <div class="footer-company">
                    <p><a href="">Join as a Teacher</a></p>
                    <p><a href="#">Privacy Policy</a></p>
                    <p><a href="#">Course</a></p>
                    <p><a href="#">About</a></p>
                  </div>
              </div>
          </div>
          <div class="col-md-2">
            <div class="text-white p-4">
              <h4 class="mb-3">Others</h4>
              <div class="footer-other">
                <p><a href="">Blog</a></p>
                <p><a href="#">Store</a></p>
                <p><a href="#">Offers</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-white text-center p-4">
              <h4 class="mb-3">Contact</h4>
              <div class="footer-contact">
                <p>Contact-1234</p>
                <p>Email:edutech@skill.com</p>
                  <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-square-github"></i></a>
                  <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>