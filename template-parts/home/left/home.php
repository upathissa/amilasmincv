<?php

/**
 * Home section of the CV
 * 
 * @package AmilasMinCV
 */
$profile_img_path = get_template_directory_uri() . '/assets/img/perfil.jpg';
$cv_downlod_path = get_template_directory_uri() . '/assets/img/perfil.jpg';
?>
<div class="home__container section acv-grid">
    <div class="home__data acv-grid">
        <img src="<?php echo $profile_img_path; ?>" alt="" class="home__img">
        <h1 class="home__title">
            Smith <b> Matthew </b>
        </h1>
        <h3 class="home__profession">Web Developer</h3>

        <!-- Button to generate and download the pdf. Available for desktop. -->
        <div>
            <a download="" href="<?php echo $cv_downlod_path; ?>" class="home__button-movil">Download</a>
        </div>
    </div>
    <div class="home__address acv-grid">
        <span class="home__information">
            <i class="bx bx-map home__icon"></i> Kandy - Sri Lanka
        </span>
        <span class="home__information">
            <i class="bx bx-envelope home__icon"></i> contact@amila.info
        </span>
        <span class="home__information">
            <i class="bx bx-phone home__icon"></i> 9471 257 6076
        </span>
    </div>
</div>