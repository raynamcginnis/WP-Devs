<?php get_header(); ?>
        
        <!-- -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php
                    get_template_part('parts/content','hero');
                    get_template_part('parts/content', 'services');
                    get_template_part('parts/content', 'latest-news')
                    ?> 
                </main>
            </div>
        </div>

   <!-- -->
   <?php get_footer(); ?>