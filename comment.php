<?php

    $name = $_POST['c_name'];
    $comment = $_POST['c_area'];
    $page = $_POST['c_page'];

    if ($page == '') exit;
    if ($name == '') $name = "anon";
    if ($comment == '') {
        header('Location: '.$page);
        exit;
    }

    $db = new SQLite3('protected/comments.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

    $db->enableExceptions(true);

    $stmt = $db->prepare('
        INSERT INTO Comments
        (name, comment, time_posted, page, shown)
        VALUES (:name, :comment, DATETIME("now"), :page, 0);
        ');

    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':comment', $comment);
    $stmt->bindValue(':page', $page);

    $stmt->execute();

    $db->close();

    header('Location: '.$page);
    exit;
?>

