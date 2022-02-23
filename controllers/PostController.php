<?php 
if (isset($_POST['post'])) {

    $title = $_POST['title'];
    $user_id = 1;


    $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
    $db->busyTimeout(5000);

    $sql = 'INSERT INTO posts(title, image, user_id) 
     VALUES(:title, :image, :user_id)';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':title', $title, SQLITE3_TEXT);
    $stmt->bindParam(':user_id', $user_id, SQLITE3_TEXT);
    
   
    $stmt->execute();

    if ($stmt) {
        $created = true;
    }

    $db->close();
    unset($db);
   
}
?>