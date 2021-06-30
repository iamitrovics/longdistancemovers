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