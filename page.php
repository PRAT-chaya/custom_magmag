<?php get_header(); ?>
        
            <main id="main" class="container">
                
                <?php $post = get_post(get_the_id()); ?>

                <header class="page-header">
                    <h1 class="page-header-title">
                        <a href ="<?php echo get_permalink($post) ?>">
                            <?php echo get_the_title($post); ?>
                        </a>
                    </h1>
                </header>

                <?php the_content(); ?>

            </main>

            <?php get_footer(); ?>
        </div>
    </body>
</html>