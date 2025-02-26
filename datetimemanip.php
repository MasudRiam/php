    <?php $title = 'Date and Time manipulation';
    include 'snipt/header.php' ?>

    <?php echo "<h1>$title</h1>" ?>

    <?php
    $date = getdate();

    echo "Today is the: " . $date['mday'] . '-', $date['mon'] . '-', $date['year'] . "<br/>";

    echo time();

    ?>

    <h4>Better way to write the code</h4>

    <?php
    echo date("d-m-y h:i:s A", time());
    ?>
    <?php require 'snipt/footer.php' ?>