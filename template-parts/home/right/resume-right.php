<?php

/**
 * Right Side of the CV
 * 
 * @package AmilasMinCV
 */
?>
<div class="resume__right">
    <!--========== EXPERIENCE ==========-->
    <section class="experience section" id="experience">
        <?php
        include('experience.php');
        ?>
    </section>

    <!--========== CERTIFICATES ==========-->
    <section class="certificate section" id="certificates">
        <?php
        include('certificates.php');
        ?>

    </section>

    <!--========== REFERENCES ==========-->
    <section class="references section" id="references">
        <?php
        include('references.php');
        ?>

    </section>

    <!--========== LANGUAGES ==========-->
    <section class="languages section">
        <?php
        include('languages.php');
        ?>

    </section>

    <!--========== INTERESTS ==========-->
    <section class="interests section">
        <?php
        include('interests.php');
        ?>

    </section>
</div>