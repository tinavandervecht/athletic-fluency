<?php
defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php include('elements/header.php'); ?>

<div class="bg-img"></div>

<main>
    <?php include('elements/hero.php'); ?>

    <?php include('elements/about.php'); ?>

    <?php include('elements/featured_athletes.php'); ?>

    <?php include('elements/gallery.php'); ?>

    <div id="map"></div>
</main>

<div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <iframe src="" frameborder="0" id="iframeYoutube" allow="encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<?php include('elements/footer.php'); ?>