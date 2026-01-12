<?php /*Template Name: FAQ */
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
                    <p class="mb-0"><?php echo get_field('content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="faq bg-graylight">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="faq_container">
                <?php if (have_rows('faq_container')): ?>

                    <?php while (have_rows('faq_container')):
                        the_row(); ?>

                        <?php
                        $faq_title = get_sub_field('faq_title');
                        $accordion_id = 'faqAccordion_' . wp_unique_id();
                        ?>
                        <div class="faq_group">
                            <?php if ($faq_title): ?>
                                <h2 class="faq-title fs-20"><?php echo esc_html($faq_title); ?></h2>
                            <?php endif; ?>

                            <?php if (have_rows('faq_list')): ?>
                                <div class="accordion" id="<?php echo esc_attr($accordion_id); ?>">

                                    <?php
                                    $i = 0;
                                    while (have_rows('faq_list')):
                                        the_row();
                                        $i++;

                                        $question = get_sub_field('question');
                                        $answer = get_sub_field('answer');

                                        if (empty($question) && empty($answer)) {
                                            continue;
                                        }
                                        $heading_id = $accordion_id . '_heading_' . $i;
                                        $collapse_id = $accordion_id . '_collapse_' . $i;

                                        $is_first = ($i === 1);
                                        ?>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                                <button class="accordion-button<?php echo $is_first ? '' : ' collapsed'; ?> fs-16"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                                                    aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                                                    aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                                    <?php echo esc_html($question); ?>
                                                </button>
                                            </h3>

                                            <div id="<?php echo esc_attr($collapse_id); ?>"
                                                class="accordion-collapse collapse<?php echo $is_first ? ' show' : ''; ?>"
                                                aria-labelledby="<?php echo esc_attr($heading_id); ?>"
                                                data-bs-parent="#<?php echo esc_attr($accordion_id); ?>">
                                                <div class="accordion-body">
                                                    <?php
                                                    // WYSIWYG field output
                                                    echo wp_kses_post($answer);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<section class="cta_group">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-32">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class=" text-gold mb-24">
                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                    </svg>
                    <h2 class="text-white mb-16 h3"><b>Still Have Questions?</b></h2>
                    <p class="mb-0 text-white">We're here to help! Contact us directly and we'll be happy to answer any
                        questions about your project. Or check out what our clients have to say.</p>
                </div>
                <div class="cta d-flex mb-24 gap-3 justify-content-center">
                    <a href="#contact" class="bg-cta h-48 fs-14">Get Free Quote</a>
                    <a href="tel:7323433709" class="bg-primary-foreground h-48 fs-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone h-4 w-4">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg> 7323433709
                    </a>
                </div>
                <p class="note mb-0 fs-14"><a href="<?php echo $redirect_url; ?>/reviews/">Read our reviews</a> to see
                    what clients
                    say about working with us.</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>