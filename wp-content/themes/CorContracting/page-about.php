<?php /*Template Name: About */
get_header(); ?>
<section class="banner">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="banner_content d-flex">
                <div class="content">
                    <p class="subheading mb-20 text-gold"><?php echo get_field('subheading'); ?></p>
                    <h1 class="mb-12 text-white"><?php echo get_field('heading'); ?></h1>
                    <div class="image d-xl-none d-block">
                        <img src="<?php echo get_field('banner_image'); ?>" alt="<?php echo get_field('heading'); ?>"
                            class="w-100 mb-20">
                    </div>
                    <p class="fs-20 mb-0 text-white"><?php echo get_field('content'); ?></p>
                </div>

                <div class="image d-xl-block d-none">
                    <img src="<?php echo get_field('banner_image'); ?>" alt="<?php echo get_field('heading'); ?>"
                        class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="history">
    <div class="container-fluid">
        <div class="wrapper">
            <h2 class="mb-32 text-foreground text-center"><?php echo get_field('history_header'); ?></h2>
            <div class="history_content d-flex">
                <div class="content"><?php echo get_field('history_content'); ?>
                </div>
                <div class="image">
                    <img src="<?php echo get_field('history_image'); ?>" alt="<?php echo get_field('heading'); ?>"
                        class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-works">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-48 text-center">
                    <h2 class="h3 text-foreground mb-16"><?php echo get_field('process_heading'); ?></h2>
                    <p class="fs-16 text-muted-foreground"><?php echo get_field('process_content'); ?></p>
                </div>
                <div class="step-container">
                    <?php if (have_rows('process_card')): ?>
                        <div class="d-flex">
                            <?php
                            $step_count = 1;
                            while (have_rows('process_card')):
                                the_row();
                                $project_svg_text = get_sub_field('step_svg_text');
                                $project_heading = get_sub_field('step_heading');
                                $project_content = get_sub_field('step_content');
                                ?>
                                <div class="project-card">
                                    <p class="text-gold fs-24 mb-16">
                                        <b>
                                            0<?php echo esc_html($step_count); ?>
                                        </b>
                                    </p>
                                    <div class="content">
                                        <div class="d-flex-layout">
                                            <div class="icon">
                                                <?php echo get_sub_field('step_svg_text'); ?>
                                            </div>
                                            <?php if ($project_heading): ?>
                                                <h3 class="fs-14 text-foreground">
                                                    <?php echo esc_html($project_heading); ?>
                                                </h3>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($project_content): ?>
                                            <p class="text-foreground mb-0 fs-12">
                                                <?php echo esc_html($project_content); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php
                                $step_count++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta_group">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-32 text-center">
                    <h2 class="text-white mb-16 h3">Ready to Experience the Difference?</h2>
                    <p class="mb-0 text-white">See why homeowners across Central NJ choose owner-operated quality over
                        big contractor chaos.</p>
                </div>
                <div class="cta d-flex gap-3 justify-content-center">
                    <a href="#contact" class="bg-white-light h-48 fs-14">Get Free Quote</a>
                    <a href="tel:7323433709" class="bg-trans h-48 fs-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone h-4 w-4">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg> 7323433709
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>