<?php
@session_start();
if (!isset($_SESSION["login"])) {
 




 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>

    <section class="vh-300" style="background-image: url(bg.jpg);">
      <div class="container py-5 h-200" >
        <div class="row d-flex justify-content-center align-items-center h-200" >
          <div class="col-12 col-md-8 col-lg-6 col-xl-5" style="">
            <div class="card shadow-3-strong bg-opacity-50" style="border-radius: 2rem; background-color: #ffffff; ">
              <div class="card-body p-5 text-center">
    
                <h3 class="mb-5 fw-bold">Sign in</h3>

                <?php  
                @session_start();
                if (isset($_SESSION["info"])) {
              
              ?>

              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["info"]; ?>
              </div>

            <?php 

            unset($_SESSION["info"]);

            }


            ?>

    <form  action="vendor/validasi.php" method="post" class="">
                <div class="form-outline mb-4">
                  <input type="text" name="usernameDiweb" id="typeEmailX-2" class="form-control form-control-sm" />
                  <label class="form-label " >Username</label>
                </div>
    
                <div class="form-outline mb-4">
                  <input type="password" name="passwordDiweb" id="typePasswordX-2" class="form-control form-control-sm" />
                  <label class="form-label"  >Password</label>
                </div>
    
                <!-- Checkbox -->
    
                <button class="btn btn-primary btn-md btn-block fw-bold" type="submit">Login</button>
    
                <hr class="my-4">
    
                <button class="btn btn-md btn-block btn-primary" style="background-color: #dd4b39;"
                  type="submit"><i class="fab fa-google me-md-2 "></i> Sign in with google</button>
                  <!-- <i class="bi bi-google"></i> -->
                <button class="btn btn-md btn-block btn-primary mb-4 mt-3" style="background-color: #3b5998;"
                  type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

}else{
  header("location: index.php");
  exit();
 }
?>