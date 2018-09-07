<?php
defined('C5_EXECUTE') or die('Access Denied.'); ?>

<?php $shuffledPages = $pages;
shuffle($shuffledPages); ?>

<div class="featured-athletes-slider">
<?php foreach ($shuffledPages as $i => $page) : ?>
    <div>
        <img src="<?php echo $page->getAttribute('avatar')->getVersion()->getRelativePath(); ?>" alt="<?php echo $page->getCollectionName(); ?>" />
        <?php echo $page->getCollectionName();  ?>
    </div>
<?php endforeach; ?>
</div>
