<?php 
session_start();
if(isset($_POST['submit'])){
    $_SESSION['email']=$_POST['email'];
    exit;
}
include("includes/header.php");

?>
<style>
    .login{
        transform: skewX(20deg);
 }
</style>
<br><br>
<main>
<div class="container">

      <section class="section register min-vh-100 d-flexflex-column align-items-center justify-content-center py-4">
        <div class="container">
            
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">
                    
                <div class="card-body" style="border:4px double maroon">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="font-family:algerian; color:maroon">Login Your Account</h5>
    <!-- echo if the email/password is invalid   -->
 <?php if (isset($_GET['msg1'])) { ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
  <i class="bi bi-exclamation-triangle-fill me-2"></i>
  <?php echo $_GET['msg1']; ?>
</div>
        <?php } ?>
        <p class="text-center small">Enter your username & password to login</p><hr>
                  </div>
          <!-- login form  -->
          <form class="row g-3 needs-validation" novalidate method="post" action="login_process.php" >
            
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="psw" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn w-100 text-white" type="submit" name="submit" style="background-color:maroon">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="">Create an account</a></p>
                    </div>
                  </form>
                  <!-- login form  end-->

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
      
    </div>
  </main><!-- End #main -->
<?php  include("includes/footer.php"); ?>