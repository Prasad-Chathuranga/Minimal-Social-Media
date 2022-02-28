<?php

session_start();

if (isset($_POST['register'])) {

    $full_name = $_POST['fullname'];
    $display_name = $_POST['displayname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $description = $_POST['description'];
    // $image = $_POST['image'];


    // $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
    $db = new SQLite3('C:\xampp\2022\htdocs\social\social.db');

    $db->busyTimeout(5000);

    $sql = 'INSERT INTO users(fullname, displayname, email, phone, password, description,image) 
     VALUES(:fullname, :displayname, :email, :phone, :password, :description, :image)';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':fullname', $full_name, SQLITE3_TEXT);
    $stmt->bindParam(':displayname', $display_name, SQLITE3_TEXT);
    $stmt->bindParam(':email', $email, SQLITE3_TEXT);
    $stmt->bindParam(':phone', $phone, SQLITE3_TEXT);
    $stmt->bindParam(':password', $password, SQLITE3_TEXT);
    $stmt->bindParam(':description', $description, SQLITE3_TEXT);
    // $stmt->bindParam(':image', $image, SQLITE3_TEXT);
   
    $stmt->execute();

    if ($stmt) {
        $created = true;
    }

    $db->close();
    unset($db);
   
    // if($created){
    //     header("Location: successMessage.php");
    // }
}


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
    $db = new SQLite3('C:\xampp\2022\htdocs\social\social.db');
    $db->busyTimeout(5000);
    
    $sql = 'SELECT * FROM users WHERE email = :email 
    AND password = :password ';

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    

    $result = $stmt->execute();
    $row = $result->fetchArray();

    if($row[0] != ""){

        $_SESSION['login_status'] = "true";
        $_SESSION['is_admin'] = false;
        $_SESSION['user_id'] = $row[0];
        $_SESSION['full_name'] = $row[1];
        $_SESSION['display_name'] = $row[2];
        $_SESSION['email'] = $row[3];

        header('location: ../user/dashboard.php');
       
    } else {
      

        $sql = 'SELECT * FROM admin WHERE email = :email 
    AND password = :password ';

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    

    $result = $stmt->execute();
    $row = $result->fetchArray();

    if($row[0] != ""){

        $_SESSION['login_status'] = "true";
        $_SESSION['is_admin'] = true;
      

        header('location: ../admin/dashboard.php');
    }

    }

   
    $db->close();
    unset($db);
   
}

if (isset($_POST['activate'])) {

    $status = 1;
    $id = $_POST['id'];
    // $status = 0;

    // $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
    $db = new SQLite3('C:\xampp\2022\htdocs\social\social.db');

    $db->busyTimeout(5000);

    $statement_draw = $db->prepare("UPDATE users SET status=:status  WHERE id = :id ");
        
    $statement_draw->bindParam(':status', $status);
    $statement_draw->bindParam(':id', intval($id));

    $statement_draw->execute();

    if ($statement_draw) {
        $created = true;
    }

    $db->close();
    unset($db);

     if($created){
        header("Location: ../admin/users.php");
    }
   
}

if (isset($_POST['deactivate'])) {


    echo "dvd";

    print_r($_POST);

    $status = 0;
    $id = $_POST['id'];
    // $status = 0;


    // $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
    $db = new SQLite3('C:\xampp\2022\htdocs\social\social.db');

    $db->busyTimeout(5000);

    $statement_draw = $db->prepare("UPDATE users SET status=:status  WHERE id = :id ");
        
    $statement_draw->bindParam(':status', $status);
    $statement_draw->bindParam(':id', intval($id));

    $statement_draw->execute();

    if ($statement_draw) {
        $created = true;
    }

    $db->close();
    unset($db);

     if($created){
        header("Location: ../admin/users.php");
    }
   
}

?>

