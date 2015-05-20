        <?php include('partials/header-pages.php'); ?>


<!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-center">

            <div class="container clearfix">
                <h1>Christ Our Redeemer</h1>
            </div>

        </section><!-- #page-title end -->

        <!-- Portfolio Single Gallery
        ============================================= -->
        <section id="slider" class="slider-parallax swiper_wrapper clearfix" style="height: 600px;">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('images/slider/church.jpg');"></div>
                    <div class="swiper-slide" style="background-image: url('images/slider/office.jpg');"></div>
                    <div class="swiper-slide" style="background-image: url('images/slider/church.jpg');"></div>
                    
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        autoplay: 2500,
                        slidesPerView: 2,
                        onSlideChangeEnd: function(swiper){
                            $('#slider .swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                            });
                            $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                            });
                            if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });
                });
            </script>

        </section><!-- .portfolio-single-image end -->
<!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_one_third nobottommargin">

                        <!-- Portfolio Single - Meta
                        ============================================= -->
                        <div class="panel panel-default events-meta">
                            <div class="panel-body">
                                <ul class="portfolio-meta nobottommargin">
                                    <li><span><i class="icon-location"></i>Location</span>Niceville, FL</li>
                                    <li><span><i class="icon-th"></i>Size:</span> 18,000 sq/ft</li>
                                    <li><span><i class="icon-dollar"></i>Cost:</span> $5.1 million</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Portfolio Single - Meta End -->

                        

                    </div>

                    <!-- Portfolio Single Content
                    ============================================= -->
                    <div class="col_two_third portfolio-single-content col_last nobottommargin">

                        <!-- Portfolio Single - Description
                        ============================================= -->
                        <div class="fancy-title title-dotted-border">
                            <h2>Project Info:</h2>
                        </div>

                        <div class="col_half nobottommargin">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, labore deserunt ex cupiditate est blanditiis dignissimos nesciunt doloremque laboriosam ullam necessitatibus voluptatum tempora itaque quia porro voluptates quo excepturi veritatis!</p>
                        </div>

                        <div class="col_half col_last nobottommargin">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, sed.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, soluta explicabo sunt aliquam officiis autem.</p>
                        </div>
                        <!-- Portfolio Single - Description End -->

                    </div><!-- .portfolio-single-content end -->

                    <div class="clear"></div>

                    <div class="divider divider-center"><i class="icon-circle"></i></div>

                    <!-- Related Portfolio Items
                    ============================================= -->
                    <h3 class="center">Related Projects:</h3>

                </div>

                <div id="related-portfolio" class="owl-carousel owl-carousel-full portfolio-carousel portfolio-notitle portfolio-nomargin footer-stick">

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/portfolio/4/4.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                <span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/5.jpg" alt="Console Activity">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single-gallery.html">
                                    <img src="images/portfolio/4/6.jpg" alt="Shake It!">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                <span><a href="#">Graphics</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/4/9.jpg" alt="Bridge Side">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="images/portfolio/4/10.jpg" alt="Study Table">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                            </div>
                        </div>
                    </div>

                </div><!-- .portfolio-carousel end -->

                <script type="text/javascript">

                    jQuery(document).ready(function($) {

                        var relatedPortfolio = $("#related-portfolio");

                        relatedPortfolio.owlCarousel({
                            margin: 1,
                            nav: true,
                            navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                            dots:false,
                            autoplay: true,
                            autoplayHoverPause: true,
                            responsive:{
                                0:{ items:1 },
                                480:{ items:2 },
                                768:{ items:3 },
                                992: { items:4 }
                            }
                        });

                    });

                </script>

            </div>

        </section><!-- #content end -->





        <?php include('partials/footer.php'); ?>