<?php 
session_start();
if( $_SESSION['login_status'] == true){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body style=" background-color:#f1f1f1 !important;">
 
<?php include_once('../includes/header.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
   <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
</body>

<div class="container mt-5">
<h4 class="text-center">Friends</h4>
  <div class="row mt-5">
<?php 
    $db = new SQLite3('C:\xampp\2022\htdocs\social\social.db');

//   $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
  $db->busyTimeout(5000);

$sql = "SELECT * FROM users WHERE status = 1";
    $results = $db->query($sql);
    while($row = $results->fetchArray(SQLITE3_ASSOC) ) {
         ?>


    <div class="col-sm">
    <div class="card mt-2 mb-2" style="width: 18rem;">
    <div class="card-header">
    <h5 class="card-title"> <?php echo $row['displayname'] ?></h5>
    <?php echo $row['fullname'] ?>
    </div>
  <img src='../assets/images/uploads/users/<?php echo $row["image"] ?>'  class="card-img-top" width="200" height="200" alt="...">
  <div class="card-body">
    <a href="#" class="btn btn-primary">Add Friend</a>
  </div>
</div>
     
    </div>
    <?php } ?>
  </div>
</div>

</html>

<?php }else{
    header('location: index.php');
}?>