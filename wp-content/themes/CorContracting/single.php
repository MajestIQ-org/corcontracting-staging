<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
            
            <header>
                <nav>
                    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / 
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">Blog</a> / 
                    <?php the_title(); ?>
                </nav>

                <div>
                    <span><?php the_category(', '); ?></span> | 
                    <time><?php echo get_the_date(); ?></time>
                </div>

                <h1><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div>
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <section>
                <?php the_content(); ?>
            </section>

            <footer>
                <div>
                    <h3>Written by</h3>
                    <p><strong><?php the_author(); ?></strong></p>
                    <p><?php the_author_meta('description'); ?></p>
                </div>
            </footer>

        </article>

        <nav>
            <div><?php previous_post_link('%link', 'Previous Post'); ?></div>
            <div><?php next_post_link('%link', 'Next Post'); ?></div>
        </nav>

        <?php 
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        ?>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>