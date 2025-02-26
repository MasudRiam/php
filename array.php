<?php $title = 'array';
include 'snipt/header.php' ?>

    <?php echo "<h1>" . ucfirst($title) . "</h1>" ?>

    <?php
    $num = [1, 2, 3, 4, 5, 6, 7, 8];
    $sum = 0;


    for ($i = 0; $i < count($num); $i++) {
        $sum += $num[$i];
    }
    echo "All sum is: $sum";

    ?>
    <?php require 'snipt/footer.php' ?>