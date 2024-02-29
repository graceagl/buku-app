<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('/css/addbook.css') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">
</head>
<body>
    
    <div class="main">
    <form action="/addbuku" method="post">
        @csrf 
        <div class="container">
        <h1>Add Book</h1>
        <input type="file" class="upload_hide" id="upload_costum" multiple>
        <label for="upload_costum"  class="upload_label">
            <div class="image">
                <img src="" alt="">
            </div>
            <i class="fas fa-cloud-upload-alt"></i>
            <p class="drag_text">Drag & Drop to Upload File</p>
            <button class="choose_file">Choose a File</button>
        </label>
        <button class="delete_file"> Delete File</button>
    </div>
    <div class="from">
        <div class="forin">

            <label  for="Judul">Judul</label>
            <input type="text" name="judul" placeholder="masukkan Judul">
            
        </div>

        <div class="forin">

            <label for="Penulis">Penulis</label>
            <input type="text" name="penulis" placeholder="masukkan Penulis">
            
        </div>


        <div class="forin">
            
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" placeholder="masukkan penerbit">
            
        </div>

        <div class="forin">

            <label for="thn">Tahun Terbit</label>
            <input type="text" name="thn" placeholder="masukkan Tahun Terbit">
            
        </div>

        <br>

        <div class="forin">
            <textarea name="dec" id="dec"></textarea>    
            <br>
            <a href="">Submit</a>
        </div> 
    </div>
        
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $('.delete_file').hide();
        $('#upload_costum').change(function(event) {
            let tmppath = URL.createObjectURL(event.target.files[0])
            $('.image > img').fadeIn('fast').attr('src',tmppath)
            $('.delete_file').show();
            $('.choose_file').hide();

            $('.delete_file').click(function() {
                $('.image > img').fadeIn('fast').attr('src','')
              $('.delete_file').hide();
              

            })
        })
    </script>
</body>
</html>