<?php $title = 'index';
include 'snipt/header.php' ?>

<?php
echo 'Hello again, my name is Riam';
echo '<br/>';
echo 'love more';
?>

<?php
// Declare variable
$name = 'Masud Parvez Riam';
$age = 24;


echo '<h2>My name is: ' . $name . '</h2>';
echo "<h2>My name is: $name </h2>";
echo "<h3>My age is: " . ($age + 1) . "</h3>";
?>

<?php require 'snipt/footer.php' ?>