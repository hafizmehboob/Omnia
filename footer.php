<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnia
 */
?>

<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 about-us">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                    <p>Morbi eu purus eget tellus fringilla malesuada eget nec nisi. Etiam nec dolor porttitor, cursus elit quis, tristique erat.   Sed rhoncus molestie elit sit amet viverra. </p>
                    <div class="contact-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div><p>90-120 Swanston St,Melbourne VIC 3000, Australia</p></div>
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div><p><a href="tel:+61395599559" title="+61 3 9559 9559">+61 3 9559 9559</a>or<a href="tel:+61396699669" title="+61396699669">+61 3 9669 9669</a></p></div>
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div><p><a href="mailto:support@gtcreators.com" title="mailto:support@gtcreators.com">support@gtcreators.com</a></p></div>
                    </div>
                </div>
                <div class="col-sm-4 recent-news-column">
                    <div class="section-title">
                        <h2>Recent News</h2>
                    </div>
                    <div class="recent-news">
                        <a href="#" title="Recent News" target="_self">  
                            <img src="assets/images/small-placeholder.jpg"  class="img-fluid" alt="Recent News" />
                            <div>
                                <h3>Ut molestie quam erat, non finibus erat</h3>
                                <time datetime="14-07-2016 12:00">14/07/2016</time>
                            </div>
                        </a>
                    </div>
                    <div class="recent-news">
                        <a href="#" title="Recent News" target="_self">  
                            <img src="assets/images/small-placeholder.jpg"  class="img-fluid" alt="Recent News" />
                            <div>
                                <h3> Mauris vel est porta, viverra orci non</h3>
                                <time datetime="14-07-2016 12:00">14/07/2016</time>
                            </div>
                        </a>
                    </div>
                    <div class="recent-news">
                        <a href="#" title="Recent News" target="_self">  
                            <img src="assets/images/small-placeholder.jpg"  class="img-fluid" alt="Recent News" />
                            <div>
                                <h3>Duis nibh nisl, egestas non sapien volutpat</h3>
                                <time datetime="14-07-2016 12:00">14/07/2016</time>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 our-gallery-section">
                    <div class="section-title">
                        <h2>Our Gallery</h2>
                    </div>
                    <div class="our-gallery popup-gallery">
                        <div class="gallery-column-one">
                            <a href="assets/images/ballon.jpg" title="Gallery">
                                <img src="assets/images/ballon.jpg"  class="img-fluid" alt="Project" />
                            </a>
                        </div>
                        <div class="gallery-column-two">
                            <div>
                                <a href="assets/images/ballon.jpg" title="Gallery">
                                    <img src="assets/images/ballon.jpg"  class="img-fluid" alt="Project" />
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="assets/images/ballon.jpg" title="Gallery">
                                    <img src="assets/images/ballon.jpg"  class="img-fluid" alt="Project" /> </a>
                                <a href="assets/images/ballon.jpg" title="Gallery">
                                    <img src="assets/images/ballon.jpg"  class="img-fluid" alt="Project" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copright">
        <p><a href="#" title=" &copy;2016 GTC. All rights reserved." target="_blank">&copy;2016 GTC. All rights reserved.</a></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
