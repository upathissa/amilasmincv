<?php

/**
 * Projects section of Homepage
 * 
 * @package AmilaFT
 */
?>
<div class="project__bg">
    <div class="project__container container grid">
        <div class="project__data">
            <h2 class="project__title">You have a new project</h2>
            <p class="project__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, rerum reprehenderit! Animi asperiores nam perspiciatis inventore.</p>
            <a href="#contact" class="button button--flex button--white">
                Contact Me
                <i class="uil uil-message project__icon button__icon"></i>

            </a>
        </div>
        <?php
        $project_img_path = get_template_directory_uri() . '/assets/img/project.png';
        ?>
        <img src="<?php echo $project_img_path ?>" alt="" class="project__img">
    </div>
</div>