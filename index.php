<?php get_header(); ?>

<div id="middle">
    <div id="content">
        <?php while(have_posts()): the_post()   // The Loop ?>

            <div class="post">

                <h1 class="title">
                    <a class="post-link" href="<?php the_permalink()?>"><?php the_title()?></a>
                </h1>

                <div class="content">
                    <?php the_content()?>
                </div>

                <div class="info">
                    
                    <span class="time">
                        <i class="fa fa-clock-o"></i><?php echo get_the_date(get_option( 'date_format' )); ?>&nbsp;<?php echo get_the_time(get_option( 'time_format' )); ?>
                    </span>

                    <?php if(has_category()): ?>
                    <span class="categories">
                        <i class="fa fa-folder-open"></i><?php the_category(", "); ?>
                    </span>
                    <?php endif;?>

                    <?php if(has_tag()): ?>
                    <span class="tags">
                        <i class="fa fa-tag"></i><?php the_tags("",", ");?>
                    </span>
                    <?php endif;?>

                </div>
                
            </div>

        <?php endwhile; ?>

    </div>

</div>

<?php get_footer(); ?>
