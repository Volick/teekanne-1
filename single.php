<?php
get_header();
?>
<div class="clear"></div>
<!-- Header condition2 starts here -->

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="post-wrap-right">
            <div class="post-inner" style="position: relative;">

                <?php if($prevPage): ?>
                    <a href="<?php echo $prevPage[0]; ?>" class="inner-navigation prev-page"></a>
                <?php endif; ?>

                <?php if($nextPage): ?>
                    <a href="<?php echo $nextPage[0]; ?>" class="inner-navigation next-page"></a>
                <?php endif; ?>
                <?php if(has_term('quality', 'category', $post)) : ?>
                    <?php $qualityTitle = get_post_meta( get_the_ID(), 'qualityTitle' ); ?>
                    <div class="post-title">
                        <?php if ($qualityTitle) : ?>
                            <?php the_title(); ?>
                        <?php else: ?>
                            Гарантии качества от производителя:
                        <?php endif; ?>
                    </div>

                    <div class="post-description">
                        <div class="container_24">
                            <div class="grid_10">
                                <?php the_content(); ?>
                            </div>
                            <div class="grid_14">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'quality_thumbnail' ); ?>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="post-title"><?php the_title(); ?></div>
                    <div class="post-description"><?php the_content(); ?></div>
                <?php endif; ?>
            </div>
        </div>
<?php endwhile; ?>
<?php endif; ?>
<!-- ***********************Featured Text Area Block************************* -->

<div class="clear"></div>


<!-- ***********************Contact Page Ends************************* -->
<?php
get_footer();
?> 