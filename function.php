<?php $title = 'Function';
include 'snipt/header.php' ?>

    <?php echo "<h1>$title</h1>" ?>

    <?php
    //Write a PHP function called greetUser that takes a name as a parameter and returns a greeting message
    function greetUser($name)
    {
        echo "Hello, $name! Welcome to PHP";
    }

    greetUser("John");
    echo '<br/>';
    ?>

    <?php

    //Write a function called calculateSum that takes two numbers as parameters and returns their sum.
    function calculateSum($num1, $num2)
    {
        $sum = $num1 + $num2;
        echo $sum;
    }

    calculateSum(5, 10);
    echo '<br/>';
    ?>

    <?php
    //Write a function called findLargest that takes an array of numbers as a parameter and returns the largest number in the array.
    function findLargest($array)
    {
        $max = $array[0];
        foreach ($array as $num) {
            if ($num > $max) {
                $max = $num;
            }
        }
        return $max;
    }

    echo findLargest([10, 25, 67, 89, 45]);
    ?>
    <?php require 'snipt/footer.php' ?>