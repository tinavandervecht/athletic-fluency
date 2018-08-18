<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                    $a = new Area('Footer Left Column Content');
                    $a->display($c);
                ?>
            </div>
            <div class="col-md-4">
                <?php
                    $a = new Area('Footer Center Column Content');
                    $a->display($c);
                ?>
            </div>
            <div class="col-md-4">
                <?php
                    $a = new Area('Footer Right Column Content');
                    $a->display($c);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center copyright">
                    &copy; <?php echo date('Y'); ?> Athletic Fluency. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php View::element('footer_required'); ?>

<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/vendors/slick.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/app.js"></script>
</div>
</body>
</html>