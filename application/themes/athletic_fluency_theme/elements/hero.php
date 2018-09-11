<span class="hidden-md hidden-lg">
    <div class="mobile_nav_overlay"></div>
    <div class="mobile_nav">
        <span class="close_nav"><span class="fa fa-close fa-lg"></span></span>
        <?php include('navigation.php'); ?>
    </div>
</span>
<section class="hero">
    <div class="angles">
        <div class="angle _first"></div>
        <div class="angle _second"></div>
        <div class="angle _third"></div>
    </div>
    <div class="content container">
        <span class="hidden-md hidden-lg">
            <span class="fa fa-bars fa-lg mobile_menu_btn"></span>
        </span>
        <span class="hidden-xs hidden-sm">
            <nav class="site_nav">
                <?php include('navigation.php'); ?>
            </nav>
        </span>
        <div class="social_icons">
            <a href="https://www.facebook.com/athleticfluency/" target="_blank" class="btn-link">
                <span class="fa fa-facebook-square fa-2x"></span>
            </a>
            <a href="https://www.instagram.com/athleticfluency/" target="_blank" class="btn-link">
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