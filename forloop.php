<?php $title = 'For loop';
include 'snipt/header.php' ?>

    <?php echo "<h1>$title</h1>" ?>

    <?php
    $name = "Riam";
    for ($i = 0; $i <= 1000; $i++) {
        echo "<p>$name</p>";
    }
    ?>
    <?php require 'snipt/footer.php' ?>