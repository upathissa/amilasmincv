<?php

/**
 * Theme Index file
 * 
 * @package Amila - First Theme
 */

get_header();
?>

<!--========== HEADER ==========-->
<header class="header-1" id="header">
    <?php
    get_template_part('template-parts/header/nav');
    ?>
</header>

<main class="l-main acv-container">
    <!-- All elements within this div, is generated in PDF -->
    <div class="resume" id="area-cv">
        <?php
        get_template_part('template-parts/home/left/resume-left');

        get_template_part('template-parts/home/right/resume-right');
        ?>


    </div>
</main>

<?php get_footer(); ?>