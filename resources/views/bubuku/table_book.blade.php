<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/table_book.css') }}">
    
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    {{-- <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li> --}}

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                           <i class='bx bx-archive-in icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
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
            <h1>Booklist</h1>
            <input type="search" class="search" placeholder="Search here">
            <div class="dashi">
                <div class="login">
                   <img src="{{ asset('images/iconamoon_profile-bold.png') }}" alt="">
                </div>
            </div>
        </div>  
        
        <div class="add">
            <a href="/tambah">Add More Books</a>
        </div>

        <table>
                
            <tr class="tabel">
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Penerbit</th>
                <th>Action</th>
            </tr>
            @foreach ($show as $tampil)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tampil->gambar }}</td>
                <td>{{ $tampil->judul }}</td>
                <td>{{ $tampil->penulis }}</td>
                <td>{{ $tampil->penerbit }}</td>
                <td>{{ $tampil->tahun_penerbit }}</td>
                <td style="display: flex; gap:50px; justify-content:center;">
                    <a href="/edit/{{ $tampil->id }}"><i class="bi bi-pencil"></i></a>
                    <form action="/delete/{{ $tampil ->id }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" value=""  style="background-color: transparent; border:none;"><i class="bi bi-trash" style="font-size :20px;">
                        </i></button>
                    </form>

                </td>
            </tr>
            @endforeach
        </table>
        


        </div>

        
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