@extends('layouts.app')

@section('content')
    <section class="about">
        <div class="container about-content">
            <div class="head-section text-center">
                <h2>OUR Partners</h2>
                <h3><a href="{{ route('index') }}">Home</a> / Our Partners</h3>
            </div>
            <div class="body-section card shadow p-3">
                <div class="card-body">
                    <h2 class="card-title text-center">Our Partners</h2>
                    <hr class="line" style="margin: 10px auto;">
                    <section class="customer-logos slider">
                        <div class="slide"><img src="images/adidas.png" alt="logo"></div>
                        <div class="slide"><img src="images/facebook.png" alt="logo"></div>
                        <div class="slide"><img src="images/google.png" alt="logo"></div>
                        <div class="slide"><img src="images/instagram.png" alt="logo"></div>
                        <div class="slide"><img src="images/nike.png" alt="logo"></div>
                        <div class="slide"><img src="images/twitter.png" alt="logo"></div>
                        <div class="slide"><img src="images/uber.png" alt="logo"></div>
                        <div class="slide"><img src="images/youtube.png" alt="logo"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
