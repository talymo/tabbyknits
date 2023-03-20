<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-image">
    <?php 
        if ( has_post_thumbnail() ) : 
    ?>
        <?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?>
    <?php 
        endif; 
    ?>
    </div>
    <div class="blog-content">
        <header>    
        <?php 
            if ( is_singular() ) { 
                echo '<h1 class="entry-title" itemprop="headline">'; 
            } else { 
                echo '<h2 class="entry-title">'; 
            } 
        ?>
            <?php the_title(); ?>
        <?php 
            if ( is_singular() ) { 
                echo '</h1>'; 
            } else { 
                echo '</h2>'; 
            } 
        ?>
        <?php 
            if ( !is_search() ) { 
                get_template_part( 'entry', 'meta' ); 
            } 
        ?>
        </header>
        <?php 
            get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); 
        ?>
        <?php 
            if ( !is_singular() ) { 
                echo '<a class="button" href="' . get_the_permalink() . '">Read More</a>'; 
            }
        ?>
    </div>
</article>