
        <?php include('partials/header.php'); ?>

        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/redeemer.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Christ Our Redeemer</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/church3.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">St. Sylvester Catholic Church</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/building.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Global Learning Academy Elementary School</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/beach.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Sanders Beach</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('<?php bloginfo('template_url'); ?>/images/slider/fire.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Pensacola Beach Fire Station</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        loop: false,
                        autoplay: 3500,
                        effect: 'fade',
                        fade: {
                            crossFade: true
                        }
                        // onSwiperCreated: function(swiper){
                        //     $('[data-caption-animate]').each(function(){
                        //         var $toAnimateElement = $(this);
                        //         var toAnimateDelay = $(this).attr('data-caption-delay');
                        //         var toAnimateDelayTime = 500;
                        //         if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                        //         if( !$toAnimateElement.hasClass('animated') ) {
                        //             $toAnimateElement.addClass('not-animated');
                        //             var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        //             setTimeout(function() {
                        //                 $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                        //             }, toAnimateDelayTime);
                        //         }
                        //     });
                        //     SEMICOLON.slider.swiperSliderMenu();
                        // },
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

        </section>

     

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>

</body>
</html>