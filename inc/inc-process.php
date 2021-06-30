<section id="cd-timeline-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('main_title_process_gen', 'options'); ?></h2>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="cd-timeline">

                    <?php if( have_rows('process_list_gen', 'options') ): ?>
                        <?php $i=1; ?>
                        <?php while( have_rows('process_list_gen', 'options') ): the_row(); ?>

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-num"><i class="fas fa-circle"></i></div>
                                <!-- cd-timeline-num -->
                                <div class="cd-timeline-content">
                                    <span class="num">0<?php echo $i; ?></span>
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <?php the_sub_field('content_block'); ?>

                                    <?php if( get_sub_field('button_link') ): ?>
                                    <div class="learn-more">
                                        <a href="<?php the_sub_field('button_link'); ?>">Learn More</a>
                                    </div>
                                    <!-- /.learn-more -->
                                    <?php endif; ?>

                                </div>
                                <!-- cd-timeline-content -->
                                <div class="cd-timeline-photo">
                                    <img src="<?php the_sub_field('featured_image'); ?>" alt="">
                                </div>
                                <!-- /.cd-timeline-photo -->  
                            </div>
                            <!-- cd-timeline-block -->

                         <?php $i++; endwhile; ?>
                    <?php endif; ?>

                </div>
                <!-- /#cd-timeline -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- cd-timeline-wrap -->