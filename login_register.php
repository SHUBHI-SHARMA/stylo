
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <?php include("head.php"); ?>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <?php include("navindexshop.php"); ?>
       <?php include("sliderdefault.php"); ?>


      <div class="main">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Login-Register</h1>
              </div>
            </div>
          </div>
     
        <section class="module">
          <div class="container">
            <div class="row">
             <?php include("login.php"); ?>
              <?php include("register.php"); ?> 
            </div>
          </div>
        </section>
           <?php include("footer.php"); ?>

       
    </main>
          <?php include("javascript.php"); ?>

  </body>
</html>