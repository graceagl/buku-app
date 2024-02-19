<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('/css/ygbaru.css') }}">
        
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
    </head>
<body>
    <section class="home_section" id="home">
        <div class="home__container container grid " > 
            <div class="home__data">
                <h1 class="home__tittle">
                    browse <br>
                    select
                </h1>

                <p class="home__decription">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Exercitationem suscipit cumque cupiditate, molestias est possimus beatae voluptate dolor nihil perferendis adipisci neque voluptatum magni asperiores laborum debitis eius quibusdam eum?  
                </p>

                
            </div>

            <div class="home__images">
                <div class="home__swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="home__article swiper-slide">
                            <img src="{{ asset ('images/buku1.png')}} " alt="" class="home__img">
                        </article>
                        
                        <article class="home__article swiper-slide">
                            <img src="{{ asset ('images/buku1.png')}}" alt="" class="home__img">
                        </article>
                        
                        <article class="home__article swiper-slide">
                            <img src="{{ asset ('images/buku1.png')}}" alt="" class="home__img">
                        </article>
                        
                        <article class="home__article swiper-slide">
                            <img src="{{ asset ('images/buku1.png')}}" alt="" class="home__img">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('js/main2.js') }}"></script>
</body>
</html>