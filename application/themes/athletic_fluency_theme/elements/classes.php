<div id="classes_section" class="half-item">
    <div class="content">
        <?php
            $a = new Area('View Classes Content');
            $a->display($c);
        ?>
        <div class="btn-wrapper">
            <button type="button" data-area-id="classes_section" class="btn btn-primary toggle_section">View Classes</button>
        </div>
    </div>
    <div class="closed-content" data-toggle="tooltip" data-placement="left" title="View Classes">
        <span class="fa fa-angle-left fa-3x"></span>
    </div>
    <div class="open-content">
        <button type="button" class="reset_items" data-area-id="classes_section"><span class="fa fa-close"></span> Close</button>
        <?php
            $a = new Area('Classes Hidden Content');
            $a->display($c);
        ?>
    </div>
</div>