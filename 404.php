<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css"/>
<?php
get_header(); ?>
<div class="conteiner404">
    <img src="http://monroe/wp-content/uploads/2024/12/404-1.jpg">
</div>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title">
                        <?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?>
                    </h1>
                </header>
                <div class="page-content">
                    <p>
                        <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?>
                    </p>
                    <?php get_search_form(); ?>

                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer();