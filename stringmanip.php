<?php $title = 'String manipulation';
include 'snipt/header.php' ?>

<?php echo "<h1>$title</h1>" ?>

<?php
$firstName = "Masud";
$middleName = "Parvez";
$lastName = "Riam";

echo "My full name is $firstName $middleName $lastName";
echo "<br/>";
echo "My full name is " . $firstName . ' ', $middleName . ' ', $lastName;

echo "<br/>";

$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str, 15, "<br/>", true)
?>
<?php require 'snipt/footer.php' ?>