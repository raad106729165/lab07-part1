<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Lab 07 Task 1: PHP variables, arrays and if statements">
    <meta name="author" content="Alak Raad">
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <?php
        $marks = array(85, 85, 95);   // declare and initialise the array
        $marks[1] = 90;               // change the second element (index 1) to 90

        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;   // calculate the average

        // set the status depending on whether the average is 50 or more
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }

        // display the average and the status
        echo "<p>The average score is $ave. You $status.</p>";
    ?>
</body>
</html>
