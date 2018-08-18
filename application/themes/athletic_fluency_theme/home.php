<?php
defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php include('elements/header.php'); ?>

<div class="bg-img"></div>

<main>
    <section class="hero">
        <div class="angles">
            <div class="angle _first"></div>
            <div class="angle _second"></div>
            <div class="angle _third"></div>
        </div>
        <div class="content container">
            <?php include('elements/navigation.php'); ?>
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
            <!-- <img class="logo" src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="Athletic Fluency" />
            <h1>Life is an athletic undertaking.</h1>
            <h2>It’s hard to build dreams if you’re out of shape.</h2> -->
        </div>
    </section>
</main>

<?php include('elements/footer.php'); ?>