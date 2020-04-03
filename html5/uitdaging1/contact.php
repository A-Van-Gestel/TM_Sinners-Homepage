<!doctype html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Coding goblins, goede code gegarandeerd!">
    <meta name="keywords" content="OnePager, HTML, CSS, PHP">
    <meta name="author" content="Florian Neise, Leysen Dheran, Van Gestel Axel">

    <title>Coding Goblins - Form</title>

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/creative.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
    <link rel="stylesheet" href="css/webBureauContact.css">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#28a526">
    <meta name="msapplication-TileColor" content="#28a526">
    <meta name="theme-color" content="#ffffff">
</head>


<body id="page-top" class="bg-color-main">
<div id="php-container">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img src="img/Brand_Icon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Coding Goblins</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-sm-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">Go Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="php-main">
        <header class="jumbotron php-background php-header">
            <h1 class="text-center text-white font-weight-bold text-uppercase mt-4">
                Coding Goblins
            </h1>
            <hr class="divider my-4">
        </header>

        <div class="jumbotron jumbotron-fluid bg-color-main pt-0 mb-0">
            <div class="container">
                <h1 class="display-4">Bedankt om contact met ons op te nemen.</h1>
                <p class="lead">Onze goblins zullen zo snel mogelijk op uw verzoek reageren!</p>

                <p class="h3 mt-5">U heeft het volgende doorgestuurd:</p>
                <div class="row">
                    <div class="col-12">
                        <?php
                        if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
                            echo "<p class='text-wrap'><span class='font-weight-bold'>Naam: </span>" . $_POST["voornaam"] . "</p>";
                        } else {
                            echo "<p><span class='font-weight-bold'>Naam: </span><span class='text-danger'>U heeft geen naam ingevuld, dan noem ik u Goblin#404.</span></p>";
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <?php
                        if (isset($_POST["Email"]) && $_POST["Email"] != "") {
                            echo "<p class='overflow-wrap'><span class='font-weight-bold'>Email: </span>" . $_POST["Email"] . "</p>";
                        } else {
                            echo "<p><span class='font-weight-bold'>Email: </span><span class='text-danger'>U heeft geen email ingevuld, dan zal u lang mogen wachten.</span></p>";
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <?php
                        if (isset($_POST["afdeeling"]) && $_POST["afdeeling"] != "") {
                            echo "<p><span class='font-weight-bold'>Probleem: </span>" . $_POST["afdeeling"] . "</p>";
                        } else {
                            echo "<p><span class='font-weight-bold'>Probleem: </span><span class='text-danger'>U heeft geen problemen, good for you.</span></p>";
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <?php
                        if (isset($_POST["feedback"]) && $_POST["feedback"] != "") {
                            echo "<p class='overflow-wrap'><span class='font-weight-bold'>Vraag: </span>" . $_POST["feedback"] . "</p>";
                        } else {
                            echo "<p><span class='font-weight-bold'>Vraag: </span><span class='text-danger'>U heeft geen vragen, waarom bent u dan hier?</span></p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="php-footer" class="bg-light py-5">
    <div class="container">
        <div class="small text-center text-muted">Copyright &copy; 2020 - Florian Neise, Axel Van Gestel, Dheran
            Leysen
        </div>
    </div>
</footer>


<!-- JS: jQuery, Bootstrap, creative -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="js/creative.min.js"></script>
</body>
</html>

