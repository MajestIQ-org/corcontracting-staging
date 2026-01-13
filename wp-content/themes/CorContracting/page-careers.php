<?php /*Template Name: Career */
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
                    <p class="mb-0 "><?php echo get_field('content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="company-career">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="content">
                    <div class="header_content mb-32">
                        <?php if ($career_heading = get_field('career_heading')): ?>
                            <h2 class="h3 text-foreground mb-16"><?php echo esc_html($career_heading); ?></h2>
                        <?php endif; ?>
                        <div class="text-muted-foreground"><?php echo get_field('career_content'); ?></div>
                    </div>
                    <div class="benefits-container">
                        <?php if (have_rows('career_benefits')): ?>
                            <div class="d-grid">
                                <?php while (have_rows('career_benefits')):
                                    the_row();
                                    $card_heading = get_sub_field('career_benefits_text');
                                    ?>
                                    <div class="benefits-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big h-5 w-5 text-gold flex-shrink-0">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                        <p class="fs-16 text-foreground mb-0"><?php echo $card_heading; ?></p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="company-details">
                    <?php if (have_rows('company_details')): ?>
                        <div class="d-grid">
                            <?php
                            while (have_rows('company_details')):
                                the_row();
                                $company_svg_text = get_sub_field('company_svg_text');
                                $company_heading = get_sub_field('company_heading');
                                $company_content = get_sub_field('company_content');
                                ?>
                                <div class="project-card text-center">
                                    <?php echo get_sub_field('company_svg_text'); ?>
                                    <?php if ($company_heading): ?>
                                        <h3 class="fs-16 font-semibold text-foreground"><?php echo esc_html($company_heading); ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if ($company_content): ?>
                                        <p class="text-muted-foreground mb-0 fs-14"><?php echo esc_html($company_content); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php
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
                <div class="header_content  mb-32">
                    <h2 class="text-foreground mb-32 h3">Interested in Joining Us?</h2>
                    <p class="mb-0 text-foreground fs-16">We're always interested in meeting skilled carpenters, tile
                        installers,
                        and general laborers who share our commitment to quality. If you're interested, send us an email
                        with your experience and we'll be in touch.</p>
                </div>
                <a href="mailto:careers@cor-contracting.com" class="bg-cta h-44 fs-14 ">
                    Email Us: careers@cor-contracting.com
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>