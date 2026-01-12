<?php /*Template Name: Privacy Policy */
get_header(); ?>
<section class="global-banner">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <?php if ($heading = get_field('heading')): ?>
                    <h1 class="mb-16"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if ($last_update = get_field('policy_last_update')): ?>
                    <p class=" mb-0"><?php echo esc_html($last_update); ?></p>
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