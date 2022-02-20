<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style=" background-color:#f1f1f1 !important;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 mt-3">
        <div class="card mt-5" style="box-shadow: 0 0 30px #c5cbed;">
          <div class="card-body">
            <img src="./assets//images/logo.png" style="margin-bottom: -50px; margin-top: -50px; margin-left: 90px;" />
            <nav>
              <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">Register </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                  type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Login</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="col-md-12 p-4">
                  <form action="./controllers/AuthController.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                      <label for="fullname" class="form-label">Full Name</label>
                      <input type="text" name="fullname" placeholder="Enter Your Full Name" class="form-control"
                        id="fullname">
                    </div>
                    <div class="mb-3">
                      <label for="fullname" class="form-label">Display Name</label>
                      <input type="text" name="displayname" placeholder="Enter Your Display Name" class="form-control"
                        id="fullname">
                    </div>
                    <div class="mb-3">
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
                    </div>
                    
                   
                    <button type="submit" name="register" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
</body>

</html>