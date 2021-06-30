<div id="middle-quote">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="middle-quote-photo">
                    <img src="<?php the_field('featured_image_quote_cta', 'options'); ?>" alt="">
                </div>
                <!-- /.middle-quote-photo -->
            </div>
            <!-- /.col-md-5 col-lg-7 col-xl-8 -->
           <div class="col-md-7 col-lg-6 col-xl-5">
                <div class="quote-form">
                    <div class="quote-form-in">
                        <span class="quote-form-title"><?php the_field('form_title_quote_cta', 'options'); ?></span>
                        <!-- /.quote-form-title -->

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#home-quote" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#auto-quote" role="tab" aria-controls="nav-profile" aria-selected="false">Car</a>
                            </div>
                        </nav>
                        <!-- // nav  -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="home-quote" role="tabpanel" aria-labelledby="nav-home-tab">
                                <?php the_field('form_code_quote_cta', 'options'); ?>
                            </div>
                            <!-- // home quote  -->
                            <div class="tab-pane fade" id="auto-quote" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <?php the_field('auto_form_code_quote', 'options'); ?>
                            </div>
                            <!-- // car quote  -->
                        </div>
                        <!-- // content  -->

                    </div>
                    <!-- /.quote-form-in -->
                </div>
                <!-- /.quote-form -->
            </div>
            <!-- /.col-md-7 col-lg-5 col-xl-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#middle-quote -->