<?php get_header(); ?>

    <main>

        <div class="container">

            <?php if(have_posts()): ?>

                <?php while (have_posts()): the_post(); ?>

                    <div><?php the_content() ?></div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </main>

<?php get_footer(); ?>