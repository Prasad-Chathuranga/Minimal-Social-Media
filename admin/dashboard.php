<?php 
session_start();
if($_SESSION['login_status'] == 1 && $_SESSION['is_admin'] == 1){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style=" background-color:#f1f1f1 !important;">
 
<?php include_once('../includes/header.php'); ?>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
</body>

<div class="container mt-5">
<h4 class="text-center">Posts List</h4>
  <div class="row mt-5">

  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php 
  $db = new SQLite3('C:\laragon\www\minimal-social-media\Minimal-Social-Media\social.db');
  $db->busyTimeout(5000);

$sql = "SELECT * FROM posts";
    $results = $db->query($sql);
    while($row = $results->fetchArray(SQLITE3_ASSOC) ) {
         ?>

    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['title'] ?></td>
      <td><img src='../assets/images/uploads/posts/<?php echo $row["image"] ?>'  width="120" height="100" alt="..."></td>
      <td><?php 
      if($row['status'] == 1){
      
          echo "Accepted"; 
      }else  if($row['status'] == 2){
              echo "Declined";
              }else{
                echo "Pending";
              } ?></td>

              <td>
              <?php 
              if($row['status'] == 1){ 
      
               echo '<button class="btn btn-danger">Decline</button>';
            }else{
                echo '<button class="btn btn-success">Accept</button>';
            }  ?>
              
    
                  
              </td>
    </tr>
  
    <?php } ?>
    </tbody>
</table>
  </div>
</div>

</html>

<?php }else{
    header('location: index.php');
}?>