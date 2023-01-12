<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>LOGIN</title>
</head>
<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 border-end">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">LOGIN</p>

                  <form class="mx-1 mx-md-4" method="POST" action="cek_login.php">

                    <div class="d-flex flex-row mb-4">
                      <i class="fa fa-envelope mt-3 fa-lg me-3 fa-fw ICON"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="email" class="form-control" name="email" />
                        <label class="form-label" for="email">Your Email</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row mb-4">
                      <i class="fa fa-lock fa-lmt-4 mt-3 fa-lg me-3 fa-fw ICON"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="pass" class="form-control" name="password" />
                        <label class="form-label" for="pass">Password</label>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" name="submit" class="btn btn-primary btn-lg">LOGIN</button>
                    </div>

                    <div class="d-flex justify-content-left mb-5 ">
                      <a href="register.php">Dont Have account ?</a>
                    </div>
                  </form>
                  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://chamchix.com/unindra/images/logo_unindra_3.png"
                    class="img-fluid" alt="Sample image">
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>