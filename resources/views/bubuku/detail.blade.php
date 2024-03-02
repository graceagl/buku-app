<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Dela+Gothic+One&family=Encode+Sans+Semi+Expanded:wght@600&family=Julius+Sans+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Newsreader:opsz,wght@6..72,400;6..72,500;6..72,600&family=Poppins:ital,wght@0,200;0,300;1,200&family=Quattrocento&family=Quicksand:wght@300&display=swap" rel="stylesheet">


    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>



    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">

                    <img src="{{ asset ('images/logo-dash.png') }}" alt="">
                </span>

                {{-- <div class="text logo-text">
                    <img src="{{ asset('images/logo-dash.png') }}" alt="">
            </div> --}}
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li> --}}
                    {{--
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li> --}}

                    <li class="nav-link">
                        <a href="/kolekuk">
                            <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Collection</span>
                        </a>
                    </li>

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li> --}}

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>
    {{-- <section class="home"> --}}
        <div class="contain">
            <a href="/catalog"><i class="bi bi-arrow-left"></i> Back</a>
            <input type="search" class="search" placeholder="Search here">
            <div class="dashi">
                <div class="login">
                    <img src="{{ asset('images/iconamoon_profile-bold.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="main">
        <div class="container">
            <div class="cover">
                <img src="{{ asset('/images')}}/{{ $b->gambar }}" alt="" class="mmg">
                <div class="garid">
                    <div class="de">
                        <h3>{{ $b->judul }}</h3>
                        <p>{{ $b->penulis }}<br> {{ $b->penerbit }} <br> 5.0 Ratings </p>

                    </div>
                    <div class="borrow">

                        <a href="">Borrow</a>
                        <form action="/simpan/{{$b->id}}" method="post"  >
                            @csrf
                            <button type="submit" class="btn">
                                <i class="bi bi-box2-heart-fill"></i>
                            </button>

                        </form>
                    </div>
                    <hr>
                </div>
            </div>


            <div class="Dek">
                <div class="dek">
                    <div class="dex">
                        <h5>Descrpition</h5>

                        <p>{{ $b->dec }}</p>
                    </div>
                    <br>
                    <textarea name="coment" id="coment" cols="30" rows="10"> Comentar</textarea>
                    <div class="Book-detail">
                        
                    </div>

                </div>
                <div class="dexx">
                    <div class="dex">
                        <h5>Author</h5>
                        <p>Steve Krug is a usability consultant who has more than 30 years of experience as a user advocate for companies like Apple, Netscape, AOL, Lexus, and others. Based in part on the success of his first book, Don't Make Me Think, he has become a highly sought-after speaker on usability design.
                        </p>
                    </div>

                </div>
            </div>






        </div>

    </section>


    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>
</body>