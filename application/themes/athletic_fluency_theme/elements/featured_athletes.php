<section class="featured_athletes">
    <div class="angles">
        <div class="angle _first"></div>
        <div class="angle _second"></div>
        <div class="angle _third"></div>
    </div>
    <div class="content container text-center">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $a = new Area('Featured Athletes Main Content');
                    $a->display($c);
                ?>
                <h1>Featured Athletes</h1>
                <p>
                    Athletic Fluency has worked with some pretty dope people - here's just a few of them.
                </p>
                <div class="featured-athletes-slider">
                    <!--
                    Example Slide Layout
                    <div>
                        <img src="<?php echo $this->getThemePath(); ?>/images/hero-img-alternate-2.jpg" />
                        Slider name 1
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>