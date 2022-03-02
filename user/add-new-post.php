
<?php 
session_start();
if( !empty($_SESSION['login_status']) && empty($_SESSION['is_admin'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
 
<?php include_once('../includes/header.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 mt-3">
        <div class="card mt-5" style="box-shadow: 0 0 30px #c5cbed;">
          <div class="card-body">
            <img src="./assets/images/logo.png" style="margin-bottom: -50px; margin-top: -50px; margin-left: 90px;" />
                <div class="col-md-12 p-4">
                  <form action="../controllers//PostController.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                      <label for="fullname" class="form-label">Title</label>
                      <input type="text" name="title" placeholder="Enter Post Title" class="form-control"
                        id="fullname">
                    </div>
                    <div class="mb-3">
                      <label for="fullname" class="form-label">Content</label>
                      <input type="text" name="displayname" placeholder="Enter Post Content" class="form-control"
                        id="fullname">
                    </div>

                    <div class="mb-3">
                      <label for="fullname" class="form-label">Image</label>
                      <input type="file" name="image" placeholder="Select Image..." class="form-control"
                        id="image">
                    </div>

                    <!-- <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Address</label>
                      <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                   
                    <div class="mb-3">
                      <label for="fullname" class="form-label">Phone</label>
                      <input type="number" name="phone" placeholder="Enter Your Mobile Number" class="form-control"
                        id="fullname">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" placeholder="Enter Your Password" class="form-control"
                        id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                      <label for="fullname" class="form-label">Description</label>
                     <textarea class="form-control" name="description" placeholder="Enter About You"></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="fullname" class="form-label">Profile Picture</label>
                      <input type="file" name="image" placeholder="Enter Your Display Name" accept="image/png, image/gif, image/jpeg" 
                      class="form-control"
                        id="fullname">
                    </div> -->
                    
                   
                    <button type="submit" name="post" class="btn btn-primary">Submit</button>
                  </form>
                </div>
             

              <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="col-md-12 p-4">
                  <form action="./controllers/AuthController.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Address</label>
                      <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" placeholder="Enter Your Password" class="form-control"
                        id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </html>
  <?php }else{
    header('location: ../index.php');
}?>