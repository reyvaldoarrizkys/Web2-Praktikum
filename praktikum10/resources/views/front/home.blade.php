@extends('front.layout.apphome')
@section('content')
    Ini Adalah Dashboard
    <main id="main" data-aos="fade" data-aos-delay="1500">
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
            data-aos-delay="1500">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>I'm <span>Jenny Wilson</span> a Professional Photographer from New York City</h2>
                        <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui
                            libero. Qui voluptas amet.</p>
                        <a href="contact.html" class="btn-get-started">Available for hire</a>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-1.jpg') }} class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-1.jpg') }} title="Gallery 1"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-2.jpg') }} class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-2.jpg') }} title="Gallery 2"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-3.jpg') }} class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-3.jpg') }} title="Gallery 3"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-4.jpg') }} class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-4.jpg') }} title="Gallery 4"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-5.jpg') }} class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-5.jpg') }} title="Gallery 5"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-6.jpg') }} class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-6.jpg') }} title="Gallery 6"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-7.jpg') }} class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-7.jpg') }} title="Gallery 7"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-8.jpg') }} class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-8.jpg') }} title="Gallery 8"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-9.jpg') }} class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-9.jpg') }} title="Gallery 9"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-10.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-10.jp') }}" title="Gallery 10"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-11.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-11.jp') }}" title="Gallery 11"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-12.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-12.jp') }}" title="Gallery 12"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-13.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-13.jp') }}" title="Gallery 13"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-14.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-14.jp') }}" title="Gallery 14"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-15.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-15.jp') }}" title="Gallery 15"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src={{ asset('front/assets/img/gallery/gallery-16.jp') }}" class="img-fluid"
                                alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href={{ asset('front/assets/img/gallery/gallery-16.jp') }}" title="Gallery 16"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>
        </section><!-- End Gallery Section -->

    </main><!-- End #main -->
@endsection
