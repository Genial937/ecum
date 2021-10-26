@extends('layouts.app')

@section('content')
    <section class="about">
        <style>
            .gallery-block {
                padding-bottom: 60px;
                padding-top: 60px;
            }

            .gallery-block .heading {
                padding-top: 40px;
                margin-bottom: 50px;
                text-align: center;
            }

            .gallery-block .heading h2 {
                font-weight: bold;
                font-size: 1.4rem;
                text-transform: uppercase;
            }

            .gallery-block.compact-gallery .item {
                overflow: hidden;
                margin-bottom: 0;
                background: black;
                opacity: 1;
            }

            .gallery-block.compact-gallery .item .image {
                transition: 0.8s ease;
            }

            .gallery-block.compact-gallery .item .info {
                position: relative;
                display: inline-block;
            }

            .gallery-block.compact-gallery .item .description {
                display: grid;
                position: absolute;
                bottom: 0;
                left: 0;
                color: #fff;
                padding: 10px;
                font-size: 17px;
                line-height: 18px;
                width: 100%;
                padding-top: 15px;
                padding-bottom: 15px;
                opacity: 1;
                color: #fff;
                transition: 0.8s ease;
                text-align: center;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
                background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.39));
            }

            .gallery-block.compact-gallery .item .description .description-heading {
                font-size: 1em;
                font-weight: bold;
            }

            .gallery-block.compact-gallery .item .description .description-body {
                font-size: 0.8em;
                margin-top: 10px;
                font-weight: 300;
            }

            @media (min-width: 576px) {

                .gallery-block.compact-gallery .item .description {
                    opacity: 0;
                }

                .gallery-block.compact-gallery .item a:hover .description {
                    opacity: 1;
                }

                .gallery-block .zoom-on-hover:hover .image {
                    transform: scale(1.3);
                    opacity: 0.7;
                }
            }

        </style>
        <div class="container about-content">
            <div class="head-section text-center">
                <h2>GALLERY</h2>
                <h3><a href="{{ route('index') }}">Home</a> / Gallery</h3>
            </div>
            <div class="body-section card shadow">
                <div class="card-body">
                    <section class="gallery-block compact-gallery">
                        <div class="container">
                            <div class="heading pt-4">
                                <h2> Gallery</h2>
                            </div>

                            <div class="row no-gutters">
                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/1.jfif">
                                        <img class="img-fluid image" src="images/1.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>


                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/2.jfif">
                                        <img class="img-fluid image" src="images/2.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>


                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/3.jfif">
                                        <img class="img-fluid image" src="images/3.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/4.jfif">
                                        <img class="img-fluid image" src="images/4.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>


                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/5.jfif">
                                        <img class="img-fluid image" src="images/5.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>


                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/6.jfif">
                                        <img class="img-fluid image" src="images/6.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/7.jfif">
                                        <img class="img-fluid image" src="images/7.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/8.jfif">
                                        <img class="img-fluid image" src="images/8.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>

                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href="images/9.jfif">
                                        <img class="img-fluid image" src="images/9.jfif">
                                        <span class="description">
                                            <!-- <span class="description-heading">Lorem Ipsum</span>
                                                    <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
