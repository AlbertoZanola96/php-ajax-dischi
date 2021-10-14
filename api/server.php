<?php
    require __DIR__ . "/../doc/database.php";

    header('Content-Type: application/json');
    echo json_encode($data);

?>