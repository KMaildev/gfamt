<!-- Footer Area Start -->
<footer class="main-footer footer-four bgs-cover bg-lighter" style="background-image: url(assets/images/footer/footer-bg.png);">

    <!-- Sign Up -->
    <div class="footer-sign-up">
        <div class="container">
            <div class="footer-signup-inner bg-light-black pt-40 pb-25 px-60">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title text-white mb-25 rmb-35">
                            <h2>Sign up for latest IT resources news from Restly</h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <form class="sign-in-form mb-15" action="#">
                            <input type="email" placeholder="Email Address" required>
                            <button class="theme-btn" type="submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <div class="footer-logo mb-35">
                        <a href="index.html"><img src="<?php echo base_url(); ?>public/assets/images/logos/logo-two.png" alt="Logo"></a>
                    </div>
                    <div class="text">
                        Sed ut perspiciatis unde omnis natus evoluptat emaccu santium doloremque laudantium totam rem aperiam eaquepsa
                    </div>
                    <div class="social-style-two mt-30">
                        <a href="http://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget link-widget ml-20 rml-0">
                    <h4 class="footer-title">Page Links</h4>
                    <ul class="list-style-three">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Letest Events</a></li>
                        <li><a href="#">How It Work</a></li>
                        <li><a href="#">News & Articles</a></li>
                        <li><a href="#">contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget mr-30 rmr-0">
                    <h4 class="footer-title">Contacts</h4>
                    <ul class="list-style-two">
                        <li><i class="fas fa-map-marker-alt"></i> 1791 Yorkshire Circle Kitty Hawk, NC 27949</li>
                        <li><i class="fas fa-clock"></i> Mon-Sat 9:00 - 7:00</li>
                        <li><i class="fas fa-phone-alt"></i> <a href="callto:+012-345-6789">+012-345-6789</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget news-widget">
                    <h4 class="footer-title">Recent News</h4>
                    <div class="widget-news-wrap">
                        <div class="widget-news-item">
                            <img src="<?php echo base_url(); ?>public/assets/images/news/footer-widget-1.jpg" alt="News">
                            <div class="widget-news-content">
                                <h6><a href="blog-details.html">Making A Strong Case For Accessibility</a></h6>
                                <span class="date"><i class="far fa-calendar-alt"></i> <a href="blog-details.html">15 Dec 2021</a></span>
                            </div>
                        </div>
                        <div class="widget-news-item">
                            <img src="<?php echo base_url(); ?>public/assets/images/news/footer-widget-2.jpg" alt="News">
                            <div class="widget-news-content">
                                <h6><a href="blog-details.html">An Introduction Figma Interactive Compo</a></h6>
                                <span class="date"><i class="far fa-calendar-alt"></i> <a href="blog-details.html">15 Dec 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area bg-blue text-white mt-30">
        <div class="container">
            <div class="copyright-inner pt-15">
                <div class="social-style-one mb-10">
                    <a href="http://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                </div>
                <p>copyright 2022 Restly All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

</div>
<!--End pagewrapper-->

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>


<!--====== Jquery ======-->
<script src="<?php echo base_url(); ?>public/assets/js/jquery-3.6.0.min.js"></script>
<!--====== Bootstrap ======-->
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.min.js"></script>
<!--====== Appear Js ======-->
<script src="<?php echo base_url(); ?>public/assets/js/appear.min.js"></script>
<!--====== Slick ======-->
<script src="<?php echo base_url(); ?>public/assets/js/slick.min.js"></script>
<!--====== Magnific Popup ======-->
<script src="<?php echo base_url(); ?>public/assets/js/jquery.magnific-popup.min.js"></script>
<!--====== Isotope ======-->
<script src="<?php echo base_url(); ?>public/assets/js/isotope.pkgd.min.js"></script>
<!--  WOW Animation -->
<script src="<?php echo base_url(); ?>public/assets/js/wow.js"></script>
<!-- Custom script -->
<script src="<?php echo base_url(); ?>public/assets/js/script.js"></script>

<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>

</body>

</html>