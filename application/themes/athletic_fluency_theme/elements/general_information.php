<div id="general_information_section" class="half-item">
    <div class="content">
        <?php
            $a = new Area('Learn More Content');
            $a->display($c);
        ?>
        <div class="btn-wrapper">
            <button type="button" data-area-id="general_information_section" class="btn btn-secondary toggle_section">Learn More</button>
        </div>
    </div>
    <div class="closed-content" data-toggle="tooltip" data-placement="right" title="View General Information">
        <span class="fa fa-angle-right fa-3x"></span>
    </div>
    <div class="open-content">
        <button type="button" class="reset_items" data-area-id="general_information_section"><span class="fa fa-close"></span> Close</button>
        <?php
            $a = new Area('General Information Hidden Content');
            $a->display($c);
        ?>
    </div>
</div>