<?php

/**
 * Portfolio section of Homepage
 * 
 * @package AmilaFT
 */
?>
<h2 class="section__title">Portfolio</h2>
<span class="section__subtitle">most reason works</span>

<div class="portfolio__container container swiper">
    <div class="swiper-wrapper">
        <!--==================== PORTFOLIO 3 ====================-->
        <div class="portfolio__content grid swiper-slide">
            <?php
            $portfolio3_path = get_template_directory_uri() . '/assets/img/portfolio3.jpg';
            ?>
            <img src="<?php echo $portfolio3_path ?>" alt="" class="portfolio__img">
            <div class="portfolio__data">
                <h3 class="portfolio__title">Online Store</h3>
                <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente aspernatur reprehenderit iure cum vel nemo voluptate repellendus </p>
                <a href="" class="button button--flex button--small portfolio__button">
                    Demo
                    <i class="uil uil-arrow-right button__icon"></i>
                </a>
            </div>
        </div>
        <!--==================== PORTFOLIO 1 ====================-->
        <div class="portfolio__content grid swiper-slide">
            <?php
            $portfolio1_path = get_template_directory_uri() . '/assets/img/portfolio1.jpg';
            ?>
            <img src="<?php echo $portfolio1_path ?>" alt="" class="portfolio__img">
            <div class="portfolio__data">
                <h3 class="portfolio__title">Modern Websites</h3>
                <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente aspernatur reprehenderit iure cum vel nemo voluptate repellendus </p>
                <a href="" class="button button--flex button--small portfolio__button">
                    Demo
                    <i class="uil uil-arrow-right button__icon"></i>
                </a>
            </div>
        </div>
        <!--==================== PORTFOLIO 2 ====================-->
        <div class="portfolio__content grid swiper-slide">
            <?php
            $portfolio2_path = get_template_directory_uri() . '/assets/img/portfolio2.jpg';
            ?>
            <img src="<?php echo $portfolio2_path ?>" alt="" class="portfolio__img">
            <div class="portfolio__data">
                <h3 class="portfolio__title">Brand Design</h3>
                <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente aspernatur reprehenderit iure cum vel nemo voluptate repellendus </p>
                <a href="" class="button button--flex button--small portfolio__button">
                    Demo
                    <i class="uil uil-arrow-right button__icon"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next">
        <i class="uil uil-angle-right swiper-portfolio-icon"></i>
    </div>
    <div class="swiper-button-prev">
        <i class="uil uil-angle-left swiper-portfolio-icon"></i>

    </div>

</div>