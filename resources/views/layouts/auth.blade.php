    <!DOCTYPE html>
    <html lang="en-US" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TeachMe | Bosh Sahifa</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="/css/theme.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/d15a3e4801.js" crossorigin="anonymous"></script>

    </head>


    <body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">


            <!-- ============================================-->
            <!-- <section> begin ============================-->

            <!-- <section class="bg-primary py-2 d-none d-sm-block">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto d-none d-lg-block">
                            <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>1600 Amphitheatre Parkway, CA 94043 </span></p>
                        </div>
                        <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
                            <ul class="list-unstyled list-inline my-2">
                                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
                                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
                                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
                                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
                        </div>
                    </div>
                </div>
  

            </section> -->

            <!-- <section> close ============================-->
            <!-- ============================================-->


            <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="navbar-brand" href="index.html"><img src="/img/gallery/logo-n.png" height="45" alt="logo" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Bosh sahifa</a></li>
                            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{route('mentors')}}">Ustoz topish</a></li>
                            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{route('referral')}}">Taklif qilish</a></li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                        <img class="" style="width:30px; border-radius:50%" src="https://topkazinoonline.com/wp-content/plugins/q-auth/assets/img/default-user.png" alt="">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="d-flex">
                                            <div class="bg-white dropdown-item">
                                                <li><a class="dropdown-item" href="#">Profilni tahrirlash</a></li>
                                                <li><a class="dropdown-item" href="#">Mening Ustozlarim</a></li>
                                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Chiqish
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->




        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="/vendors/@popperjs/popper.min.js"></script>
        <script src="/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="/vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <!-- <script src="/vendors/fontawesome/all.min.js"></script> -->
        <script src="/js/theme.js"></script>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    </body>

    </html>