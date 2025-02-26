<?php $title = 'Do while loop';
include 'snipt/header.php' ?>

<?php echo "<h1>$title</h1>" ?>

<?php
$numbers = 0;

while ($numbers < 10) {
    echo '<p>This msg print 10 times</p>';
    $numbers++;
}
?>

<h1>Do while loop</h1>

<?php

do {
    echo '<p>This msg print 11 times to 15 times</p>';
    $numbers++;
} while ($numbers < 15)
?>
<?php require 'snipt/footer.php' ?>