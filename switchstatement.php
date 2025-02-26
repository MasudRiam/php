<?php $title = 'switch statement';
include 'snipt/header.php' ?>

<?php echo "<h1>" . ucfirst($title) . "</h1>" ?>

<?php
$day = "Friday";

switch ($day) {
    case 'Friday';
        echo '<h3>Today is the off day</h3>';
        break;

    case 'Thursday';
        echo '<h3>Today is half day</h3>';
        break;

    default;
        echo '<h3>It is normal day</h3>';
}
?>
<?php require 'snipt/footer.php' ?>