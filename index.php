

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>PHP Dischi</title>
</head>
<body>
    <div id="root">
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
    </div>
    <script src="js/main.js"></script>
</body>
</html> 