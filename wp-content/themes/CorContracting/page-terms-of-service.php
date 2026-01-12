<?php /*Template Name: Term Of Service */
get_header(); ?>
<section class="global-banner">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <?php if ($heading = get_field('heading')): ?>
                    <p class="fs-14 subheading text-gold mb-16"><?php echo esc_html($heading); ?></p>
                <?php endif; ?>

                <?php if ($last_update = get_field('policy_last_update')): ?>
                    <h1 class=" text-white mb-16"><?php echo esc_html($last_update); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="policy-content">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <?php
                $content = get_the_content();
                echo apply_filters('the_content', $content);
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>