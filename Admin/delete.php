<?php

if(isset($_POST['memberId'])) {
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_project', 'root', '');

    $sql = $pdo -> prepare(
        "DELETE FROM tb_team;"
    );
}