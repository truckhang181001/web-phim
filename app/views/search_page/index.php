    <div class="container" style="background-color:#000C20; padding: 100px 0;">
        <div class="row searchbox-and-sub-searchbox">
            <div class="col-12 mb-5">
                <?php include_once __DIR__ . "/searchbox.php" ?>
            </div>
        </div>

        <div class="row main-body">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" id="hide-filter">
                <?php include_once __DIR__ . "/filter.php" ?>
            </div>
            <div class="col-12 col-sm-8" id="sub-filter-card">
                <?php include_once __DIR__ . "/sub-filter.php" ?>
                <br />
                <?php include_once __DIR__ . "/card.php" ?>
                <br />
                <?php include_once __DIR__ . "/pagination.php" ?>
            </div>
        </div>
    </div>