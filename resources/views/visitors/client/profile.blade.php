<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Food</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- fancy box  -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <!-- custom css  -->

    <link rel="stylesheet" href="{{ asset('res/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleB.css') }}">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">

                            <img src="{{ asset('img/logoweb.png') }}" width="140" height="90" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="{{ route('list') }}">restaurants</a></li>
                                <li><a href="#footer">Contact</a></li>

                            </ul>

                        </nav>
                        <nav style="background:transparent !important; color:white; padding-left: 300px" class="navbar navbar-expand-md navbar-light bg-white ">
                            <div class="container">

                                <button type = "button" class = "navbar-toggler">
                                </button>
                                <div class = "cart">
                                  <button type = "button" id = "cart-btn">
                                    <i class = "fas fa-shopping-cart"></i>
                                    <span id = "cart-count-info"></span>
                                  </button>

                                  <div class = "cart-container">
                                    <div class = "cart-list">
                                        <div class="card mt-3" style="background:#00a08300">
                                            <div class="card-header" style="background:#00a082;">
                                                <h5 class="text-light">Commandes Lits</h5>
                                            </div>
                                            <div class="card-body" id="panel" >
                                                @foreach(Auth::user()->client->produit as $prod_client)
                                                <div style="display: flex; padding-bottom: 10px">
                                                   <div style="text-align: center">
                                                    <p style="color: rgb(255, 255, 255)">{{$prod_client->name}} </p>
                                                       </div>
                                                       <div style="padding-left: 60% " >
                                                        <img src="{{asset('products/'.$prod_client->image)}}" width="60%" height="60%" alt="...">
                                                       </div>
                                                         </div>
                                               @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class = "cart-total">
                                      <h3>Total: $</h3>
                                      <span id = "cart-total-value"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="menu food-nav-menu">

                                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="menu food-nav-menu">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div  class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background: rgba(238, 238, 238, 0.986) ; border: none ; align-items: center ;cursor: pointer">
                                                        <a    href="{{ route('authc.show') }}">
                                                            {{ __('Profile') }}
                                                        </a>


                                                        <a  "  href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                                         {{ __('Logout') }}
                                                     </a>


                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                         @csrf
                                                     </form>
                                                </div>

                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- header ends  -->
<main class="body-content" style="margin-top: 100px">
    <div class="ms-content-wrapper">

    <div class="ms-profile-overview">
        <div class="ms-profile-cover" style="background-image: url({{ asset('img/footer.jpg') }}); ">
          <img class="ms-profile-img" src="{{ asset('img/user.png') }}" alt="people" style="border: solid 5px rgb(252, 252, 252); border-radius: 100%">
          <div class="ms-profile-user-info">
            <h4 class="ms-profile-username text-white">{{Auth::user()->name}}</h4>
            <h2 class="ms-profile-role">{{Auth::user()->email}}</h2>
          </div>
          <div class="ms-profile-user-buttons">
                     </div>
        </div>
        <ul class="ms-profile-navigation nav nav-tabs tabs-bordered" role="tablist">
          <li role="presentation"><a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a></li>
          <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Professional Skills </a></li>
          <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"> Portfolio </a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane" id="tab1">
          </div>
          <div class="tab-pane" id="tab2">

          </div>
          <div class="tab-pane" id="tab3">

          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-xl-7 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
              <h2 class="section-title">About Me</h2>
              <div class="container"  >

                <form action="{{route('authc.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1"  class="form-label">Utilisateur :</label>
                        <input type="text" class="form-control" value="{{Auth::user()->name}}" name='nameU' >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
                        <input type="tele" class="form-control" value="{{Auth::user()->email}}" name='email'  >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1"  class="form-label">Nom :</label>
                        <input type="text" class="form-control" value="{{Auth::user()->client->name}}" name='name' >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prenom :</label>
                        <input type="text" class="form-control" value="{{Auth::user()->client->prenom}}" name='prenom'  >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telephone:</label>
                        <input type="tele" class="form-control" value="{{Auth::user()->client->tele}}" name='tele'  >
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-secondary">Enregistrer</button>
                    </div>
                    <div class="mb-3">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="link">Nouveau Mot de pass</a>
                    </div>

                </form>
                @include('visitors.client.edit')

             </div>


            </div>

          </div>
        </div>
        <div class="col-xl-5 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
              <ul class="ms-profile-stats">
                <li>
                  <h3 class="ms-count">5790</h3>
                  <span>Followers</span>
                </li>
                <li>
                  <h3 class="ms-count">4.8</h3>
                  <span>User Rating</span>
                </li>
              </ul>
              <h2 class="section-title">Basic Information</h2>
              <table class="table ms-profile-information">
                <tbody>
                  <tr>
                    <th scope="row">Full Name</th>
                    <td>Chihoo Hwang</td>
                  </tr>
                  <tr>
                    <th scope="row">Birthday</th>
                    <td>January 25th, 1996</td>
                  </tr>
                  <tr>
                    <th scope="row">Language</th>
                    <td>English (US)</td>
                  </tr>
                  <tr>
                    <th scope="row">Website</th>
                    <td>www.example.com</td>
                  </tr>
                  <tr>
                    <th scope="row">Phone Number</th>
                    <td>+123 456 789</td>
                  </tr>
                  <tr>
                    <th scope="row">Email Address</th>
                    <td>example@mail.com</td>
                  </tr>
                  <tr>
                    <th scope="row">Location</th>
                    <td>New York, USA</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>





      </div>
</div>
</main>

            <!-- footer starts  -->
            <footer class="page-footer bg-image" style="background-image: url(img/world_pattern.svg);">
                <div class="container">
                  <div class="row mb-5">
                    <div class="col-lg-3 py-3">
                      <h3>Fast Food</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>


                    </div>
                    <div class="col-lg-3 py-3">
                      <h5>Company</h5>
                      <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Help & Support</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-3 py-3">
                      <h5>Contact Us</h5>
                      <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                      <a href="#" class="footer-link">+212 06</a>
                      <a href="#" class="footer-link">fast@food.com</a>
                    </div>
                    <div class="col-lg-3 py-3">
                      <h5>Contact Us</h5>
                      <p>Get updates, news or events on your mail.</p>
                      <div class="social-media-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                      </div>
                    </div>
                  </div>


                </div>
              </footer>








    <!-- jquery  -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <!-- fontawesome  -->
    <script src="{{ asset('assets/js/font-awesome.min.js') }}"></script>

    <!-- swiper slider  -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- mixitup -- filter  -->
    <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>

    <!-- fancy box  -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <!-- parallax  -->
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

    <!-- gsap  -->
    <script src=" {{ asset('assets/js/gsap.min.js') }}"></script>

    <!-- scroll trigger  -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- scroll to plugin  -->
    <script src=" {{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
    <!-- custom js  -->
    <script src=" {{ asset('js/main.js') }} "></script>
{{-- ================================== --}}
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{ asset ('res/js/jquery-3.5.0.min.js') }}"></script>
  <script src="{{ asset ('res/js/popper.min.js') }}"></script>
  <script src="{{ asset ('res/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('res/js/perfect-scrollbar.js') }}"> </script>
  <script src="{{ asset ('res/js/jquery-ui.min.js') }}"> </script>
  <!-- Global Required Scripts End -->

  <!-- Costic core JavaScript -->
  <script src="{{ asset ('res/js/framework.js') }}"></script>

  <!-- Settings -->
  <script src="{{ asset ('res/js/settings.js') }}"></script>

</body>

</html>
