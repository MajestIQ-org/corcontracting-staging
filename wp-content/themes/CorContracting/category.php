<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/banner.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/blog.css">
<section class="global-banner">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <p class="fs-14 subheading text-gold mb-16">Category</p>
                <h1 class="text-white mb-16">
                    <?php single_cat_title(); ?>
                </h1>
                <p class="mb-0">
                    Expert advice for your next home improvement project.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="archived">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex main">

                <!-- BLOG POSTS -->
                <div class="blogs">

                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post(); ?>

                            <article class="blog-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)):
                                            ?>
                                            <span class="fs-12">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </span>
                                        <?php endif; ?>

                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="content">
                                    <h3 class="fs-18 text-foreground mb-12">
                                        <?php the_title(); ?>
                                    </h3>

                                    <div class="mb-16 excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="d-flex fs-14 text-gold read-more">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </article>

                        <?php endwhile; ?>

                        <?php the_posts_pagination(); ?>

                    <?php else: ?>
                        <p>No posts found in this category.</p>
                    <?php endif; ?>

                </div>

                <!-- SIDEBAR -->
                <div class="side-bar">
                    <div class="category-box mb-32">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="<?php echo get_home_url(); ?>/blog/">
                                    All <span>(<?php echo wp_count_posts()->publish; ?>)</span>
                                </a>
                            </li>
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $cat):
                                ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                                        <?php echo esc_html($cat->name); ?>
                                        <span>
                                            (<?php echo $cat->count; ?>)
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="free-estimate">
                        <h3 class="mb-12 fs-20 text-white">Get Your Free Estimate</h3>
                        <p class="fs-14 mb-24">Ready to start your remodeling project? Contact us for a free,
                            no-obligation quote.</p>
                        <div class="cta d-flex gap-3 justify-content-center flex-column">
                            <a href="#contact" class="bg-gold h-44 fs-14 ">Get Free Quote</a>
                            <a href="tel:7323433709" class="bg-trans h-44 fs-14">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-phone h-4 w-4">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg> 7323433709
                            </a>
                        </div>
                    </div>
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