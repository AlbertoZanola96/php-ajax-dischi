<?php
    include __DIR__ . '/doc/database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="img/spot.png" alt="">
        </div>
    </header>
    <main>
        <div class="containerMain">
            <?php
                foreach ($data as $dato) {
                    echo "<div class='element'>";
                        echo "<img src='{$dato['poster']}' alt='$dato[title]'>";
                        echo "<h3> {$dato['title']}</h3>";
                        echo "<h4>{$dato['author']}</h4>";
                        echo "<h4>{$dato['genre']}</h4>";
                        echo "<h4>{$dato['year']}</h4>";
                    echo "</div>";
                }
            ?>
        </div>
    </main>

</body>
</html> 