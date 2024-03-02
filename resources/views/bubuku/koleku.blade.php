<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 


      <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Dela+Gothic+One&family=Encode+Sans+Semi+Expanded:wght@600&family=Julius+Sans+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Newsreader:opsz,wght@6..72,400;6..72,500;6..72,600&family=Poppins:ital,wght@0,200;0,300;1,200&family=Quattrocento&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    


    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    
                    <img src="{{ asset ('images/logo-dash.png') }}" alt="">
                </span>

                
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Homepage</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/catalog">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Collection</span>
                        </a>
                    </li>

                    

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
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

     <section class="home">
        <div class="contain">       

            <h1> {{ Auth::user()->name }}  's <br> Collection</h1>
            
            <input type="search" class="search" placeholder="Search here">
            <div class="dashi">
                <div class="login">
                    <ul class="navbar-nav ms-auto login">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link satu" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link dua" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
                    <a class="a" href="">Borrow</a>

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
