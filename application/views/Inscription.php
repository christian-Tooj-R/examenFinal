<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <p style="font-family: cursive;font-size: 0.60cm;color: red;"><?php if (isset($error)) { echo $error ; } ?></p>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-md-6 d-none d-xl-block">
                    <img src="../assets/src/insert.png"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 17cm" />
                  </div>
                  <div class="col-md-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Inscription pour plus d'echange</h3>
                      <form action="<?php echo site_url('login/insertion') ?>" method="post">
                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <label class="form-label" for="form3Example1m">Nom</label>
                                  <input type="text" id="form3Example1m" name="nom" class="form-control form-control-lg" />
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                  <label class="form-label" for="form3Example1n">Prenom</label>
                                  <input type="text" id="form3Example1n" name="prenom" class="form-control form-control-lg" />
                              </div>
                            </div>
                          </div>                    

                          <div class="form-outline mb-4">
                              <label class="form-label" for="form3Example90">Genre</label>
                              <input type="text" name="genre" id="form3Example90" class="form-control form-control-lg" />
                          </div>                         
                          
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example97">Votre email</label>
                              <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" />
                          </div>

                          <div class="form-outline mb-4">
                              <label class="form-label" for="form3Example90">Mot de passe</label>
                              <input type="password" name="password" id="form3Example90" class="form-control form-control-lg" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example99">Confirmation</label>
                              <input type="password" name="password2" id="form3Example99" class="form-control form-control-lg" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example97">Votre contact</label>
                              <input type="text" name="contact" id="form3Example97" class="form-control form-control-lg" />
                          </div>

                          <div class="form-group">                        
                            <input  type="submit" value="Inserer" class="_btn_04">                        
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>