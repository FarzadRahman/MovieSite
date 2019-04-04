@extends('main')
@section('css')
    <link rel="stylesheet" href="{{url('public')}}/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public')}}/dist/assets/owl.theme.default.min.css">

@endsection

@section('content')
    <!-- Banne Slider -->
    <div class="banner-slider-area text-white" >
        <div id="banner-slider" class="owl-carousel custom1 owl-theme banner-slider">
            <div class="banner-item item" style='background-image: url("{{url('public/images/slider/1.png')}}")'>
                <div class="overlay-70">
                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <span class="rating">9.5</span>
                                    <h1 class="banner-title"><a href="movie-detail.html">Transformers: The Last Knight</a></h1>
                                    <p class="banner-date-meta">20 Jun, 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item item" style='background-image: url("{{url('public/images/slider/2.png')}}")'>
                <div class="overlay-70">
                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <span class="rating">9.5</span>
                                    <h1 class="banner-title"><a href="movie-detail.html">Transformers: The Last Knight</a></h1>
                                    <p class="banner-date-meta">20 Jun, 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-item item" style='background-image: url("{{url('public/images/slider/3.png')}}")'>
                <div class="overlay-70">
                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <span class="rating">9.5</span>
                                    <h1 class="banner-title"><a href="movie-detail.html">Transformers: The Last Knight</a></h1>
                                    <p class="banner-date-meta">20 Jun, 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banne Slider End -->






    <div class="main-wrap">


        <!-- Movie Section Prime -->
        <div class="section section-padding movie-section">
            <div class="row" style="background-color: white;">
                <div class="col-sm-8 col-xs-6">
                    <div class="" >
                        <h2 class="section-title"> <img src="{{url('public')}}/images/template/logo.png" alt="Site Logo" style="width:200px">  <b style="color: red">PRIME</b></h2>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <a class="all-link" href="movie.html">See All Movies</a>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row">
                    <div class="owl-carousel video-carousel" id="video-carousel">
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/1.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/2.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/3.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/4.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>


                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/4.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Movie Section End -->

        <!-- Movie Section Original -->
        <div class="section movie-section">
            <div class="row" style="background-color: white;">
                <div class="col-sm-8 col-xs-6">
                    <div class="">
                        <h2 class="section-title"> <img src="{{url('public')}}/images/template/logo.png" alt="Site Logo" style="width:200px">  <b style="color: red">Originals</b></h2>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <a class="all-link" href="movie.html">See All Movies</a>
                </div>
            </div>
            <div class="container-fluid">


                <div class="row">
                    <div class="owl-carousel video-carousel" id="video-carousel">
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/1.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/2.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/3.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/4.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/1.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/2.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/3.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="{{url('public')}}/images/movies/4.png" alt="Movie Thumb">
                                <span class="rating">9.2</span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                                <p class="video-release-on">22 Jun 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Movie Section End -->






    </div>



@endsection
@section('js')
    <script src="{{url('public')}}/assets/js/custom.js"></script>


    <script src="{{url('public')}}/dist/owl.carousel.min.js"></script>

    <script>
        $('.video-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:4
                },
                1000:{
                    items:8
                }
            }
        });

        // $('.owl-carousel1').owlCarousel({
        //
        //     merge:true,
        //     loop:true,
        //     margin:10,
        //     video:true,
        //     lazyLoad:true,
        //     center:true,
        //     responsive:{
        //         480:{
        //             items:2
        //         },
        //         600:{
        //             items:3
        //         }
        //     }
        // })


        $('.custom1').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items:1,
            margin:30,
            stagePadding:30,
            smartSpeed:450
        });



        // $(document).ready(function() {
        //
        //     $(".custom1").owlCarousel({
        //
        //         navigation : true, // Show next and prev buttons
        //         slideSpeed : 300,
        //         paginationSpeed : 400,
        //         singleItem:true
        //
        //         // "singleItem:true" is a shortcut for:
        //         // items : 1,
        //         // itemsDesktop : false,
        //         // itemsDesktopSmall : false,
        //         // itemsTablet: false,
        //         // itemsMobile : false
        //
        //     });
        //
        // });
    </script>
@endsection