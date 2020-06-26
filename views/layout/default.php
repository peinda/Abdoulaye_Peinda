<!doctype html>
<html lang="en">

<head>
    <title>Acueil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
    <script src="./public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL?>/public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/form.css">
    <link href="//db.onlinewebfonts.com/c/05289e866fe7e1e99d27a7a31f8d3b66?family=Trattatello" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,800&display=swap" rel="stylesheet"> 
   
</head>

<body>
<div class="form-group">
    
<h1 class="text-center ges ">GESTION D’ALLOCATION DE CHAMBRE</h1>

</div>
     
    <nav class="navbar navbar-default navbar title1 container" id="nav" style="border:0px">
        <div class="container" >
            <div class="navbar navbar navbar-light">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:white;margin-top:-6%">
                <ul class="nav navbar-nav"  >
                   
                    <li ><a class="nav-link active col-sm-2" href="<?=BASE_URL?>/security/Ajouteretudiant" id="add_admin">Enregistrer_Etudiant</a></li>
                    <li> <a  class="nav-link active col-sm-2" href="<?=BASE_URL?>/security/Listeretudiant"  id="player_liste">Liste_Etudiants</a></li>
         
                    <li><a class="nav-link active col-sm-2" href="<?=BASE_URL?>/security/Ajouterchambre"  >Enregistrer_Chambre</a></li>
                     <li><a class="nav-link active col-sm-2" href="<?=BASE_URL?>/security/Listerchambre">Lister_Chambres</a></li>
    
                </ul>
               
            </div>
        </div>
    </nav>
    <div id="main" class="d-flex justify-content-center align-items-center container-fluid" style="color:#36ABC5">
        <!-- Afficher Les Vues du Layout -->
        <?php echo  $content_for_layout ?>
    </div>

</body>

</html>