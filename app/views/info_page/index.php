<head>
    <script type="text/javascript" src="<?php echo PRONAME ?>/public/js/InfoPage/script.js"></script>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/HomePage.css">
</head>
<body>
    <div class="info-page">
        <div class="info-page__header">
        <?php
            include_once __DIR__."/header.php"; 
        ?>
        </div>
      <div class="info-page__img-group">
        <?php
            include_once __DIR__."/img-group.php"; 
        ?>
      </div>
        <div class="info-page__tab-content"> 
            <?php
            include_once __DIR__."/tab-content.php"; 
        ?></div>
        <!-- <div class="container info-carousel">
            <?php
                include_once __DIR__."/../home_page/carousel.php"; 
            ?>
        </div> -->
    </div>

    <script src="<?php echo PRONAME ?>/public/js/app/home_page/script.js"></script>
    <script type="text/javascript" src="<?php echo PRONAME ?>/public/js/app/info_page/script.js"></script>
</body>
</html>