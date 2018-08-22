<?php defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getCurrentPage(); ?>
<?php $count = 0; ?>
<div class="gallery-slider hidden-xs hidden-sm">
    <?php foreach (array_chunk($rows, 4) as $group) : ?>
        <div class="row">
            <?php foreach (array_chunk($group, 2) as $subGroup) : ?>
                <div class="col-md-6">
                    <?php foreach($subGroup as $slide) : ?>
                        <?php $f = File::getByID($slide['fID']); ?>
                        <?php if (is_object($f)) : ?>
                            <div class="gallery-item">
                                <img src="<?php echo BASE_URL . Core::make('html/image', array($f, false))->getTag()->src; ?>"  />
                                <?php if ($slide['linkURL']): ?>
                                    <div class="video-btn" data-url="<?php echo $slide['linkURL']; ?>"
                                        data-toggle="modal"
                                        data-target="#youtubeModal"
                                    >
                                        <span class="fa fa-play"></span>
                                    </div>
                                <?php elseif ($slide['title'] || $slide['description']): ?>
                                    <div class="description">
                                        <p class="h4">
                                            <?php echo $slide['title']; ?>
                                        </p>
                                        <?php echo $slide['description']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $count++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="gallery-slider hidden-md hidden-lg">
    <?php foreach($rows as $slide) : ?>
        <?php $f = File::getByID($slide['fID']); ?>
        <?php if (is_object($f)) : ?>
            <div class="gallery-item">
                <div class="item" style="background:url(<?php echo BASE_URL . Core::make('html/image', array($f, false))->getTag()->src; ?>)">
                </div>
                <?php if ($slide['linkURL']): ?>
                    <div class="video-btn" data-url="<?php echo $slide['linkURL']; ?>"
                        data-toggle="modal"
                        data-target="#youtubeModal"
                    >
                        <span class="fa fa-play"></span>
                    </div>
                <?php elseif ($slide['title'] || $slide['description']): ?>
                    <div class="description">
                        <p class="h4">
                            <?php echo $slide['title']; ?>
                        </p>
                        <?php echo $slide['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php $count++; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
