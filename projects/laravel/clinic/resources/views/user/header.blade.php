<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="/home">
            <span>
              TeslaWealthHub 
              <img src=" {{asset('pngimg.com - tesla_logo_PNG10.png')}} " alt="Logo" style="max-width: 20px;">
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/how"> How </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/invest">
                    <span>Invest/Wallet</span> <img src="images/wallet.png" alt="" />
                  </a>
                </li>

                    @if(Route::has('login'))

                    @auth
                      <li class="nav-item">
                      <a class="nav-link" href="/footer"> Log Out</a>                  
                  @else
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}"> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('register')}}"> Sign Up</a>
                </li>
                @endauth
                @endif
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Digital Currency
                        </h1>
                        <h2>
                          The Future of Trading.
                        </h2>
                        <div class="">
                          <a href="{{route('register')}}">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Digital Currency
                        </h1>
                        <h2>
                          The Future of Trading.
                        </h2>
                        <div class="">
                          <a href="{{route('register')}}">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/6379114.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Digital Currency
                        </h1>
                        <h2>
                          The Future of Trading.
                        </h2>
                        <div class="">
                          <a href="{{route('register')}}">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/laptop_5.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Digital Currency
                        </h1>
                        <h2>
                          The Future of Trading.
                        </h2>
                        <div class="">
                          <a href="{{route('register')}}">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Digital Currency
                        </h1>
                        <h2>
                          The Future of Trading.
                        </h2>
                        <div class="">
                          <a href="{{route('register')}}">
                            Get Started
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->

  </div>