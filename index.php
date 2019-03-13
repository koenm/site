<?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>

    <script>
    function removeAlert(e) {
      $(e).parents('.alert').hide();
    }
    </script>
    <title>Alpha Copy Leuven</title>
  </head>
  <body>
    <div class="container">
    <div class="poppup"></div>
      <div class="row">
        <div class="col-md-2 col-sm-2 header-blank"></div>
        <div class="col-md-10 col-sm-10 header">
            <div class="row display-flex">
                <div class="col-md-7 col-sm-7 col-xs-9">
                    <img src="img/logo_.png">
                </div>
                <div class="col-md-4 col-sm-5 col-xs-2 mobile text-right">
                  <i class="mobile pull-right fa fa-bars" aria-hidden="true" onclick="toggleMenu()"></i>
                </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-2 header-blank"></div>
        <div class="col-md-6 col-sm-6">
          <!--<div class="alert alert_msg">
            Tijdens de kerstvakantie zijn we open van 9u00 tot 18u00. Op 24, 25, 31 december en 1 januari zijn we gesloten. <br />Prettige eindejaarsfeesten!
            <a class="close" onClick='removeAlert(this)'>X</a>
          </div>-->
        </div>
        <div class="col-md-4 col-sm-4">

        </div>
      </div>
      <div class="row content_row">
        <div class="col-md-2 col-sm-2 nav">
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
          </ul>
          <a href="https://www.facebook.com/alphacopyleuven" target="_blank"  class="text-right"><img src="img/fb.jpg" alt=""></a>
        </div>
        <div class="col-md-6 col-sm-6">
          <?php
          if (isset($page) && !file_exists("partials/" . $page . ".html")) {
            include "partials/404.html";
          } else {
            include "partials/" . $page . ".html";
          }
           ?>
        </div>
        <div class="col-md-4 col-sm-4 promo">
          <h3>Promo</h3>
            <div>
            <p class="xtra_promo"><strong>Cursussen beschikbaar in de winkel: </strong>
            <br /><br /><a href="https://www.dropbox.com/s/kboy87f80wra15y/Cursussen.pdf?dl=0" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;UCLL 2ste semester</a>
            <br /><a href="https://www.dropbox.com/s/qqg2ewbckbrv966/Cursussen_sem_1_UCLL.pdf?dl=0" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;UCLL 1ste semester</a>
            </p>
          </div>
          <!--<div>
            <p>Je thesis klaar binnen de <strong>4 werkuren zonder afspraak</strong>, ook in drukke periodes!
              <br />
              <br />
              <span class="text-right"><a href="thesis-printen" class="btn btn-xs btn-primary">Lees meer &raquo;</a></span>
            </p>
          </div>-->
          <div>
            <p style="font-size: 20px"><strong>€ 10 gratis!</strong>
              <br />
              <span class="text-right"><a href="klantenkaart" class="btn btn-xs btn-primary">Lees meer &raquo;</a></span>
            </p>
          </div>
          <div>
            <p>Posters in <strong>A2, A1 of A0</strong> printen is bij ons geen probleem. We kunnen alles printen tot <strong>90cm</strong> breed.
              <br />
              <br />
              <span class="text-right"><a href="plan-afdruk" class="btn btn-xs btn-primary">Lees meer &raquo;</a></span>
            </p>
          </div>
          <div>
            <p>Ons logo op uw commerciëel printwerk?<br /><em><strong>Een reductie van 50% </strong></em>
              <br />
              <br />
              <span class="text-right"><a href="promotie" class="btn btn-xs btn-primary">Lees meer &raquo;</a></span>
            </p>
          </div>
          <div class="openingsuren">
            <h3>Openingsuren</h3>
            <ul class="twoCol">
              <li>Maandag:</li>
              <li>Dinsdag:</li>
              <li>Woensdag:</li>
              <li>Donderdag:</li>
              <li>Vrijdag:</li>
              <li>Zaterdag:</li>
              <li>Zondag:</li>
              <li><strong>8u30 - 20u00</strong></li>
              <li><strong>8u30 - 20u00</strong></li>
              <li><strong>8u30 - 20u00</strong></li>
              <li><strong>8u30 - 20u00</strong></li>
              <li><strong>8u30 - 18u00</strong></li>
              <li><strong>gesloten</strong></li>
              <li><strong>gesloten</strong></li>
            </ul>
            <!--<ul class="twoCol">
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
              </ul>-->
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
