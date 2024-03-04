{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>Document</title> --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('/public/js/main.js')}}">
    <link rel="stylesheet" href="{{ asset ('/public/js/faq.js')}}">
    <link rel="stylesheet" href="{{ asset ('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('/css/https://unpkg.com/swiper@8/swiper-bundle.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>
    <section>
        <div class="container">
            <div class="navbar" id="navbar">
                <div class="logo">
                    <img src="{{ asset('/images/bg.png') }}" alt="">
                </div>


                <ul class="link">
                    <li class="home"><a href="/homepage">Home</a></li>
                    <li class="categori"><a href="#kategori">Category</a></li>
                    <li class="populer"><a href="#populer">Popular</a></li>
                </ul>

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
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @auth
                            @if (Auth::user()->role==='admin'||Auth::user()->role==='petugas')
                            <a href="/dashboard">Dashboard || </a>
                            @else
                            <a href="/profil/{{ Auth::user()->id }}">
                                Profil ||
                            </a>
                            @endif
                            @endauth
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                <div class="arrowed">
                    <img class="panah" src="{{ asset('images/arrow.png') }}" alt="">
                </div>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    <a href="" class="swiper-slide"><img src="images/bukubaru4.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="images/bukubaru3.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="images/bukubaru4.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="images/bukubaru2.png" alt=""></a>
                    <a href="" class="swiper-slide"><img src="images/bukubaru1.png" alt=""></a>
                    {{-- <a href="" class="swiper-slide"><img src="images/bukubaru2.png" alt=""></a> --}}
                </div>
                <img src="{{ asset ('images/standbook.png') }}" alt="" class="stand">
            </div>
        </div>


    </section>

    <section class="seksion3" id="kategori">
        <div class="kotak_kategori" data-aos="fade-in">
            <div class="imgk">
                <a href=" #"><img src="{{ asset ('images/image6.png') }}" alt=""> </a>
                <a href="/">Novel</a>
            </div>
            <div class="imgk">
                <a href=" #"> <img src="{{ asset ('images/image7.png') }}" alt=""> </a>
                <a href="/">Philosophy</a>
            </div>
            <div class="imgk">
                <a href=" #"><img src="{{ asset ('images/image8.png') }}" alt=""> </a>
                <a href="/">Knowledge</a>
            </div>
            <div class="imgk">
                <a href="#"><img src="{{ asset ('images/image9.png') }}" alt=""> </a>
                <a href="/">Poem </a>
            </div>
            <div class="imgk">
                <a href="/catalog"><img src="{{ asset ('images/image10.png') }}" alt=""></a>
                <a href="/catalog">More</a>
            </div>
        </div>
    </section>

    <section class="seksion4">
        <div class="lorem" data-aos="fade-left">
            <h3>New Release Book</h3>
            <p>Lorem ipsum dolor sit Lorem, ipsum dolor Lorem ipsum dolor sit amet Lorem <br>
                ipsum dolor sit amet consectetur adipisicing elit. Cumque, dolorem.</p>
        </div>
    </section>

    <section class="seksion5" data-aos="fade-right">
        <div class="recomendation">
            <div class="imgkk">
                <img src="{{ asset ('images/ikigay.png') }}" alt="">
                <p>IKIGAI <br>
                    <span class="lor">
                        pelajari rahasia hidup orang <br>
                        jepang umur panjang</span>
                </p>
            </div>
            <div class="imgkk">
                <img src="{{ asset ('images/coba.png') }}" alt="" class="filo">
                <p>FILOSOFI TERAS <br>
                    <span class="lor">
                        miliki cara hidup untuk lebih tenang <br>
                        dengan menjadi stoicsm
                    </span>
                </p>
            </div>
            <div class="imgkk">
                <img src="{{ asset ('images/ikigay.png') }}" alt="">
                <p>IKIGAI <br>
                    <span class="lor">
                        pelajari rahasia hidup orang <br>
                        jepang umur panjang</span>
                </p>
            </div>
            <div class="imgkk">
                <img src="{{ asset ('images/filo.png') }}" alt="" class="filo">
                <p>FILOSOFI TERAS <br>
                    <span class="lor">
                        miliki cara hidup untuk lebih tenang <br>
                        dengan menjadi stoicsm
                    </span>
                </p>
            </div>
            <div class="imgkk">
                <img src="{{ asset ('images/ikigay.png') }}" alt="">
                <p>IKIGAI <br>
                    <span class="lor">
                        pelajari rahasia hidup orang <br>
                        jepang umur panjang</span>
                </p>
            </div>
        </div>
    </section>

    <section class="seksion6" data-aos="fade-left">
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

    {{-- start --}}

    <section class="seksion7 " data-aos="fade-in" id="populer">
        <div class="popular">
            <div class="teks-pop">

                <h3>Popular</h3>
                <p>
                    our popular book<br>
                    a lot of people already read it <br> you have to join one of them
                </p>
            </div>

            <div class="slide hi-slide" data-aos="fade-out">
                <div class="hi-prev"></div>
                <div class="hi-next"></div>
                <ul>
                    <li><img src="{{ asset('images/bukubaru1.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru2.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru3.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru1.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru2.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru3.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru1.png') }}" alt=""></li>
                    <li><img src="{{ asset('images/bukubaru2.png') }}" alt=""></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="faq-section" data-aos="fade-out">
        <h1 class="tittle">Frequenly Asked Question</h1>
        <ul class="faq">
            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>What is B00K</span>
                </div>
                <div class="a">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id unde veniam possimus nesciunt laborum dolor repellendus cum consectetur iure.
                    </p>
                </div>
            </li>

            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>How can Borrow?</span>
                </div>
                <div class="a">
                    <p>
                        Find your book that you want, Then Click the Borrow Button
                    </p>
                </div>
            </li>

            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>How Do i Give the Comment ?</span>
                </div>
                <div class="a">
                    <p>
                        Your comment will be our Motivation for better, go to the detail and find Comment Section There
                    </p>
                </div>
            </li>

            <li>
                <div class="q">
                    <span class="arrow"></span>
                    <span>How do i replay?</span>
                </div>
                <div class="a">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id unde veniam possimus nesciunt laborum dolor repellendus cum consectetur iure.
                    </p>
                </div>
            </li>
        </ul>
    </section>

    <section class="footer">
        <div class="foot">
            <div class="bufuter">
                <img src="{{ asset('/images/butuferr.png') }}" alt="">
            </div>
            <div class="real-foot">
                <img src="{{ asset('/images/logo-footer.png') }}" alt="">
            </div>
            <div class="thank">
                <div class="re">
                    <p>Thank you for visiting! We appreciate your time <br>
                        and invite you to keep reading to discover <br>
                        more about us.</p>
                    <div class="more">
                        <a href=""><img src="{{ asset('/images/fb.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('/images/telcum.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('/images/ig.png') }}" alt=""></a>
                    </div>
                </div>


                <div class="copy-right">
                    <p>© 2024 — Finally Copyright Grace </p>
                </div>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset ('js/main.js') }}"></script>

    <script src="{{ url('https://code.jquery.com/jquery-3.7.1.js') }}"></script>

    <script src="{{ 'js/jquery.hislide.js' }}"></script>

    <script>
        $('.slide').hiSlide();
    </script>

    <script>
        const q = document.querySelectorAll('.q');
        const a = document.querySelectorAll('.a');
        const arr = document.querySelectorAll('.arrow');

        //Select all 'q' elements
        for (let i = 0; i < q.length; i++) {
            //Add click event to all 'q' elements
            q[i].addEventListener('click', () => {
                a[i].classList.toggle('a-opened');
                arr[i].classList.toggle('arrow-rotated');

            });

        };
    </script>




</body>

</html>