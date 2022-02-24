<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <div class="row">
        <div class="col-md-2">    
    <i class="fas fa-comments text-success"></i>
        </div>
        <div class="col-md-1">    
        <h5>Rocket Social</h5>
        </div>
    </div>
    </a>
  </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        

        <?php if(!$_SESSION['is_admin']) { 
         echo '<li class="nav-item mr-5">
         <a class="nav-link" href="../user/add-new-post.php">Add New Post</a>
       </li>';
          } ?>

        <?php if($_SESSION['is_admin']) { 
         echo '<li class="nav-item mr-5"><a class="nav-link" href="../admin/users.php">Users</a></li>';
          } ?>

<?php if($_SESSION['is_admin']) { 
         echo '<li class="nav-item mr-5"><a class="nav-link" href="../admin/dashboard.php">Posts</a></li>';
          } ?>

<?php if($_SESSION['login_status']) { 
         echo '<li class="nav-item mr-5"><a class="nav-link" href="../logout.php">Logout</a></li>';
          } ?>
      </ul>
    </div>
 
</nav>
</header>
