<?php
try {
    $BD = new PDO('mysql:host=localhost;dbname=callimo', 'root',);
} catch (PDOException $e) {
    echo 'Erro : ' . $e->getMessage();
}
