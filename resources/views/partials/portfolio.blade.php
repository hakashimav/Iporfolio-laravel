<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
            @if ($posts->count() > 0)

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                        @foreach($posts as $post)

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('posts.show', ['id' => $post->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>

            @else
                <p>Aucun post dans la base </p>
            @endif
        </div>
</section><!-- End Portfolio Section -->
