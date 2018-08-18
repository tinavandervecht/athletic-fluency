<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $a = new Area('About Us Main Content');
                    $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?php
                    $a = new Area('About Us Left Column Content');
                    $a->display($c);
                ?>
            </div>
            <div class="col-md-6">
                <?php
                    $a = new Area('About Us Right Column Content');
                    $a->display($c);
                ?>
            </div>
        </div>
    </div>
</section>