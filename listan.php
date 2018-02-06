<?php 
    include "header.php";
    include "footer.php";
?>

<div class="wrapper">
    <?php
        echo namn;
        createLista($filmer);
        showForm($filmer);
    ?>
</div>
