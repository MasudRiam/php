<?php $title = 'if else statement';
include 'snipt/header.php' ?>

    <?php echo "<h1>$title</h1>" ?>

    <?php
    echo "We are gonna create if else statement";

    $marks = 50;
    if ($marks >= 51) {
        echo '<h3 style = "color: green">you have pass</h3>';
    } elseif ($marks == 50) {
        echo '<h3>You have A-</h3>';
    } else {
        echo '<h3 style = "color: red">You failed</h3>';
    }
    ?>
    <?php require 'snipt/footer.php' ?>