<!-- Footer Start -->
    <footer class="text-white">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 sm-bottom-40">
                        <div class="widget about-widget">
                            <div class="widget-inner">
                                <a class="footer-logo" href="index-2.html">
                                    <img src="{{url('public')}}/images/template/logo-footer.png" alt="Footer logo" style="width:200px">
                                </a>
                                <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>
                                <div class="footer-social">
                                    <h5 class="footer-social-title">Connect with</h5>
                                    <div class="socials">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget category-widget">
                            <h3 class="widget-title">Video Category</h3>
                            <div class="widget-inner">
                                <ul class="widget-cat">
                                    <li class="cat"><a href="#">Movies</a></li>
                                    <li class="cat"><a href="#">Crime Video</a></li>
                                    <li class="cat"><a href="#">Dramas</a></li>
                                    <li class="cat"><a href="#">TV Show</a></li>
                                    <li class="cat"><a href="#">Popular Video</a></li>
                                    <li class="cat"><a href="#">Episodes</a></li>
                                    <li class="cat"><a href="#">Comedy Video</a></li>
                                    <li class="cat"><a href="#">WWE</a></li>
                                    <li class="cat"><a href="#">Action &amp; Adventure</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget newsletter-widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="widget-inner">
                                <p>Sign up for our mailling list to get latest updates videos and upcomming Movie</p>
                                <form id="subscriptionForm" class="subscription" action="#" method="post">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <button type="submit" name="emailsubmit"><i class="fa fa-arrow-circle-right"></i></button>
                                    <p class="newsletter-success"></p>
                                    <p class="newsletter-error"></p>
                                </form>
                            </div>
                        </div>
                        <div class="widget app-widget">

                            <div class="widget-inner">
                                <a class="google-play-download" href="#"><img src="{{url('public')}}/images/icons/google-play.png" alt="Google Play Download"></a>
                                <a class="apple-store-download" href="#"><img src="{{url('public')}}/images/icons/app-store.png" alt="Apple Store Download"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-xs-12 xs-text-center">
                        <ul class="footer-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 xs-text-center">
                        <p class="copyright-text">&copy; 2017 <a href="index-2.html">Golpochobi</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
<!-- Script -->
<script src="{{url('public')}}/assets/js/jquery.min.js"></script>
<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
{{--<script src="{{url('public')}}/assets/js/owl.carousel.js"></script>--}}
<script src="{{url('public')}}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{url('public')}}/assets/js/jquery.ajaxchimp.min.js"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>--}}
{{--<script src="assets/js/map.js"></script>--}}

@yield('js')
</body>