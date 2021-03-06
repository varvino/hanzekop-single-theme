<head>
    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article class="post">
                    <h1 class="post__title"><?php the_title() ?></h2>
                        <div class="post__content"><?php the_content() ?></div>
                </article>
        <?php
            endwhile;
        endif;
        ?>
    </main>

    <?php get_template_part('template-parts/footer'); ?>