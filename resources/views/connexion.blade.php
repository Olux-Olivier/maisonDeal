<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('cssTemplate/assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('cssTemplate/assets/cssC/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('cssTemplate/assets/cssC/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('cssTemplate/assets/cssC/style.css') }}">

    <title>nDeal/connexion</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <h3>Connectez-vous à <strong>nDeal</strong></h3>
                  <p class="mb-4">rassurez-vous avoir déjà un compte et remplissez tous les champs.</p>
                </div>
                <form action="#" method="post">
                  <div class="form-group first">
                    <label for="username">Pseudo</label>
                    <input type="text" class="form-control" id="username">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Se souvenir de moi</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div> 
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Mot de passe oublié</a></span> 
                    <span class="ml-auto"><a href="{{ route('index') }}" class="forgot-pass">Retour</a></span>
                  </div>

                  <input type="submit" value="Se connecter" class="btn btn-pill text-white btn-block btn-primary" id="submit">

                  <span class="d-block text-center my-4 text-muted"> Ou se connecter avec</span>
                  
                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{ asset('cssTemplate/assets/jsC/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('cssTemplate/assets/jsC/popper.min.js') }}"></script>
    <script src="{{ asset('cssTemplate/assets/jsC/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cssTemplate/assets/jsC/main.js') }}"></script>
  </body>
</html>