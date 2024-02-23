<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <form action="/addbuku" method="post">
        @csrf 
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" placeholder="masukkan gambar">

         <label for="Judul">Judul</label>
         <input type="text" name="judul" placeholder="masukkan Judul">

         <label for="Penulis">Penulis</label>
         <input type="text" name="penulis" placeholder="masukkan Penulis">
         
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" placeholder="masukkan penerbit">

         <label for="thn">Tahun Terbit</label>
         <input type="text" name="thn" placeholder="masukkan Tahun Terbit">

         <button type="submit">Submit</button>
    </form>
</body>
</html>