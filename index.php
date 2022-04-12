<!DOCTYPE html>
<html>

<head>
  <!--Titolo del sito-->
  <?php

  session_start();

  $titoloSito = "Vignale";

  $_SESSION['nomeSito'] = $titoloSito;
  
  ?>
  <!--Titolo del sito-->
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="Assets/Img/logo/favicon.ico" />
  <link rel="stylesheet" href="Assets/CSS/Style.css">
  <link rel="stylesheet" href="Assets/CSS/Carousel.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home |
    <?php echo $titoloSito ?>
  </title>
</head>

<body id="body1">
  <div class="upper-header">
    <p class="f-upper-paragraph"><a class="email-upper-paragraph"
        href="mailto: mail@mail.com?subject = Feedback&body = Message" target="_blank"
        rel="noopener noreferrer">mail@mail.it</a></p>
    <p class="upper-paragraph"><a class="email-upper-paragraph" href="tel:+397777777777">+39 999 999 9999</a></p>
  </div>
  <header id="header-class">
    <!--In caso di logo togliere il commento sotto-->
    <a href="index.html" class="logoLink">
      <img class="logo-img" src="./Assets/Img/logo/logo comune 2020.jpg" alt="logo1" height="40px">
      <img class="logo-img" src="./Assets/Img/logo/Logo fondazione definito.JPG" alt="logo2" height="40px">
      <img class="logo-img" src="./Assets/Img/logo/MiC_logo_esteso_DRM LAZ (2) (1) (1).jpg" alt="logo3" height="40px">
      <img class="logo-img" src="./Assets/Img/logo/logo_sapienza.jpg" alt="logo4" height="40px"></a>
    <!--<h1>Mostra Archeologica</h1>-->
    <nav>
      <ul class="nav_links">
        <li><a href="#news">Notizie</a></li>
        <li><a href="works.html">I Nostri Studi</a></li>
        <li><a href="study.html">Curiosità</a></li>
      </ul>
    </nav>
    <!--Inzio Menu Hamburger solo se si requisiti sono true-->
    <div class="hamburger-menu">
      <div id="myLinks"> <a href="#news">Notizie</a> <a href="works.html">I Nostri Lavori</a> <a href="study.html">I
          Nostri Studi</a> </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <img src="Assets/Img/threelines.png"
          alt="menu-logo" width="10px"> <i class="fa fa-bars"></i> </a>
    </div>
    <!--Fine Hamburger Menu-->
    <a href="#" class="cta">
      <button class="contact-header">Contattaci</button>
    </a>
  </header>
  <div class="bandiera">
    <span class="verde"></span><span class="bianco"></span><span class="rosso"></span>
  </div>
  <!--La pagina ha una grandezza accettabile?-->
  <div class="hero">

    <!--Inizio Carousel-->

    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./Assets/Img/Carousel/Fig. 04.jpg" style="width:100%">
        <div class="text">

          <div class="carouselCard">
            <div class="card-inner">
              <div class="card-front">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat obcaecati quae eos facilis veritatis
                  nam soluta quasi, culpa quas hic modi excepturi vel laudantium quam recusandae dolorum illum possimus
                  fuga.</p>

              </div>
              <div class="card-back">
                <h1>Per maggiori Informazioni</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi temporibus optio, quis incidunt vitae
                  atque aut rerum perspiciatis. Iusto reprehenderit voluptas eos necessitatibus sunt nesciunt blanditiis
                  enim tempora fugit omnis mollitia hic id, voluptatum eius quibusdam? Quam ratione laborum quod.</p>
                <a class="pulsanteCard" href="#">cliccami</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./Assets/Img/Carousel/Fig.03.jpg" style="width:100%">
        <div class="text">
          <div class="carouselCard">
            <div class="card-inner">
              <div class="card-front">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat obcaecati quae eos facilis veritatis
                  nam soluta quasi, culpa quas hic modi excepturi vel laudantium quam recusandae dolorum illum possimus
                  fuga.</p>

              </div>
              <div class="card-back">
                <h1>Per maggiori Informazioni</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi temporibus optio, quis incidunt vitae
                  atque aut rerum perspiciatis. Iusto reprehenderit voluptas eos necessitatibus sunt nesciunt blanditiis
                  enim tempora fugit omnis mollitia hic id, voluptatum eius quibusdam? Quam ratione laborum quod.</p>
                <a class="pulsanteCard" href="#">cliccami</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="./Assets/Img/Carousel/Fig_01.jpg" style="width:100%">
        <div class="text">
          <div class="carouselCard">
            <div class="card-inner">
              <div class="card-front">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat obcaecati quae eos facilis veritatis
                  nam soluta quasi, culpa quas hic modi excepturi vel laudantium quam recusandae dolorum illum possimus
                  fuga.</p>

              </div>
              <div class="card-back">
                <h1>Per maggiori Informazioni</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi temporibus optio, quis incidunt vitae
                  atque aut rerum perspiciatis. Iusto reprehenderit voluptas eos necessitatibus sunt nesciunt blanditiis
                  enim tempora fugit omnis mollitia hic id, voluptatum eius quibusdam? Quam ratione laborum quod.</p>
                <a class="pulsanteCard" href="#">cliccami</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--Fine Carousel-->
    <div class="hero-text-main">
      <!--<h2 class="hero-text-logo">Che cos'è Strat0sphere?</h2>
    <p class="hero-p-logo">Strat0sphere è stato fondato nel 2020 da un gruppo di studenti delle superiori con l'intenzione di unire le proprie conoscenze mettendole in atto con i svariati linguaggi di programmazione che conoscono. Noi siamo sempre in una costante ricerca delle novità e cerchiamo di essere sempre un passo avanti rispetto agli altri.</p>
    <button class="contact-me">
    <a href="mailto:michelefelice58@gmail.com" rel="noopener noreferrer" target="_top">Hai qualche domanda?</a>
    </button>-->
    </div>
  </div>
  <div class="google contact-us">
    <div id="map"></div>
  </div>

  <?php

include('conn.php');

$sql = $conn->query("select * from `newshome` ORDER BY id");

while($row=$sql->fetch_assoc()){
  $newsPostPrint = <<<EOD
  <div class="postContainer">
    <div class="news">
      <div class="postNews">
        <img class="previewNewsImage" src="{$row['foto']}" alt="previewImageNews">
        <h3>{$row['titolo']}</h3>
        <p>{$row['descrizione']}</p>
        <a class="newsButton" href="{$row['link']}">Continua a Leggere</a>
      </div>
    </div>
  </div>
EOD;
echo $newsPostPrint;
}
?>



  <footer>
    <h3>
      <?php echo $titoloSito ?>
    </h3>
    <p style="text-align: center"> Copyright &copy; 2021 -
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap-4.4.1.js"></script>
      <script>document.write(new Date().getFullYear())</script>
      <?php echo $titoloSito ?> All Rights Reserved
    </p>
    <a id="loginLink" href="./login.php">Area Privata</a>
  </footer>
  <script src="./Assets/JS/Script.js"></script>

</body>


</html>