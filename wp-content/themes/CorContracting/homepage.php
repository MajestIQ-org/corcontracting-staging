<?php /*Template Name: Homepage */
get_header(); ?>
<section class="banner">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="banner_content d-flex">
                <div class="content">
                    <p class="subheading mb-20"><?php echo get_field('banner_sub-heading'); ?></p>
                    <h1 class="mb-12 text-white"><?php echo get_field('banner_heading'); ?></h1>
                    <p class="h3 mb-32 text-cta"><?php echo get_field('banner_quote_text'); ?></p>
                    <p class="fs-18 mb-40 text-white"><?php echo get_field('banner_content'); ?></p>
                    <div class="cta mb-48">
                        <a href="#contact" class="bg-cta h-56 fs-18">Get Your Free Quote</a>
                        <a href="#project" class="bg-trans h-56 fs-18">View Recent Projects</a>
                    </div>
                    <?php if (have_rows('banner_highlights')): ?>
                        <div class="banner-highlights d-flex">
                            <?php while (have_rows('banner_highlights')):
                                the_row();
                                $svg_text = get_sub_field('svg_text');
                                $highlight_text = get_sub_field('highlight_text');
                                $highlight_content = get_sub_field('highlight_content');
                                ?>
                                <div class="highlight-item d-flex flex-column">
                                    <?php if ($svg_text): ?>
                                        <div class="icon">
                                            <?php
                                            echo $svg_text;
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($highlight_text): ?>
                                        <p class="fs-14"><?php echo esc_html($highlight_text); ?></p>
                                    <?php endif; ?>

                                    <?php if ($highlight_content): ?>
                                        <p class="fs-12"><?php echo esc_html($highlight_content); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="image d-xl-block d-none">
                    <img src="<?php echo get_field('banner_image'); ?>" alt="<?php echo get_field('banner_heading'); ?>"
                        class="w-100">
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute c-bg"></div>
    <svg viewBox="0 0 1440 120" fill="none" class="position-absolute w-100 w-full" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
            fill="#fff"></path>
    </svg>
</section>
<section class="our-services">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content mb-48 text-center">
                <?php if ($sub = get_field('our_services_subheading')): ?>
                    <p class="fs-14 subheading text-cta"><?php echo esc_html($sub); ?></p>
                <?php endif; ?>

                <?php if ($heading = get_field('our_services_heading')): ?>
                    <h2 class="h1 text-foreground mb-16"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if ($content = get_field('our_services_content')): ?>
                    <p class="mb-0 text-muted-foreground"><?php echo esc_html($content); ?></p>
                <?php endif; ?>
            </div>
            <?php if (have_rows('service_card')): ?>
                <div class="services-grid d-grid mb-48">

                    <?php while (have_rows('service_card')):
                        the_row();
                        $card_heading = get_sub_field('service_card_heading');
                        $excerpt = get_sub_field('service_card_excerpt');
                        $link = get_sub_field('service_card_link'); // text field (URL)
                        $bg = get_sub_field('service_card_background'); // image field
                
                        ?>

                        <a class="service-card" href="<?php echo $link ? esc_url($link) : '#'; ?>">
                            <?php if ($bg): ?>
                                <img src="<?php echo esc_url($bg); ?>" alt="<?php echo esc_html($card_heading); ?>"
                                    class="card-image">
                            <?php endif; ?>
                            <div class="overlay">
                                <?php if ($card_heading): ?>
                                    <h3 class="text-white"><?php echo esc_html($card_heading); ?></h3>
                                <?php endif; ?>
                                <?php if ($excerpt): ?>
                                    <p class="fs-16"><?php echo esc_html($excerpt); ?></p>
                                <?php endif; ?>

                                <p class="learn-more text-cta mb-0 fs-16">
                                    Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </p>
                            </div>
                        </a>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <a href="<?php echo $redirect_url; ?>/services/" class="bg-cta h-56 fs-14">View All Services</a>
        </div>
    </div>
</section>
<section class="why-choose-us">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content mb-48 text-center">
                <?php if ($why_sub = get_field('why_choose_us_subheading')): ?>
                    <p class="fs-14 subheading text-gold"><?php echo esc_html($why_sub); ?></p>
                <?php endif; ?>

                <?php if ($why_heading = get_field('why_choose_us_heading')): ?>
                    <h2 class="h1 text-white mb-24"><?php echo esc_html($why_heading); ?></h2>
                <?php endif; ?>

                <?php if ($why_content = get_field('why_choose_us_content')): ?>
                    <p class="mb-0 text-white"><?php echo esc_html($why_content); ?></p>
                <?php endif; ?>
            </div>
            <?php if (have_rows('why_choose_us_card')): ?>
                <div class="d-grid">

                    <?php while (have_rows('why_choose_us_card')):
                        the_row();
                        $why_svg = get_sub_field('why_choose_us_card_svg');
                        $why_heading = get_sub_field('why_choose_us_card_heading');
                        $why_excerpt = get_sub_field('why_choose_us_card_excerpt');
                        ?>
                        <div class="why-card">
                            <?php if ($why_svg): ?>
                                <div class="icon mb-20">
                                    <?php echo get_sub_field('why_choose_us_card_svg'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($why_heading): ?>
                                <h3 class="text-white fs-20 mb-12"><?php echo esc_html($why_heading); ?></h3>
                            <?php endif; ?>
                            <?php if ($why_excerpt): ?>
                                <p class="fs-16"><?php echo esc_html($why_excerpt); ?></p>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="gallery">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content mb-48 text-center">
                <?php if ($gallery_sub = get_field('gallery_subheading')): ?>
                    <p class="fs-14 subheading text-gold"><?php echo esc_html($sub); ?></p>
                <?php endif; ?>

                <?php if ($gallery_heading = get_field('gallery_heading')): ?>
                    <h2 class="h1 text-foreground mb-24"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if ($gallery_content = get_field('gallery_content')): ?>
                    <p class="mb-0 text-muted-foreground"><?php echo esc_html($content); ?></p>
                <?php endif; ?>
            </div>
            <?php if (have_rows('gallery_card')): ?>
                <div class="d-grid mb-48">
                    <?php while (have_rows('gallery_card')):
                        the_row();
                        $gallery_heading = get_sub_field('gallery_card_heading');
                        $gallery_excerpt = get_sub_field('gallery_card_excerpt');
                        $gallery_bg = get_sub_field('gallery_image'); // image field
                        ?>
                        <a class="gallery-card" href="<?php echo $redirect_url; ?>/gallery/">
                            <?php if ($gallery_bg): ?>
                                <img src="<?php echo esc_url($gallery_bg); ?>" alt="<?php echo esc_html($gallery_heading); ?>"
                                    class="card-image">
                            <?php endif; ?>
                            <div class="overlay">
                                <?php if ($gallery_heading): ?>
                                    <h3 class="text-white fs-18 m-0"><?php echo esc_html($gallery_heading); ?></h3>
                                <?php endif; ?>
                                <?php if ($gallery_excerpt): ?>
                                    <p class="fs-14 mb-0"><?php echo esc_html($gallery_excerpt); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <a href="<?php echo $redirect_url; ?>/gallery/" class="bg-blue-line h-56 fs-14">View Full Gallery <svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-right h-4 w-4">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg></a>
        </div>
    </div>
</section>
<section class="faq bg-graylight">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="header_content">
                    <?php if ($faq_sub = get_field('faq_subheading')): ?>
                        <p class="fs-14 subheading text-gold mb-16"><?php echo esc_html($faq_sub); ?></p>
                    <?php endif; ?>

                    <?php if ($faq_heading = get_field('faq_heading')): ?>
                        <h2 class="h1 text-foreground mb-24"><?php echo esc_html($faq_heading); ?></h2>
                    <?php endif; ?>

                    <?php if ($faq_content = get_field('faq_content')): ?>
                        <div class="mb-0 text-muted-foreground"><?php echo get_field('faq_content'); ?></div>
                    <?php endif; ?>
                </div>
                <div class="faq_container">
                    <?php
                    if (have_rows('faq_list')):
                        $accordion_id = 'faqAccordion_' . wp_unique_id();
                        ?>
                        <div class="accordion" id="<?php echo esc_attr($accordion_id); ?>">
                            <?php
                            $i = 0;
                            while (have_rows('faq_list')):
                                the_row();
                                $i++;

                                $question = get_sub_field('question');
                                $answer = get_sub_field('answer');

                                if (empty($question) && empty($answer))
                                    continue;

                                $heading_id = $accordion_id . '_heading_' . $i;
                                $collapse_id = $accordion_id . '_collapse_' . $i;

                                $is_first = ($i === 1);
                                $btn_classes = 'accordion-button' . ($is_first ? '' : ' collapsed');
                                $collapse_cls = 'accordion-collapse collapse' . ($is_first ? ' show' : '');
                                ?>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                        <button class="<?php echo esc_attr($btn_classes); ?> fs-16" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                                            aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                                            aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                            <?php echo esc_html($question); ?>
                                        </button>
                                    </h3>

                                    <div id="<?php echo esc_attr($collapse_id); ?>"
                                        class="<?php echo esc_attr($collapse_cls); ?>"
                                        aria-labelledby="<?php echo esc_attr($heading_id); ?>"
                                        data-bs-parent="#<?php echo esc_attr($accordion_id); ?>">
                                        <div class="accordion-body">
                                            <?php
                                            echo wp_kses_post(wpautop($answer));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta_group">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="header_content">
                    <h2 class="text-white mb-12">Ready to Transform Your Home?</h2>
                    <p class="mb-0 text-white">Get your free quote in 30 minutes. Call now or fill out our
                        form.</p>
                </div>
                <div class="cta d-flex">
                    <a href="#contact" class="bg-primary h-56 fs-18">Get Free Quote</a>
                    <a href="tel:7323433709" class="bg-trans h-56 fs-18">
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
<section id="contact" class="contact bg-graylight">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="header_content">
                    <p class="fs-14 subheading text-gold mb-16">Get In Touch</p>
                    <h2 class="h1 text-foreground mb-24">Ready to Start Your Project?</h2>
                    <p class="mb-32 text-muted-foreground">Get your free quote in 30 minutes. Fill out the form or
                        contact
                        us directly— we're here to bring your vision to life.</p>
                    <div class="contact-detail mb-32">
                        <a class="contact-item" href="tel;l:7323433709">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-phone h-6 w-6 text-cta">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <p><span class="fs-16">(732) 343-3709</span><span class="fs-14">Call or text anytime</span>
                            </p>
                        </a>
                        <a class="contact-item" href="mailto:Corey@Cor-Contracting.com">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-mail h-6 w-6 text-cta">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <p><span class="fs-16">Corey@Cor-Contracting.com</span><span class="fs-14">We reply within 1
                                    hour</span></p>
                        </a>
                        <div class="contact-item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin h-6 w-6 text-cta">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <p><span class="fs-16">214 S 9th Ave</span><span class="fs-14">Highland Park, NJ
                                    08904</span>
                            </p>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock h-6 w-6 text-cta">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <p><span class="fs-16">Business Hours</span><span class="fs-14">Mon-Fri: 8 AM – 6:30
                                    PM<br>Sat:
                                    8 AM – 2 PM</span></p>
                        </div>
                    </div>
                    <div class="g_box">
                        <p class="fs-14 mb-0">NJ License #13VH12260000<br>Licensed • Insured • Schluter Certified</p>
                    </div>
                </div>
                <div class="form-container">
                    <h3>Request Your Free Quote</h3>
                    <p class="mb-24 text-muted-foreground fs-16">Tell us about your project and we'll get back to you
                        within 30 minutes.</p>
                    <?php
                    echo do_shortcode('[contact-form-7 id="b62d7ab" title="Main Contact Form"]');
                    ?>
                    <p class="fs-12 text-muted-foreground text-center">We respect your privacy. Your information is
                        never shared.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>