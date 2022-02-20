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

        header('location: ../user/dashboard.php');
        $_SESSION['login_status'] = "true";
        $_SESSION['user_id'] = $row[0];
        $_SESSION['full_name'] = $row[1];
        $_SESSION['display_name'] = $row[2];
        $_SESSION['email'] = $row[3];
       
    } else {
        $_SESSION['login_error'] = "Login Failed ! Invalid Input !!";
        header('location: index.php');
    }

   
    $db->close();
    unset($db);
   
}

