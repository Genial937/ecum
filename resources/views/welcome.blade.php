@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/center.webp') }}" alt="First slide" style="height: 80vh">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/center1.webp') }}" alt="Second slide"
                    style="height: 80vh">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/center.webp') }}" alt="Third slide" style="height: 80vh">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Our Mandate</h2>
                    <hr>
                    <p>The Ecumenical Centre for Justice and Peace (ECJP) is a program for the Ecumenical Trust which is an
                        ecumenical group of people from different religious convictions working for peace through justice.

                    </p>
                    <p>It is driven by the belief that the communities are affected by the socio-economic and political
                        issues and therefore must be engaged in the affairs of their Counties/Country.</p>
                    <p>ECJP provides a forum for people from all walks of life to come together and bring about a just and
                        peaceful society through civic education, civic engagement and influence, and inter-religious
                        dialogue.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <div class=" card">
                        <div class="card-header">
                            <h3>Our Vision</h3>
                        </div>
                        <div class="card-body">
                            <p>Vibrant Informed citizenry with strong values and living life of dignity</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                       <div class=" card">
                    <div class="card-header">
                        <h3>Our Mission</h3>
                    </div>
                    <div class="card-body">
                        <p>To build a strong community driven by moral values, peaceful coexistence and free of injustice
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                       <div class=" card">
                <div class="card-header">
                    <h3>Our core Values</h3>
                </div>
                <div class="card-body">
                    <p>To build a strong community driven by moral values, peaceful coexistence and free of injustice
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <section class="section-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container-fluid">
                        <h2>Back Ground</h2>
                        <hr>
                        <p>Devolution geared towards strengthening peoples own governance and platforms to address
                            structural and systemic causes of injustice. The Strategy thus envisioned the following
                            interconnected strategic objectives with resilience being a cross-cutting strand: </p>
                        <ul>
                            <li>To enhance citizen engagement in democratic and governance processes for a stable, just and
                                peaceful society. </li>
                            <li>To enhance cohesion and peaceful co- existence among citizens by promoting and encouraging
                                active non-violence in resolving national and regional conflicts. </li>
                            <li>To enhance the capacity of the marginalized and vulnerable groups to access and utilize
                                available resources effectively</li>
                            <li>To facilitate citizens access to and equitably share natural resources and opportunities
                                availed by national and regional integration within the East African Community.

                                ​</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container-fluid">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('images/center.webp') }}" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/center1.webp') }}" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('images/center.webp') }}" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container-fluid">
                        <h2>Our Strategic Focus Area</h2>
                        <ul>
                            <li>Communities realize their right to good governance.</li>
                            <li>The Youth and other marginalized groups empowered</li>
                            <li>Secure rights to land, natural resource and resilience of communities for improved livelihood</li>
                            <li>To enhance cohesion, peaceful co- existence and conflict sensitivity</li>
                        </ul>
                        <div class="links">
                            <ul>
                                <li><a href="">More About Us</a></li>
                                <li><a href="">More About Our Programs</a></li>
                                <li><a href="">Educational Materials</a></li>
                                <li><a href="">Our Partners</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
