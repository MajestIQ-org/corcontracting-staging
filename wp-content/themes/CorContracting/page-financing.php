<?php /*Template Name: Financing */
get_header(); ?>
<section class="global-banner">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <?php if ($sub = get_field('subheading')): ?>
                    <p class="fs-14 subheading text-gold mb-16"><?php echo esc_html($sub); ?></p>
                <?php endif; ?>
                <?php if ($heading = get_field('heading')): ?>
                    <h1 class=" text-white mb-16"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>
                <?php if ($content = get_field('content')): ?>
                    <p class="m-0 text-gold fs-24 font-semibold"><?php echo get_field('content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="financial-benefits">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-48 text-center">
                    <?php if ($heading = get_field('financing_heading')): ?>
                        <h2 class="h3 text-foreground mb-16"><?php echo esc_html($heading); ?></h2>
                    <?php endif; ?>
                    <?php if ($content = get_field('financing_content')): ?>
                        <p class="mb-0 text-muted-foreground"><?php echo esc_html($content); ?></p>
                    <?php endif; ?>
                </div>
                <div class="benefits-container">
                    <h3 class="fs-20 mb-24 text-foreground text-center">Financing Benefits</h3>
                    <?php if (have_rows('financial_benefits')): ?>
                        <div class="d-grid">
                            <?php while (have_rows('financial_benefits')):
                                the_row();
                                $card_heading = get_sub_field('financial_benefits_text');
                                ?>
                                <div class="benefits-icon">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                    </div>
                                    <p class="fs-16 text-foreground mb-0"><?php echo $card_heading; ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular-projects">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-48 text-center">
                    <?php if ($heading = get_field('popular_projects_heading')): ?>
                        <h2 class="h3 text-foreground mb-16"><?php echo esc_html($heading); ?></h2>
                    <?php endif; ?>
                    <?php if ($content = get_field('popular_projects_content')): ?>
                        <p class="mb-0 fs-16 text-muted-foreground"><?php echo esc_html($content); ?></p>
                    <?php endif; ?>
                </div>
                <div class="benefits-container">
                    <?php if (have_rows('popular_projects_container')): ?>
                        <div class="d-grid">
                            <?php while (have_rows('popular_projects_container')):
                                the_row();
                                $project_svg_text = get_sub_field('project_svg_text');
                                $project_heading = get_sub_field('project_heading');
                                $project_content = get_sub_field('project');
                                $project_link = get_sub_field('project_link');
                                ?>
                                <a href=" <?php if ($project_link): ?>" class="project-card text-center">
                                        <div class="icon"><?php echo get_sub_field('project_svg_text'); ?></div>

                                        <?php if ($project_heading): ?>
                                            <h3 class="fs-18 text-foreground"><?php echo esc_html($project_heading); ?></h3>
                                        <?php endif; ?>

                                        <?php if ($project_content): ?>
                                            <p class="text-muted-foreground mb-12 fs-14"><?php echo esc_html($project_content); ?></p>
                                        <?php endif; ?>

                                        <p
                                            class="align-items-center d-flex fs-14 gap-1 justify-content-center learn-more mb-0 text-cta font-semibold">
                                            Learn More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </p>
                                    <?php endif; ?>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
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
                        <h2 class="h3 text-foreground mb-0">How it Works</h2>
                </div>
                <div class="benefits-container">
                    <?php if (have_rows('how_it_works_step')): ?>
                        <div class="d-grid">
                            <?php
                            $step_count = 1;
                            while (have_rows('how_it_works_step')):
                                the_row();
                                $project_svg_text = get_sub_field('step_svg_text');
                                $project_heading = get_sub_field('step_heading_text');
                                $project_content = get_sub_field('step_content');
                                ?>
                                <div class="project-card text-center">
                                    <div class="icon"><?php echo get_sub_field('step_svg_text'); ?></div>
                                    <p class="text-gold fs-14 mb-8"><b>Step <?php echo esc_html($step_count); ?></b></p>
                                    <?php if ($project_heading): ?>
                                        <h3 class="fs-20 text-foreground"><?php echo esc_html($project_heading); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($project_content): ?>
                                        <p class="text-muted-foreground mb-12 fs-16"><?php echo esc_html($project_content); ?></p>
                                    <?php endif; ?>
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
                <div class="header_content mb-32">
                    <h2 class="text-white mb-16 h3">Get Pre-Qualified Today </h2>
                    <p class="mb-0 text-white">Ready to explore your financing options? Contact us to learn more about
                        making your dream remodel a reality. We'll walk you through the application process.</p>
                </div>
                <div class="cta d-flex mb-24 gap-3 justify-content-center">
                    <a href="<?php echo $redirect_url; ?>/contact/" class="bg-blue h-44 fs-14">Apply for Financing</a>
                    <a href="tel:7323433709" class="bg-blue-line h-44 fs-14">
                        Call 7323433709
                    </a>
                </div>
                <p class="note mb-0 fs-14">Have questions? Check our <a href="<?php echo $redirect_url; ?>/faq/">FAQ
                        page</a> or <a href="<?php echo $redirect_url; ?>/reviews/">read what our clients say</a></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>