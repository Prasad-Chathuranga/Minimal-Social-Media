<?php

session_start();

if (isset($_POST['post'])) {

    $title = $_POST['title'];
    $user_id = $_SESSION['user_id'];
    $status = 0;


    $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
    $db->busyTimeout(5000);

    $sql = 'INSERT INTO posts(title, image, user_id, status) 
     VALUES(:title, :image, :user_id, :status)';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':title', $title, SQLITE3_TEXT);
    $stmt->bindParam(':user_id', $user_id, SQLITE3_TEXT);
    $stmt->bindParam(':status', $status, SQLITE3_TEXT);

    $file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
 
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$image = time().'.'.$ext;
		$ext_allowed = array("png", "gif", "jpeg", "jpg");
		$location = "../assets/images/uploads/posts/".$image;
		if(in_array($ext, $ext_allowed)){
			if(move_uploaded_file($file_temp, $location)){
                $stmt->bindParam(':image', $image, SQLITE3_TEXT);
            }
        }
    
        $stmt->execute();
  

    if ($stmt) {
        $created = true;
    }

    $db->close();
    unset($db);

     if($created){
        header("Location: ../../user/dashboard.php");
    }
   
}
?>