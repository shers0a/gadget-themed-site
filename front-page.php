<?php
get_header(); 
?>

<main class="homepage">

    <section class="hero">
        <h1>GadgetPLUS - Tech Tips</h1>
        <p><?php bloginfo('description'); ?></p>
    </section>
   
    <section class="info-boxes">
        <a href="<?php echo home_url('/category/reviews'); ?>" class="box"> 
            <h3>Latest Reviews</h3>
            <span class="hover-text">Discover the best gadgets</span>
        </a>

        <a href="<?php echo home_url('/category/featured-products'); ?>" class="box">
            <h3>Featured Products</h3>
            <span class="hover-text">Top picks just for you</span>
        </a>

        <a href="<?php echo home_url('/category/top-gadgets'); ?>" class="box">
            <h3>Top Gadgets</h3>
            <span class="hover-text">Must-have tech items</span>
        </a>
    </section>


    <section class="latest-posts">
        <h2>Latest Articles:</h2>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No articles yet, stay tuned!</p>
        <?php endif; ?>

    </section>



</main>
<div id="scroll-progress"></div>
<?php
get_footer();
?>