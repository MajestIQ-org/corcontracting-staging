<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/single.css">

<section class="banner">
    <?php
    $image = get_the_post_thumbnail_url(get_the_ID(), 'large');

    if ($image) {
        echo '<img src="' . esc_url($image) . '" alt="' . esc_attr(get_the_title()) . '">';
    }
    ?>
</section>
<section class="single">
    <div class="container-fluid">
        <div class="wrapper">
            <article class="single-content">
                <div class="breadcrumbs mb-32 d-flex">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="fs-14 text-foreground">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-right h-4 w-4">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="fs-14 text-foreground">Blog</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-right h-4 w-4">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                    <p class="mb-0 fs-14 text-foreground"><?php the_title(); ?></p>
                </div>
                <div class="category-container d-flex mb-16">
                    <?php
                    $categories = get_the_category();

                    if (!empty($categories)):
                        $category = $categories[0];
                        ?>
                        <span class="fs-12 ">
                            <?php echo esc_html($category->name); ?>
                        </span>
                    <?php endif; ?>
                    <time class="fs-14 text-muted-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-calendar h-4 w-4">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                        </svg> <?php echo get_the_date(); ?>
                    </time>
                </div>
                <h1 class="h2 text-foreground mb-40"><?php the_title(); ?></h1>
                <div class="content-box mb-48">
                    <?php the_content(); ?>
                </div>
                <div class="author d-flex">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-user h-8 w-8 text-white">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="author-text">
                        <p class="text-foreground fs-14 mb-0">Written by</p>
                        <p class="text-foreground fs-16 mb-0"><strong>Corey Muniz</strong></p>
                        <p class="text-foreground fs-14 mb-0">Owner of CorContracting</p>
                    </div>
                </div>
                <hr>
                <?php
                $current_post_id = get_the_ID();

                // Get current post categories
                $categories = wp_get_post_categories($current_post_id);

                if ($categories):
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => array($current_post_id),
                        'category__in' => $categories,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $related_query = new WP_Query($args);

                    if ($related_query->have_posts()): ?>
                        <h2 class="fs-24 mb-24 text-foreground">Related Articles</h2>

                        <div class="related-blog d-grid">

                            <?php while ($related_query->have_posts()):
                                $related_query->the_post(); ?>

                                <div class="blog-card">
                                    <?php
                                    $post_cats = get_the_category();
                                    if (!empty($post_cats)) {
                                        echo '<p class="fs-14 text-gold">' . esc_html($post_cats[0]->name) . '</p>';
                                    }
                                    ?>

                                    <h3 class="fs-16 text-foreground mb-12">
                                        <a href="<?php the_permalink(); ?>" class="fs-16 text-foreground ">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>

                                    <a href="<?php the_permalink(); ?>" class="fs-14 read-more text-gold">Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>

                            <?php endwhile; ?>
                        </div>

                    <?php endif;
                    wp_reset_postdata();
                endif;
                ?>
            </article>
        </div>
    </div>
</section>

<section class="cta_group">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-32 text-center">
                    <h2 class="text-white mb-16 h3">Have a Project in Mind?</h2>
                    <p class="mb-0 text-white">Let's discuss your remodeling ideas. Get a free estimate today.</p>
                </div>
                <div class="cta d-flex gap-3 justify-content-center">
                    <a href="#contact" class="bg-cta h-48 fs-14">Get Free Quote</a>
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