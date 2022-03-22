<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package omnia
 */
get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', get_post_type());

        the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'omnia') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'omnia') . '</span> <span class="nav-title">%title</span>',
                )
        );

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->
<main>
    <section class="slider-section">
        <div class="row m-0">
            <div class="col-sm-6 p-0">
                <div class="slider-content">
                    <div> 
                        <h1>Portfolio Single Post</h1>
                        <h2>Single Project</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p-0">
                <img src="assets/images/slider-cover.jpg"  class="img-fluid" alt="Slider" />
            </div>
        </div>
    </section>  
    <div class="container-fluid">
        <div class="container">
            <article>
                <header class="entry-header">
                    <div class="entry-content-thumb">
                        <div class="blog-thumb">
                            <span class="text-vertical">Premium</span>

                            <img src="assets/images/blog-placeholder.jpg"  class="img-fluid" alt="Project" />
                        </div>
                    </div>
                </header>
                <div class="row entry-content">
                    <div class="col-sm-9 project-details">
                        <h2>Single Project With Image</h2>
                        <p>Duis in dictum purus. Suspendisse a volutpat neque, quis pretium dui. Maecenas orci diam, volutpat at magna eget, convallis sollicitudin libero. Sed mattis diam eu sodales feugiat. Nam sed dolor a ex viverra laoreet. Duis consectetur hendrerit dolor. Sed et maximus ipsum. In quis eros a nibh lacinia bibendum quis sit amet urna. In quis suscipit mi.  Nulla ultricies mauris at feugiat hendrerit. Phasellus euismod tincidunt ultricies. Cras hendrerit fermentum tempor. Pellentesque ligula ex, efficitur eget consectetur id, semper ut lacus.</p>
                        <div class="social-info">
                            <h3>Share:</h3>
                            <ul class="list-inline mb-0 social-link-list">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/" title="Facebook" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.twitter.com" title="Twitter" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.google.com" title="Google Plus" target="_blank">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.skype.com/en/" title="Skype" target="_blank">
                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 project-info-wrap">
                        <div class="project-info">
                            <h2>Custom Field</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="project-info">
                            <h2>Date</h2>
                            <time datetime="14-07-2016 20:00">14/07/2016</time>
                        </div>
                        <div class="project-info">
                            <h2>Category</h2>
                            <p>Art, Fashion, Decor</p>
                        </div>
                    </div>
                </div>
            </article>

            <section class="slider">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="assets/images/blog-placeholder.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="assets/images/blog-placeholder.jpg" alt="Second slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <img class="d-block" src="assets/images/left.png" alt="Second slide">
                        <span>Prev</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <img class="d-block" src="assets/images/right.png" alt="Second slide">
                        <span>Next</span>
                    </a>
                </div>
            </section>  

            <section class="related-posts">
                <div class="section-title">
                    <h2>Related Posts</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html" title="Related Posts" target="_self">  
                            <img src="assets/images/blog-placeholder.jpg"  class="img-fluid" alt="Related Posts" />
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="index.html" title="Related Posts" target="_self">  
                            <img src="assets/images/blog-placeholder.jpg"  class="img-fluid" alt="Related Posts" />
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="index.html" title="Related Posts" target="_self">  
                            <img src="assets/images/blog-placeholder.jpg"  class="img-fluid" alt="Related Posts" />
                        </a>
                    </div>
                </div>
            </section>
            </main>    
            <?php
            get_footer();
            