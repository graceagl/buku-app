<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('/public/js/main.js')}}">
        <link rel="stylesheet" href="{{ asset ('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset ('/css/https://unpkg.com/swiper@8/swiper-bundle.min.css') }}">
        <script  src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="navbar" id="navbar">
                <div class="logo">
                    <img src="{{ asset('/images/bg.png') }}" alt="">
                </div>
                
                
                <ul class="link">
                    <li class="home"><a href=" ">Home</a></li>
                    <li  class="popular"><a href="">Popular</a></li>
                    <li class="categori"><a href=" ">Category</a></li>
                </ul>
                
                <div class="login">
                    <a href="{{ route ('login') }}" class="satu">Login</a>
                    <a href="{{ route ('register') }}"  class="dua">Register</a>
                </div>
            </div>  
        </div>
        
    </section>
            
    <section class="seksion2">
        
     
        
        <div class="row">
            <div class="kontent">
                <p class="best">BEST CHOICE</p>
        <div class="description">
            <div class="teks1">
                <h1>B</h1>
                <h1>F</h1>
            </div>
            <div class="gambar">
                <img src="{{ asset('/images/logokedua.png') }}" alt="">
            </div>
            <div class="teks2">
                <h1>oks</h1>
                 <h1>r All</h1>
            </div>
        </div>
        <div class="arrow">
            <img class="panah" src="{{ asset('images/arrow.png') }}" alt="">
        </div>
            </div>        
            <div class="swiper book-slider">
            <div class="swiper-wrapper">
                <a href="" class="swiper-slide"><img src="images/buku1.png" alt=""></a>
                <a href="" class="swiper-slide"><img src="images/buku1.png" alt=""></a>
                <a href="" class="swiper-slide"><img src="images/buku1.png" alt=""></a>
                <a href="" class="swiper-slide"><img src="images/buku1.png" alt=""></a>
                <a href="" class="swiper-slide"><img src="images/buku1.png" alt=""></a>
                 <a href="" class="swiper-slide"><img src="images/buku1.png" alt=""></a>
                </div>
            <img  src="{{ asset ('images/standbook.png') }}" alt="" class="stand">
        </div>
        </div>

       
    </section>
    
    <section class="seksion3">
         <div class="kotak_kategori">
             <div class="imgk">
                 <img src="{{ asset ('images/image6.png') }}" alt="" >
                 <p>Novel</p>
             </div>
             <div class="imgk">
                 <img src="{{ asset ('images/image7.png') }}" alt="" >
                 <p>Philosophy</p>
             </div>
             <div class="imgk">
                 <img src="{{ asset ('images/image8.png') }}" alt="" >
                 <p>Knowledge</p>
             </div>
             <div class="imgk">
                 <img src="{{ asset ('images/image9.png') }}" alt="" >
                 <p>Poem</p>
             </div>
             <div class="imgk">
                 <img src="{{ asset ('images/image10.png') }}" alt="" >
                 <p>More</p>
             </div>
        </div>
    </section>

    <section class="seksion4">
        <div class="lorem">
            <h3>New Release Book</h3> 
            <p>Lorem ipsum dolor sit Lorem, ipsum dolor Lorem ipsum dolor sit amet Lorem <br>
                ipsum dolor sit amet consectetur adipisicing elit. Cumque, dolorem.</p>
        </div>
    </section>

    <section class="seksion5">
        <div class="recomendation">
            <div class="imgkk">
                 <img src="{{ asset ('images/ikigay.png') }}" alt="" >
                 <p>Novel <br> 
                <span class="lor">
                Lorem ipsum lorem imys <br>
                Lorem Lorem ipsum</span> 
                </p>
             </div>
             <div class="imgkk">
                 <img src="{{ asset ('images/coba.png') }}" alt="" class="filo" >
                 <p>Novel <br> 
                <span class="lor">
                Lorem ipsum lorem imys <br>
                Lorem Lorem ipsum</span> 
                </p>
             </div>
             <div class="imgkk">
                 <img src="{{ asset ('images/ikigay.png') }}" alt="" >
                 <p>Novel <br> 
                <span class="lor">
                Lorem ipsum lorem imys <br>
                Lorem Lorem ipsum</span> 
                </p>
             </div>
             <div class="imgkk">
                 <img src="{{ asset ('images/filo.png') }}" alt="" class="filo" >
                 <p>Novel <br> 
                <span class="lor">
                Lorem ipsum lorem imys <br>
                Lorem Lorem ipsum</span> 
                </p>
             </div>
             <div class="imgkk">
                 <img src="{{ asset ('images/ikigay.png') }}" alt="" >
               <p>Novel <br> 
                <span class="lor">
                Lorem ipsum lorem imys <br>
                Lorem Lorem ipsum</span> 
                </p>
             </div>
        </div>
    </section>

    <section class="seksion6">
        <div class="supanova">
            <div class="quotes">
                <img src="{{ asset('images/supanova.png') }}" alt="">
            </div>
            <div class="quote_tx">
            <p>
                "Berhentilah merasa hampa, berhentilah minta tolong untuk
                 dilengkapi. Berhentilah berteriak-teriak ke sesuatu di luar sana. Berhentilah bertingkah seperti ikan di dalam kolam yang malah mencari-cari air. “
                <br>
                <br>
                 SUPERNOVA
            </p>
            <a href="#" class="btn">more</a>
            </div>
        </div>
    </section>

    <div class="seksion7">
        <div class="popular-text">
            <div class="teks-pop">

                <h3>Popular</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur,<br>
                    adipisicing elit. Consequatur, laudantium iste?
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset ('js/main.js') }}"> </script>
</body>
</html>