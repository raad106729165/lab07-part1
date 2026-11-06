<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Lab 07 Task 2: PHP arrays">
    <meta name="author" content="Rayahen Raad">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>PHP Arrays</h1>
    <?php
        // declare and initialise the array with the days of the week
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

        // display the array as a comma-separated list
        echo "<p>The days of the week in English are: " . implode(", ", $days) . ".</p>";
    ?>
</body>
</html>
