<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Homepage</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/dashboard">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-link">
                        <a href="#">
                           <i class='bx bx-archive-in icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li> --}}
{{-- 
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
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



    <section class="main">
        
        <a href="/catalog"><i class="bi bi-arrow-left"></i> Back</a>
        <div class="conatiner">
            <div class="kiri">
                <div class="welcome">
                    
                    <h1>Welcome, {{ Auth::user()->name }} !</h1>
                </div>
                <div class="kiriu">
                    <div class="datakiri">
                        <p>Username</p>
                        <p>Name</p>
                        <p>Email</p>
                        <p>Adress</p>
                        
                    </div>

                    
                    <div class="datakanan">
                        
                        <p> {{ Auth::user()->name }}</p>
                        <p> {{ Auth::user()->username }}</p>
                        <p> {{ Auth::user()->email }}</p>
                        <p>{{ Auth::user()->alamat }}</p>
                        
                    </div>
                    
                </div>
            </div>    
            
            <div class="kanan">
                <div class="datakanan">

                    <div class="foto">
                        <img src="{{ asset('/images/aku.jpg') }}" alt="">
                        <br>
                        <div class="buttonedit">
                            <a href="/profil/edit/{{ Auth::user()->id }}">Edit</a>

                        </div>
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


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>