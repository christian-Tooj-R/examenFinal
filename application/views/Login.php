<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                    <img src="../assets/images/user.png">
                </div>                  
                  <form action="<?php echo site_url('login/checklogin') ?>" method="POST">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                      </div>

                      <div class="form-group">
                        <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                      </div>
                      <div class="form-group">                        
                          <input  type="submit" value="Log In" class="_btn_04">                        
                      </div>

                  </form>
                
                <div class="form-group nm_lk"><p><a href="<?php echo site_url('login/inscription') ?>">Create an account</a> </p></div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>