<section class='ticket-plan'>
    <div class="ticket-plan__header">
        <img src="<?php echo PRONAME ?>/public/img/BuyTicket.jpg" alt="">
    </div>
    <form method="get" class="ticket-plan__filter">
        <?php require_once __DIR__ . "/filter.php" ?>
    </form>
    <div class="ticket-plan__body container">
        <?php require_once __DIR__ . "/card.php" ?>
    </div>
</section>