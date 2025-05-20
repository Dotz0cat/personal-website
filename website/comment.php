<?php

    $name = $_POST['c_name'] ?? '';
    $comment = $_POST['c_area'] ?? '';
    $page = $_POST['c_page'] ?? '';

    if ($page == '') exit;
    if ($name == '') $name = "anon";
    if ($comment == '') {
        header('Location: '.$page);
        exit;
    }

    add_comment_pdo($page, $name, $comment);

    header('Location: '.$page.'?submitted=1');
    exit;

    function add_comment_sqlite($page, $name, $comment) {
        $db = new SQLite3('protected/comments.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

        $db->enableExceptions(true);

        $db->exec('BEGIN');

        $stmt = $db->prepare('
            INSERT INTO Comments
            (name, comment, time_posted, page, shown)
            VALUES (:name, :comment, DATETIME("now"), :page, 0);
        ');

        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':comment', $comment);
        $stmt->bindValue(':page', $page);

        $stmt->execute();

        $db->exec('COMMIT;');

        $db->close();
    }

    function add_comment_pdo($page, $name, $comment) {
        $db = new PDO('sqlite:protected/comments.db');

        $db->exec('BEGIN;');

        $stmt = $db->prepare('
            INSERT INTO Comments
            (name, comment, time_posted, page, shown)
            VALUES (:name, :comment, DATETIME("now"), :page, 0);
        ');
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
        $stmt->bindParam(':page', $page, PDO::PARAM_STR);

        $stmt->execute();

        $db->exec('COMMIT;');

        $stmt->closeCursor();

        $db = null;
    }
?>

