<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login CRUD</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fa-svg-with-js.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--=== MA NAVBAR ===-->
<nav class="navbar navbar-expand-sm navbar-light bg-light custom-nav">
    <div class="container">
        <a href="#" class="navbar-brand">Login CRUD</a>
        <button type="button" class="navbar-toggler" data-toggle="#mynav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button><!--=== Button ===-->
        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Accueil</a>
                </li>
            </ul>
        </div><!--=== Collapse ===-->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 content">
            <h1>Inscription</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, minima, distinctio quisquam illo vitae quaerat molestiae dolore ab necessitatibus inventore nemo. Sapiente necessitatibus eius et sint aliquam, aspernatur expedita iusto?</p>
        </div>

        <div class="col-md-4 content">
            <div class="signup-cover">            
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="form-heading">
                                    Inscription
                                </h3>
                                <p>Formulaire D'Inscription!</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fas fa-edit fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                        <div class="form-group">
                            <input type="text" id="nom" class="form-control" placeholder="Nom">
                            <div class="nom-error error"></div>
                        </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" class="form-control" placeholder="Mot de Passe">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password1" class="form-control" placeholder="Saisir Passe à Nouveau">
                            </div>
                            <div class="form-group">
                                <button type="button" id="submit" class="btn btn-success btn-block form-btn">Inscription</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="#" id="login">J'ai Déjà un Compte ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="login-cover">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9 text-center">
                                <h3 class="form-heading">
                                    Connexion
                                </h3>
                                <p>Formulaire De Connexion!</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fas fa-2x fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action=""> 
                            <div class="form-group">
                                <input type="email" id="login_email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" id="login_password" class="form-control" placeholder="Mot de Passe">
                            </div>
                            <div class="form-group">
                                <button type="button" id="login" class="btn btn-success btn-block form-btn">Connexion</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="#" id="inscription">Inscription ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/inscription.js"></script>
    <script type="text/javascript" src="assets/js/fontawesome-all.min.js"></script>
</body>
</html>