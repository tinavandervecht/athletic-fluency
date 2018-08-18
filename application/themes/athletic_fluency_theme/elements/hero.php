<section class="hero">
    <div class="angles">
        <div class="angle _first"></div>
        <div class="angle _second"></div>
        <div class="angle _third"></div>
    </div>
    <div class="content container">
        <?php include('navigation.php'); ?>
        <div class="social_icons">
            <a href="" target="_blank" class="btn btn-link">
                <span class="fa fa-facebook-square fa-2x"></span>
            </a>
            <a href="" target="_blank" class="btn btn-link">
                <span class="fa fa-instagram fa-2x"></span>
            </a>
        </div>
        <div class="logo">
            <?php
                $a = new Area('Logo Image');
                $a->display($c);
            ?>
        </div>
        <?php
            $a = new Area('Hero Content');
            $a->display($c);
        ?>
    </div>
</section>