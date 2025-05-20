<?php

function retrive_comments_native($page) {

    $db = new SQLite3('protected/comments.db', SQLITE3_OPEN_READONLY);

    $db->enableExceptions(true);

    $stmt = $db->prepare('
        SELECT name, comment, strftime("%FT%TZ", time_posted), time_posted FROM Comments
            WHERE "page" = ?
            AND shown = 1
            ORDER BY time_posted ASC; 
        ');

    $stmt->bindValue(1, $page);

    $results = $stmt->execute();

    while ($comment = $results->fetchArray(SQLITE3_ASSOC)) {
        print_comment($comment);
    }

    $results->finalize();

    $db->close();
}

function print_comment($comment) {
    echo '<div class="comment">'."\n";
    echo '<div class="comment-info">'."\n";
    echo '<div class="comment-username">'."\n";
    echo '<span>'.htmlspecialchars($comment['name']).'</span>'."\n";
    echo '</div>'."\n";
    echo '<div class="comment-timestamp">'."\n";
    echo '<time datetime='.htmlspecialchars($comment['strftime("%FT%TZ", time_posted)']);
    echo '>'.htmlspecialchars($comment['time_posted']).'</time>'."\n";
    echo '</div>'."\n";
    echo '</div>'."\n";
    echo '<div class="comment-content">'."\n";
    echo '<span>';
    echo htmlspecialchars($comment['comment']);
    echo '</span>'."\n";
    echo '</div>'."\n";
    echo '</div>'."\n";
}

function retrive_comments($page) {
    $db = new PDO('sqlite:protected/comments.db');
    
    $stmt = $db->prepare('
        SELECT name, comment, strftime("%FT%TZ", time_posted), time_posted FROM Comments
            WHERE page = :page
            AND shown = 1
            ORDER BY time_posted ASC; 
    ');

    $stmt->bindParam(':page', $page, PDO::PARAM_STR);

    $stmt->execute();

    while($comment = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_comment($comment);
    }
    
    $stmt->closeCursor();
    
    $db = null;
}

?>

