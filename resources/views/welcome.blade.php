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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                                <li><a href="#footer">Contact</a></li>
                            </ul>
                        </nav>
                        <a class="header-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="{{ asset('img/pizza.png') }}" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="{{ asset('img/lad2.gif') }}" alt="" style="margin-top: -400px; position: absolute;">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        <span >Fast</span>
                                        Food Delivery

                                    </h1>
                                    <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem <br>
                                        Sed ut perspiciatis unde omnis iste natus sit voluptatem <br>accusantium
                                        doloremque laudantium
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Check our Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="banner-img-wp">
                                    <div class="banner-img" >


                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">Trusted by 70+ companies</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="{{ asset('assets/images/brands/b1.png') }}" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{ asset('assets/images/brands/b2.png') }}" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{ asset('assets/images/brands/b3.png') }}" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{ asset('assets/images/brands/b4.png') }}" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{ asset('assets/images/brands/b5.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">About Us</p>
                                <h2 class="h2-title">Discover our <span>restaurant story</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolore at
                                    aspernatur eveniet temporibus placeat voluptatum quaerat accusamus possimus
                                    cupiditate, quidem impedit sed libero id perspiciatis esse earum repellat quam.
                                    Dolore modi temporibus quae possimus accusantium, cum corrupti sed deserunt iusto at
                                    sapiente nihil sint iste similique soluta dolor! Quod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(img/aut.gif);">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">our menu</p>
                                    <h2 class="h2-title">wake up early, <span>eat fresh & healthy</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                                <img src="{{ asset('assets/images/menu-1.png') }}" alt="">
                                                All
                                            </li>
                                            <li class="filter" data-filter=".breakfast">
                                                <img src="{{ asset('assets/images/menu-2.png') }}" alt="">
                                                Breakfast
                                            </li>
                                            <li class="filter" data-filter=".lunch">
                                                <img src="{{ asset('assets/images/menu-3.png') }}" alt="">
                                                Lunch
                                            </li>
                                            <li class="filter" data-filter=".dinner">
                                                <img src="{{ asset('assets/images/menu-4.png') }}" alt="">
                                                Dinner
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ asset('assets/images/dish/1.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Fresh Chicken Veggies</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. 499</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                                <img src="{{ asset('assets/images/dish/2.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.3
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Grilled Chicken</h3>
                                            <p>80 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>1</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. 359</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ asset('assets/images/dish/3.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Panner Noodles</h3>
                                            <p>100 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. 149</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ asset('assets/images/dish/4.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Chicken Noodles</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. 379</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ asset('assets/images/dish/5.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Bread Boiled Egg</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Non Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. 99</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ asset('assets/images/dish/6.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Immunity Dish</h3>
                                            <p>120 calories</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                <li>
                                                    <p>Type</p>
                                                    <b>Veg</b>
                                                </li>
                                                <li>
                                                    <p>Persons</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. 159</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="{{ asset('assets/images/pizza.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Chicken Pepperoni</h2>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                                    eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                                    totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                                    distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                                    laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                                    voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                                <h2 class="xxl-title">Chicken Pepperoni</h2>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                                    eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                                    totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                                    distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                                    laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                                    voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-1">
                            <div class="sec-img">
                                <img src="{{ asset('assets/images/sushi.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="{{ asset('assets/images/table-leaves-shape.png') }}" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="{{ asset('assets/images/table-leaves-shape.png') }}" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Book Table</p>
                                    <h2 class="h2-title">Opening Table</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Thrusday</h3>
                                        <p>9:00 am - 22:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:+0655587583">+0655587583</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Friday to Sunday</h3>
                                        <p>11::00 am to 20:00 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>




                </div>

            </section>



            <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                       </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(../img/bike.png);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Nilay Hirpara
                                                </h3>
                                                <p>des</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(../img/deliv.png);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Ravi Kumawat
                                                </h3>
                                                <p>des.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(../img/perrson.png);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Navnit Kumar
                                                </h3>
                                                <p>des</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(../img/dilvror.png);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Somyadeep Bhowmik
                                                </h3>
                                                <p>des</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq-sec section-repeat-img" style="background-image: url(assets/asset/images/faq-bg.png);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Frequently <span>asked questions</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">What are the login hours?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What do i get my refund?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">How long it will take food to arrive?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Does your restaurant has both veg and non veg?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Voluptates, distinctio?</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What is cost of food delivery?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Nam officiis ducimus, cum enim repudiandae animi.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Who is eligible for pro membership?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. </p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>


            <div class="bg-pattern bg-light repeat-img"
                style="background-image: url(assets/images/blog-pattern-bg.png);">
                <section class="blog-sec section" id="blog">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Our blog</p>
                                        <h2 class="h2-title">Latest Publications</span></h2>
                                        <div class="sec-title-shape mb-4">
                                            <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog1.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">September.15.2021</p>
                                            <a href="#" class="h4-title">Energy Drink which you can make at home.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog2.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">October.15.2021</p>
                                            <a href="#" class="h4-title">Fresh Veggie and rice combo for dinner.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog3.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">November.15.2021</p>
                                            <a href="#" class="h4-title">Chicken burger with double nuggets</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="newsletter-sec section pt-0">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="newsletter-box text-center back-img white-text"
                                        style="background-image: url(assets/images/news.jpg);">
                                        <div class="bg-overlay dark-overlay"></div>
                                        <div class="sec-wp">
                                            <div class="newsletter-box-text">
                                                <h2 class="h2-title">Subscribe our newsletter</h2>
                                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit ad
                                                    veritatis.</p>
                                            </div>
                                            <form action="#" class="newsletter-form">
                                                <input type="email" class="form-input"
                                                    placeholder="Enter your Email Here" required>
                                                <button type="submit" class="sec-btn primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

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



        </div>
    </div>





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

</body>

</html>
