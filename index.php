<?php
function in_holiday($vandaag) {
  $holiday = [
    "Paasvakantie" =>  [
      "start" => "2019-04-06",
      "eind" => "2019-04-22"
    ],
    "Zomervakantie" =>  [
      "start" => "2019-06-29",
      "eind" => "2019-09-15"
    ],
    "Kerstvakantie" =>  [
      "start" => "2019-12-21",
      "eind" => "2020-02-07"
    ]
  ];
  $i = 0;
  foreach ($holiday as $vakantie => $datum) {
    if ($vandaag > $holiday[$vakantie]["start"] && $vandaag < $holiday[$vakantie]["eind"]) {
      $i++;
    }
  }
  return $i;
}

if (isset($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = "home";
}

?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bs_custom.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/main.css">
    <title>Alpha Copy Leuven</title>
  </head>
  <body>
    <div class="container">
    <div class="poppup"></div>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10 col-12 header mb-4">
          <div class="row align-items-center">
            <div class="col-lg-12 col-10">
              <img src="img/logo_.png">
            </div>
            <div class="col-2 mobile_menu text-center">
              <i class="fas fa-bars" onclick="toggleMenu()"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
          <?php
          if (!in_holiday(date("Y-m-d"))) {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Opgelet:</strong> Tijdelijk aangepaste openingsuren.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
          }
          ?>

        </div>
      </div>
      <div class="row content">
        <div class="col-lg-2 col-12 nav">
          <ul>
            <li><a href="home">Welkom<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="wie-zijn-we">Wie zijn we<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="kopie-print">Kopie & Print<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="afwerking">Afwerking<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="plan-afdruk">Planafdruk<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="thesis-printen">Thesis printen<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="services">Services<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <li><a href="contact">Contact<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
            <!--<li><a href="bestel-online">Bestel Online<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>-->
            <li><a href="https://www.facebook.com/alphacopyleuven" target="_blank"  class="text-right"><img src="img/fb.jpg" alt=""></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-7 col-12">
          <?php
          if (isset($page) && !file_exists("partials/" . $page . ".html")) {
            include "partials/404.html";
          } else {
            include "partials/" . $page . ".html";
          }
           ?>
        </div>
        <div class="col-lg-4 col-md-5 col-12 promo">
          <h3>Promoties</h3>
            <div class="xtra_promo">
              <strong>Cursussen beschikbaar in de winkel: </strong>
              <br />
              <br />
              <i class="far fa-file-pdf"></i>&nbsp;&nbsp;&nbsp;
              <a href="https://www.dropbox.com/s/kboy87f80wra15y/Cursussen.pdf?dl=0" target="_blank">UCLL 2ste semester</a>
              <br />
              <i class="far fa-file-pdf"></i>&nbsp;&nbsp;&nbsp;
              <a href="https://www.dropbox.com/s/qqg2ewbckbrv966/Cursussen_sem_1_UCLL.pdf?dl=0" target="_blank">UCLL 1ste semester</a>
            </div>
          <!--<div>
            <p>Je thesis klaar binnen de <strong>4 werkuren zonder afspraak</strong>, ook in drukke periodes!
              <span class="text-right"><a href="thesis-printen" class="btn btn-xs btn-primary float-right">Lees meer &raquo;</a></span>
            </p>
          </div>-->
          <div>
            Met een klantenkaart krijg je tot <strong>€ 10 gratis!</strong>
            <br />&nbsp;
            <a href="klantenkaart" class="btn btn-xs btn-primary float-right">Lees meer &raquo;</a>
          </div>
          <div>
            Posters in <strong>A2, A1 of A0</strong> printen is bij ons geen probleem. We kunnen alles printen tot <strong>90cm</strong> breed.
            <br />&nbsp;
            <a href="plan-afdruk" class="btn btn-xs btn-primary float-right">Lees meer &raquo;</a>
          </div>
          <div>
            Ons logo op uw commerciëel printwerk?
            <br />
            <em><strong>Een reductie van 50% </strong></em>
            <br />&nbsp;
            <a href="promotie" class="btn btn-xs btn-primary float-right">Lees meer &raquo;</a>
          </div>
          <div class="openingsuren">
            <h3>Openingsuren</h3>
            <?php
            date('Y-m-d');
            if (!in_holiday(date("Y-m-d"))) {
                ?>
                <ul class="list_openingsuren">
                  <li>Maandag:</li>
                  <li>Dinsdag:</li>
                  <li>Woensdag:</li>
                  <li>Donderdag:</li>
                  <li>Vrijdag:</li>
                  <li>Zaterdag:</li>
                  <li>Zondag:</li>
                  <li><strong>08u30 - 20u00</strong></li>
                  <li><strong>08u30 - 20u00</strong></li>
                  <li><strong>08u30 - 20u00</strong></li>
                  <li><strong>08u30 - 20u00</strong></li>
                  <li><strong>08u30 - 18u00</strong></li>
                  <li><strong>gesloten</strong></li>
                  <li><strong>gesloten</strong></li>
                </ul>
                <?php
            } else {
              ?>
              <ul class="twoCol">
                <li>Maandag</li>
                <li>Dinsdag</li>
                <li>Woensdag</li>
                <li>Donderdag</li>
                <li>Vrijdag</li>
                <li>Zaterdag</li>
                <li>Zondag:</li>
                <strong>
                <li>09u00 - 18u00</li>
                <li>09u00 - 18u00</li>
                <li>09u00 - 18u00</li>
                <li>09u00 - 18u00</li>
                <li>09u00 - 18u00</li>
                <li>gesloten</li>
                <li>gesloten</li></strong>
              </ul>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 footer text-center">
          &copy 2019 Alpha Copy - Tiensestraat 89, 3000 Leuven &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;info@alphacopyleuven.be
        </div>
      </div>
    </div>
  </body>
  <script src="js/functions.js"></script>
</html>
