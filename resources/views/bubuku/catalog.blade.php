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
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">

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

                    <a href="/homepage"><img src="{{ asset ('images/logo-dash.png') }}" alt=""></a>
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
                        <a href="/homepage">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
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
                        <a href="/catalog">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Catalog</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/kolekuk">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/daftarpinjam">
                            <i class='bx bx-archive-in icon'></i>
                            <span class="text nav-text">Borrowed</span>
                        </a>
                    </li>





                    {{-- --}}

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

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

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

    <div class="contain">
        <h1>Collection</h1>

        <!-- <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
             <label for="search" class="d-block mr-2">Pencarian</label>
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
          </div>
        </form> -->




        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif



        <input type="search" class="search" placeholder="Search here">
        <div class="dashi">
            <div class="login">
                <a href="/profil/{{ Auth::user()->id }}"><img src="{{ asset('images/iconamoon_profile-bold.png') }}" alt=""></a>
            </div>
        </div>
    </div>

    {{-- ===== DAFTAR BUKU ===== --}}

    <div class="mainn">

        <div class="hello">
            <h1>Hello, {{ Auth::user()->name }} !!</h1>
            <p>All Books</p>
        </div>

        <div class="utama">
            {{-- PERTAMA --}}

            @foreach($buku as $b)
            <div class="kolekxi">
                <div class="daftar1">
                    <img src="{{ asset('/images')}}/{{ $b->gambar }}" alt="" class="mmg">
                </div>

                <div class="name">
                    <h3>Dont Make me Think</h3>
                    <p>grace angelika, 2005 <br> 4/5</p>
                    <a class="a" href="/buku/peminjaman/{{ $b->id }}">Borrow</a>

                    <a class="b" href="/detail/{{ $b->id }}">Detail</a>
                </div>
            </div>
            @endforeach
        </div>

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

</html>