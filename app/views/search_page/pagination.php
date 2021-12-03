<form method="get" aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <button class='page-link' name='page' value='1'><i class="fad fa-angle-double-right"></i></button>
      </li>
        <?php
          $page = ceil($data['total']/10);
          for($i=1; $i <= $page; $i++) echo "<li class='page-item'><button class='page-link' name='page' value='$i'>$i</button></li>";
        ?>
      <li class="page-item">
        <button class='page-link' name='page' value='<?php echo $page?>'><i class="fad fa-angle-double-right"></i></button>
      </li>
    </ul>
</form method="get">
    