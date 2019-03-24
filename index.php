<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daně</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.0/jspdf.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
    <link id="bootstrap-css" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Kalendář-->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/themes/base/jquery-ui.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/jquery-ui.min.js" type="text/javascript"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="brand" href="index.php">DANĚ JEDNODUŠE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="brand">
              <a class="nav-link" href="eforms.php">Elektronické formuláře</a>
            </li>
            <li class="brand">
              <a class="nav-link" href="documents.php">Daňové tiskopisy</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
          <h1 class="nadpis1">Daňové přiznání z pohodlí vašeho domova</h1>
          <h2 class="nadpis2">Vyplňte si daňové přiznáni během několika minut</h2>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/business.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2>Jste podnikatel?</h2>
              <p>Povinost podat daňové přiznání vzniká na základě ustanovení § 38 zákona o daních z příjmů těm podnikatelům, jejichž roční příjmy přesáhly částku 15.000 Kč a zároveň se nejedná o příjmy, které jsou od daně osvobozeny nebo se na ně neuplatňuje daň srážková.Podání musejí podat také ti podnikatelé, kteří byli v uplynulém zdaňovacím období ve ztrátě.</p>
				<a href="podnikatel.html"><button type="button" class="btn btn-primary btn-lg">Vyplnit formulář</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/worker.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2>Jste zaměstnanec?</h2>
              <p>Formulář daňového přiznání za rok 2017 nemusí odevzdávat zaměstnanci, kteří během uplynulého roku pracovali pouze pro jednoho zaměstnavatele anebo pro více zaměstnavatelů postupně a u všech těchto zaměstnavatelů podepsali prohlášení k dani. Sám podává daňové přiznání zaměstnanec, pokud: měl v roce 2017 celkové příjmy (v hrubé mzdě) vyšší než 1 355 136 korun nebo během roku 2017 pracoval postupně pro víc zaměstnavatelů a u některého nepodepsal prohlášení k dani.</p>
				<button type="button" class="btn btn-primary btn-lg">Vyplnit formulář</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/student.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2>Jste student?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
				<button type="button" class="btn btn-primary btn-lg">Vyplnit formulář</button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
	<div class="oblique"></div>
    <footer class="footer1 py-5 bg-black">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      <!-- /.container -->
    </footer>

<!-- Bootstrap core JavaScript-->
<script type="text/javascript" src="js/createPDF.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="https://d3js.org/d3.v3.js"></script>
      <script type="text/javascript" src="js/saveLoad.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/toggle.js"></script>
      <script type="text/javascript" src="js/xmlExport.js"></script>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="jquery.bootstrap.wizard.js"></script>
      <script src="prettify.js"></script>
      <script>
        $(document).ready(function() {
        $('#rootwizard').bootstrapWizard();
        window.prettyPrint && prettyPrint()
        });
      </script>

  </body>

</html>
