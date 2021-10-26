   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.2/css/font-awesome.css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
       <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
   </head>

   <body>
       @include('layouts.header')
       @yield('content')
       @include('layouts.footer')
