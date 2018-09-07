<?php
defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php include('elements/header.php'); ?>

<div class="bg-img"></div>

<main>
    <?php include('elements/hero.php'); ?>

    <?php include('elements/about.php'); ?>

    <?php include('elements/featured_athletes.php'); ?>

    <section class="new_users" id="new_users">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        $a = new Area('New Users Content');
                        $a->display($c);
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        $a = new Area('New Users Left Content');
                        $a->display($c);
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        $a = new Area('New Users Right Content');
                        $a->display($c);
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="details_section">
        <?php include('elements/general_information.php'); ?>
        <?php include('elements/classes.php'); ?>
    </section>

    <?php include('elements/gallery.php'); ?>

    <section id="contact_us_section">
        <div id="map"></div>
    </section>
</main>

<div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="close-icon" data-dismiss="modal">
            <span class="fa fa-close fa-lg"></span>
        </div>
        <div class="modal-content">
            <div class="modal-body">
                <iframe src="" frameborder="0" id="iframeYoutube" allow="encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php include('elements/footer.php'); ?>