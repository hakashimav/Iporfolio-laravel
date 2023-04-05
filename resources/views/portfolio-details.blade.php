@extends('layout.layout')

@section('container')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="">
                                </div>
                            </div>
                        <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $name }}</h3>
                            <ul>
                                <li><strong>Category </strong>: {{ $category }}</li>
                                <li><strong>Client </strong>: {{ $client}}</li>
                                <li><strong>Project date </strong>: {{ $pro_date }}</li>
                                <li><strong>Project URL</strong>: <a href="#">{{ $pro_url}}</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection
