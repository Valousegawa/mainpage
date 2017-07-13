<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bienvenue en Eorzéa</title>
    <link rel="icon" type="image/png" href="favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ihover.css">
    <link rel="stylesheet" href="css/pgwslider.css">
</head>


<body style="background-color:#000" id="eorzea">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Eorzéa</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#carousel_accueil">A propos</a></li>
            <li><a href="#what">Que faire ?</a></li>
            <li><a href="#map">Carte</a></li>
            <li><a href="#histoire">Histoire</a></li>
            <li><a href="#contact">Newsletter</a></li>
        </ul>
    </div>
</nav>
<div id="crystals"></div>
<div class="container text-center">
    <div class="jumbotron">
        <h2 class="jupiter">Bienvenue en Eorzéa</h2>
        <p><em>Au coeur d'un univers fantastique</em></p>
        <p>Chevauchez votre chocobo et partez à l'aventure !</p>
    </div>
    <ol class="breadcrumb">
        <li class="active">Accueil</li>
    </ol>
    <br>

    <div id="carousel_accueil" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel_accueil" data-slide-to="0" class="active"></li>
            <li data-target="#carousel_accueil" data-slide-to="1"></li>
            <li data-target="#carousel_accueil" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/tra.jpg" alt="New York" style="max-height: none;">
                <div class="carousel-caption">
                    <h4 class="jupiter">Déchainez votre puissance</h4>
                    <p>Armez vous et partez à l'assant des donjons !</p>
                </div>
            </div>

            <div class="item">
                <img src="img/prez.jpg" alt="Chicago" style="max-height: none;">
            </div>

            <div class="item">
                <img src="img/ext.png" alt="Los Angeles" style="max-height: none;">
                <div class="carousel-caption" style="color: #0f0f0f">
                    <h4 class="jupiter">En constante évolution</h4>
                    <p>Eorzéa s'enrichie jour après jour !</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel_accueil" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel_accueil" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>

    <div id="what" class="row" style="padding-bottom: 30px; padding-top: 50px">
        <div class="col-sm-4">
            <h3 class="jupiter"><strong>Créez votre personnage</strong></p></h3><br>
            <img src="img/char.png" alt="characters" class="img-circle img-responsive" width="220px" height="auto">
        </div>
        <div class="col-sm-4">
            <h3 class="jupiter"><strong>Incarnez toutes les classes</strong></h3><br>
            <img src="img/job.jpg" alt="jobs" class="img-circle img-responsive">
        </div>
        <div class="col-sm-4">
            <h3 class="jupiter"><strong>Vivez une aventure épique</strong></h3><br>
            <img src="img/world.png" alt="world" class="img-circle img-responsive" width="250px" height="auto">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p>Partez à l'aventure dans un avatar entièrement personnalisable</p>
        </div>
        <div class="col-sm-4">
            <p>Eorzéa regorge de ressources et de dangers. Soyez préparé !</p>
        </div>
        <div class="col-sm-4">
            <p>Prenez part dans une histoire prenante et passionnante à travers Eorzéa</p>
        </div>
    </div>

    <div id="map" class="row" style="padding-top: 100px">
        <h1 class="jupiter">Une Terre à découvrir</h1>
        <img src="img/map.png" class="img-responsive"/>
    </div>

    <div id="histoire" class="container">
        <h1 class="text-center jupiter">Histoire</h1>
        <ul class="pgwSlider">
            <li>
                <img src="img/cr.jpg" alt="Le Cristal"
                     data-description="Source de toute vie, le Cristal (ou Hydaelyn) est la gardienne d'Eorzéa. Elle maintien l'ordre et l'équilibre en ce monde, mais sa protection est menacée.">
            </li>
            <li>
                <img src="img/party.png" alt="Les aventuriers"
                     data-description="De tout Eorzéa vient des hommes et des femmes en quête d'aventures, d'argent et de gloire. Ils sont appelés Aventuriers.">
            </li>
            <li>
                <img src="img/gc.jpg" alt="Les grandes compagnies"
                     data-description="Les cités-états d'Eorzéa sont organisées autours de grandes compagnies. Les aventuriers les rejoignent afin d'accomplir des missions.">
            </li>
            <li>
                <img src="img/em.png" alt="L'Empire"
                     data-description="Soucieux d'étendre leur territoire et de protéger les leurs, leurs desseins sont bien sombres et la menace pesante approche à grands pas. ">
            </li>
        </ul>
    </div>

    <div id="contact" class="container">
        <h1 class="text-center jupiter">Newsletter</h1>
        <p class="text-center"><em>Suivez l'actualité d'Eorzéa !</em></p>
        <div class="row test">

            <div class="col-md-offset-2 col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Commentaire"
                          rows="5"></textarea>
                <div class="row" style="padding-top: 20px">
                    <div class="col-md-12 form-group">
                        <button class="btn btn-group"
                                type="submit"
                                id="send"
                                data-toggle="popover"
                        >Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="container-fluid text-center">
    <a href="#eorzea" title="Retour en haut">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Créer par HUYENH Valentin - &copy; <?= date("Y") ?></p>
</footer>

<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/index.js"></script>
<script src="js/pgwslider.js"></script>
</body>
</html>