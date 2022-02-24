<?php include_once('../includes/header.php'); ?>
<body style=" background-color:#f1f1f1 !important;">
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
