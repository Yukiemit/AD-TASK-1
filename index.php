<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Schedule</h1>'
    <div class="days-container">
        <?php
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        for ($i = 0; $i < count($days); $i++) {
            echo "<a class='day' href='schedule.php?day=" . $days[$i] . "'>" . $days[$i] . </a>;
        }
        ?>
    </div>
</body>
</html>