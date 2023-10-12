<?php

/**
 * Testimonials section of Homepage
 * 
 * @package AmilaFT
 */
?>
<h2 class="section__title">Testimonials</h2>
<span class="section__subtitle">My Client saying</span>

<div class="testimonial__container container swiper swiper-container">
    <div class="swiper-wrapper">
        <!--==================== TESTIMONIAL 1 ====================-->
        <div class="testimonial__content swiper-slide">
            <div class="testimonial__data">
                <div class="testimonial__header">
                    <?php
                    $testimonial1_path = get_template_directory_uri() . '/assets/img/testimonial1.jpg';
                    ?>
                    <img src="<?php echo $testimonial1_path; ?>" alt="" class="testimonial__img">
                </div>
                <div>
                    <h3 class="testimonial__name">Sara Smith</h3>
                    <span class="testimonial__client">Client</span>
                </div>
                <div>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                </div>
            </div>
            <p class="testimonial__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum facilis aliquid atque adipisci eaque.</p>
        </div>
        <!--==================== TESTIMONIAL 2 ====================-->
        <div class="testimonial__content swiper-slide">
            <div class="testimonial__data">
                <div class="testimonial__header">
                    <?php
                    $testimonial2_path = get_template_directory_uri() . '/assets/img/testimonial2.jpg';
                    ?>
                    <img src="<?php echo $testimonial2_path; ?>" alt="" class="testimonial__img">
                </div>
                <div>
                    <h3 class="testimonial__name">Matt Smith</h3>
                    <span class="testimonial__client">Client</span>
                </div>
                <div>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                </div>
            </div>
            <p class="testimonial__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum facilis aliquid atque adipisci eaque.</p>
        </div>
        <!--==================== TESTIMONIAL 3 ====================-->
        <div class="testimonial__content swiper-slide">
            <div class="testimonial__data">
                <div class="testimonial__header">
                    <?php
                    $testimonial3_path = get_template_directory_uri() . '/assets/img/testimonial3.jpg';
                    ?>
                    <img src="<?php echo $testimonial3_path; ?>" alt="" class="testimonial__img">
                </div>
                <div>
                    <h3 class="testimonial__name">Raul Harris</h3>
                    <span class="testimonial__client">Client</span>
                </div>
                <div>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                    <i class="uil uil-star testimonial__icon-star"></i>
                </div>
            </div>
            <p class="testimonial__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum facilis aliquid atque adipisci eaque.</p>
        </div>
    </div>
    <div class="swiper-pagination swiper-pagination-testimonial"></div>
</div>