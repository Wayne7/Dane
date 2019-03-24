
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  	<link rel="stylesheet" type="text/css" href="css/main.css"/>

    <!-- Kalendář -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/themes/base/jquery-ui.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
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
            <li class="nav-item"><button type="button" id="download" class="buttonMenu">
              <i class="fa fa-download" aria-hidden="true"></i>&nbsp Uložit přiznání</button></li>
            <li class="nav-item"><button type="button" class="buttonMenu" onclick="$('#ulozit').slideDown();">
              <i class="fa fa-upload" aria-hidden="true"></i>&nbsp Nahrát z PC</button></li>
                <div id="ulozit" class="none" style="margin-top:10px;"><hr>
                  <input id="upload" type="file">
                </div>
          </ul>
        </div>
      </div>
    </nav>

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>

<script type="text/javascript">
$(function() {
  $('.my_features').on("change",function() {
    $('#'+$(this).attr('data-name')).toggle(this.checked); // toggle instead
  }).change(); // trigger the change
});
</script>

<script>
$(document).ready(function(){
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });
});
</script>

<script>
$(document).ready(function() {
    $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
    var $current = index+1;
    var $percent = ($current/$total) * 100;
    $('#rootwizard .progress-bar').css({width:$percent+'%'});
  }});
});
</script>

<!-- Funkce formulář -->
<script type="text/javascript" src="js/info.js"></script>
<script type="text/javascript" src="js/sazba.js"></script>
<script type="text/javascript" src="js/ostatni.js"></script>
<script type="text/javascript" src="js/clear.js"></script>
<script type="text/javascript" src="js/ucetnictvi.js"></script>
<script type="text/javascript" src="js/najem.js"></script>
<script type="text/javascript" src="js/form.js"></script>

<script>
  vydaje_procenta1();
  vydaje_procenta2();
  vydaje_procenta1_2();
  vydaje_procenta2_2();
  vydaje_procenta1_3();
  vydaje_procenta2_3();
  vydaje_procenta1_4();
  vydaje_procenta2_4();
  ostatni_procenta1();
  clear_sazba_cinnost2();
  clear_sazba_cinnost3();
  clear_sazba_cinnost4();
  clear_evidence_cinnost2();
  clear_evidence_cinnost3();
  clear_evidence_cinnost4();
  clear_najem1();
  clear_najem2();
  clear_ostatni2();
  clear_ostatni3();
  clear_ostatni4();
  uzemni_pracoviste();
  celkem_prijmy();
  celkem_vydaje();
  celkem_vydaje_ostatni();
  celkem_prijmy_ostatni();
  rozdil_prijmy_vydaje2();
  rozdil_prijmy_vydaje_ostatni();
  najem_procenta();
  celkova_dan();
</script>


	<div class="wrapper">

      <div class="container">
		      <div class="color card-2" style="background-color: #fff;">

            <div id="rootwizard">
               <div class="navbar">
                  <ul class="nav nav-pills" style="background-color: #efefef;">
                    <li class="vypocet"><a href="#tab1" data-toggle="tab">1</a></li><li class="vypocet"><a href="#tab2" data-toggle="tab">2</a></li><li class="vypocet"><a href="#tab3" data-toggle="tab">3</a></li>
                    <li class="vypocet"><a href="#tab4" data-toggle="tab">4</a></li><li class="vypocet"><a href="#tab5" data-toggle="tab">5</a></li><li class="vypocet"><a href="#tab6" data-toggle="tab">6</a></li>
                    <li class="vypocet"><a href="#tab7" data-toggle="tab">7</a></li><li class="vypocet"><a href="#tab8" data-toggle="tab">8</a></li><li class="vypocet"><a href="#tab9" data-toggle="tab">9</a></li>
                    <li class="vypocet"><a href="#tab10" data-toggle="tab">10</a></li><li class="vypocet"><a href="#tab11" data-toggle="tab">11</a></li><li class="vypocet"><a href="#tab12" data-toggle="tab">12</a></li>
                    <li class="vypocet"><a href="#tab13" data-toggle="tab">13</a></li><li class="vypocet"><a href="#tab14" data-toggle="tab">14</a></li><li class="vypocet"><a href="#tab15" data-toggle="tab">15</a></li>
                    <li class="vypocet"><a href="#tab16" data-toggle="tab">16</a></li><li class="vypocet"><a href="#tab17" data-toggle="tab">17</a></li><li class="vypocet"><a href="#tab18" data-toggle="tab">18</a></li>
                    <li class="vypocet"><a href="#tab19" data-toggle="tab">19</a></li><li class="vypocet"><a href="#tab20" data-toggle="tab">20</a></li><li class="vypocet"><a href="#tab21" data-toggle="tab">21</a></li>
                  </ul>
                </div>

                <div id="bar" class="progress">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>

                <form id="csvForm">
                    <div class="tab-content">

                      <!-- PŘÍJMY -->
                      <div class="tab-pane" id="tab1">
		<h3 class="otazka">Uplatňuji výdaje jako procento z příjmů <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Uplatnění výdajů" data-content="
Poplatník v tomto případě neuplatňujete skutečné výdaje, díky čemuž je v průběhu roku nemusí sledovat. Výdaje se počítají jako určité procento z příjmů. Kromě příjmů je tedy nutné vybrat sazbu výdajů, kde jsou na výběr čtyři možnosti."><i class="fas fa-question-circle"></i></a></h3><br>

		<div class="vyber">
			<label class="buttonRadio">
				<input type="radio" name="radio1" value="0" data-id="div1" class="my_features" autocomplete="off" style="visibility:hidden;"/>ANO
			</label>
			<label class="buttonRadio">
				<input type="radio" name="radio1" value="0" data-id="div0" class="my_features" autocomplete="off" style="visibility:hidden;"/>NE
			</label>
		</div>
		<br><hr>

			<!-- SAZBA -->
<div id="div0" class="none">

    <div class="form-group">
      <label>Sazba výdajů <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Sazba výdajů" data-content="<b>30%</b> - nejvýše 300 000 Kč za rok, příjmy z pronájmu a příjmy z nájmu majetku zařazeného v obchodním majetku <br> <b>40%</b> - nejvýše 400 000 Kč za rok, příjmy ze samostatné činnosti, s výjimkou příjmů společníka veřejné obchodní společnosti a komplementáře komanditní společnosti a příjmů autora <br><b>60%</b> - nejvýše 600 000 Kč za rok, příjmy z živností volných, vázaných i koncesovaných<br><b>80%</b> - nejvýše 800 000 Kč za rok, příjmy ze zemědělské výroby, lesního a vodního hospodářství a z příjmů z živnostenského podnikání řemeslného;"><i class="fas fa-question-circle"></i></a></label>
      <select class="form-control" name="sazba" id="sazba">
        <option selected="selected" value="" required="required">Vyberte sazbu...</option>
        <option value="30">30%</option>
        <option value="40">40%</option>
        <option value="60">60%</option>
        <option value="80">80%</option>
      </select>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Příjmy <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
        <input placeholder="Vaše příjmy..." name="prijmySazba" id="prijmySazba" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
       </div>

      <div class="form-group col-md-4">
        <label>Výdaje <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Výdaje" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
        <input placeholder="Vaše výdaje..." name="vydajeSazba" id="vydajeSazba" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" disabled>
      </div>
      <div class="form-group col-md-4">
        <label>Zaplacené zálohy na daň</label>
        <input placeholder="Vaše výdaje..."  id="zalohySazba" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
      </div>
    </div>
      <div class="form-group">
        <label>Název činnosti <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Činnost" data-content=""><i class="fas fa-question-circle"></i></a></label>
        <small class="form-text text-muted">Vaši činnost si můžete vyhledat <a href="http://apl.czso.cz/irsw/" target="_blank">zde</a>.</small>
        <input placeholder="Název vaší činnosti..." name="cinnostSazba" id="cinnostSazba" class="form-control" required="required" type="text">
      </div>
        <!-- 2.činnost -->
        <button id="pridat1" class="btn btn-outline-danger" onclick="$('#cinnost2').slideDown();">+ Přidat činnost</button>
          <div id="cinnost2" class="none">
            <hr><button id="odebrat2" class="btn btn-outline-danger" onclick="$('#cinnost2').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
              <h2>2.činnost</h2>
              <div class="form-group">
                <label>Sazba výdajů <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Sazba výdajů" data-content="<b>30%</b> - nejvýše 300 000 Kč za rok, příjmy z pronájmu a příjmy z nájmu majetku zařazeného v obchodním majetku <br> <b>40%</b> - nejvýše 400 000 Kč za rok, příjmy ze samostatné činnosti, s výjimkou příjmů společníka veřejné obchodní společnosti a komplementáře komanditní společnosti a příjmů autora <br><b>60%</b> - nejvýše 600 000 Kč za rok, příjmy z živností volných, vázaných i koncesovaných<br><b>80%</b> - nejvýše 800 000 Kč za rok, příjmy ze zemědělské výroby, lesního a vodního hospodářství a z příjmů z živnostenského podnikání řemeslného;"><i class="fas fa-question-circle"></i></a></label>
                <select class="form-control" name="sazba2" id="sazba2">
                  <option selected="selected" value="" required="required"> Vyberte sazbu... </option>
                  <option value="30">30%</option>
                  <option value="40">40%</option>
                  <option value="60">60%</option>
                  <option value="80">80%</option>
                </select>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Příjmy <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
                  <input placeholder="Vaše příjmy..." name="prijmySazba2" id="prijmySazba2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                 </div>

                <div class="form-group col-md-6">
                  <label>Výdaje <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Výdaje" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
                  <input placeholder="Vaše výdaje..." name="vydajeSazba2" id="vydajeSazba2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" disabled>
                </div>
              </div>
                <div class="form-group">
                  <label>Název činnosti <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Činnost" data-content=""><i class="fas fa-question-circle"></i></a></label>
                  <small class="form-text text-muted">Vaši činnost si můžete vyhledat <a href="http://apl.czso.cz/irsw/" target="_blank">zde</a>.</small>
                  <input placeholder="Název vaší činnosti..." name="cinnostSazba2" id="cinnostSazba2" class="form-control" required="required">
                </div>
              <button class="btn btn-outline-danger" onclick="$('#cinnost3').slideDown();">+ Přidat činnost</button>
          </div>

          <!-- 3.činnost -->
          <div id="cinnost3" class="none" style="margin-top:10px;"><hr>
            <button id="odebrat3" class="btn btn-outline-danger" onclick="$('#cinnost3').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
                <h2>3.činnost</h2>
                <div class="form-group">
                  <label>Sazba výdajů <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Sazba výdajů" data-content="<b>30%</b> - nejvýše 300 000 Kč za rok, příjmy z pronájmu a příjmy z nájmu majetku zařazeného v obchodním majetku <br> <b>40%</b> - nejvýše 400 000 Kč za rok, příjmy ze samostatné činnosti, s výjimkou příjmů společníka veřejné obchodní společnosti a komplementáře komanditní společnosti a příjmů autora <br><b>60%</b> - nejvýše 600 000 Kč za rok, příjmy z živností volných, vázaných i koncesovaných<br><b>80%</b> - nejvýše 800 000 Kč za rok, příjmy ze zemědělské výroby, lesního a vodního hospodářství a z příjmů z živnostenského podnikání řemeslného;"><i class="fas fa-question-circle"></i></a></label>
                  <select class="form-control" name="sazba3" id="sazba3" required="required">
                    <option selected="selected" value=""> Vyberte sazbu... </option>
                    <option value="30">30%</option>
                    <option value="40">40%</option>
                    <option value="60">60%</option>
                    <option value="80">80%</option>
                  </select>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Příjmy <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
                    <input placeholder="Vaše příjmy..." name="prijmySazba3" id="prijmySazba3" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
                   </div>

                  <div class="form-group col-md-6">
                    <label>Výdaje <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Výdaje" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
                    <input placeholder="Vaše výdaje..." name="vydajeSazba3" id="vydajeSazba3" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" disabled>
                  </div>
                </div>
                  <div class="form-group">
                    <label>Název činnosti <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Činnost" data-content=""><i class="fas fa-question-circle"></i></a></label>
                    <small class="form-text text-muted">Vaši činnost si můžete vyhledat <a href="http://apl.czso.cz/irsw/" target="_blank">zde</a>.</small>
                    <input placeholder="Název vaší činnosti..." name="cinnostSazba3" id="cinnostSazba3" class="form-control" required="required">
                  </div>
                <button class="btn btn-outline-danger" onclick="$('#cinnost4').slideDown();">+ Přidat činnost</button>
            </div>

            <!-- 4.činnost -->
            <div id="cinnost4" class="none" style="margin-top:10px;"><hr>
              <button id="odebrat4" class="btn btn-outline-danger" onclick="$('#cinnost4').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
                  <h2>4.činnost</h2>
                  <div class="form-group">
                    <label>Sazba výdajů <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Sazba výdajů" data-content="<b>30%</b> - nejvýše 300 000 Kč za rok, příjmy z pronájmu a příjmy z nájmu majetku zařazeného v obchodním majetku <br> <b>40%</b> - nejvýše 400 000 Kč za rok, příjmy ze samostatné činnosti, s výjimkou příjmů společníka veřejné obchodní společnosti a komplementáře komanditní společnosti a příjmů autora <br><b>60%</b> - nejvýše 600 000 Kč za rok, příjmy z živností volných, vázaných i koncesovaných<br><b>80%</b> - nejvýše 800 000 Kč za rok, příjmy ze zemědělské výroby, lesního a vodního hospodářství a z příjmů z živnostenského podnikání řemeslného;"><i class="fas fa-question-circle"></i></a></label>
                    <select class="form-control" name="sazba4" id="sazba4" required="required">
                      <option selected="selected" value=""> Vyberte sazbu... </option>
                      <option value="30">30%</option>
                      <option value="40">40%</option>
                      <option value="60">60%</option>
                      <option value="80">80%</option>
                    </select>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Příjmy <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
                      <input placeholder="Vaše příjmy..." name="prijmySazba4" id="prijmySazba4" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
                     </div>

                    <div class="form-group col-md-6">
                      <label>Výdaje <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Výdaje" data-content="Prosím uvádějte částky v celých Kč."><i class="fas fa-question-circle"></i></a></label>
                      <input placeholder="Vaše výdaje..." name="vydajeSazba4" id="vydajeSazba4" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Název činnosti <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Činnost" data-content=""><i class="fas fa-question-circle"></i></a></label>
                    <input placeholder="Název vaší činnosti..." name="cinnostSazba4" id="cinnostSazba4" class="form-control" required="required">
                  </div>
              </div>
</div>

			<div id="div1" class="none">

				<div class="custom-control custom-radio hightlight">
				  <input type="radio" class="my_features" data-id="div3" name="radio2" autocomplete="off">
				  <label for="evidence"><span style="margin-left:15px;">Vedu daňovou evidenci</span></label>
				</div>

				<!-- EVIDENCE -->
<div id="div2" class="none"><br>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Příjmy</label>
      <input placeholder="Vaše příjmy..." name="prijmyEvidence" id="prijmyEvidence" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
     </div>

    <div class="form-group col-md-6">
      <label>Výdaje</label>
      <input placeholder="Vaše výdaje..." name="vydajeEvidence" id="vydajeEvidence" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
    </div>

    <div class="form-group col-md-6">
      <label>Zaplacené zálohy na daň</label>
      <input placeholder="Vaše výdaje..."  id="zalohyEvidence" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
    </div>

    <div class="form-group col-md-6">
      <label>Název činnosti</label>
      <input placeholder="Název vaší činnosti..." name="cinnostEvidence" id="cinnostEvidence" class="form-control" type="text" required="required">
    </div>
  </div>

  <!-- 2.činnost -->
  <button id="pridat1" class="btn btn-outline-danger" onclick="$('#cinnost_evidence2').slideDown();">+ Přidat činnost</button>
    <div id="cinnost_evidence2" class="none"><hr>
      <button id="odebrat_evidence2" class="btn btn-outline-danger" onclick="$('#cinnost_evidence2').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
        <h2>2.činnost</h2>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Příjmy</label>
            <input placeholder="Vaše příjmy..." name="prijmyEvidence2" id="prijmyEvidence2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
           </div>

          <div class="form-group col-md-4">
            <label>Výdaje</label>
            <input placeholder="Vaše výdaje..." name="vydajeEvidence2" id="vydajeEvidence2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
          </div>
          <div class="form-group col-md-4">
            <label>Název činnosti</label>
            <input placeholder="Název vaší činnosti..." name="cinnostEvidence2" id="cinnostEvidence2" class="form-control" required="required" type="text">
          </div>
        </div>
        <button class="btn btn-outline-danger" onclick="$('#cinnost_evidence3').slideDown();">+ Přidat činnost</button>
    </div>


    <!-- 3.činnost -->
      <div id="cinnost_evidence3" class="none"><hr>
        <button id="odebrat_evidence3" class="btn btn-outline-danger" onclick="$('#cinnost_evidence3').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
          <h2>3.činnost</h2>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Příjmy</label>
              <input placeholder="Vaše příjmy..." name="prijmyEvidence3" id="prijmyEvidence3" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
             </div>

            <div class="form-group col-md-4">
              <label>Výdaje</label>
              <input placeholder="Vaše výdaje..." name="vydajeEvidence3" id="vydajeEvidence3" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
            </div>

            <div class="form-group col-md-4">
              <label>Název činnosti</label>
              <input placeholder="Název vaší činnosti..." name="cinnostEvidence3" id="cinnostEvidence3" class="form-control" type="text" required="required">
            </div>
          </div>
          <button class="btn btn-outline-danger" onclick="$('#cinnost_evidence4').slideDown();">+ Přidat činnost</button>
      </div>

      <!-- 4.činnost -->
        <div id="cinnost_evidence4" class="none"><hr>
          <button id="odebrat_evidence3" class="btn btn-outline-danger" onclick="$('#cinnost_evidence4').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
            <h2>4.činnost</h2>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label>Příjmy</label>
                <input placeholder="Vaše příjmy..." name="prijmyEvidence3" id="prijmyEvidence4" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
               </div>

              <div class="form-group col-md-4">
                <label>Výdaje</label>
                <input placeholder="Vaše výdaje..." name="vydajeEvidence3" id="vydajeEvidence4" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
              </div>
            <div class="form-group col-md-4">
              <label>Název činnosti</label>
              <input placeholder="Název vaší činnosti..." name="cinnostEvidence3" id="cinnostEvidence4" class="form-control" type="text" required="required">
            </div>
            </div>
        </div>

        <hr>
        <h4>Tabulka pro daňovou evidenci</h4> <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Tabulka pro daňovou evidenci" data-content="Tabulka je určena podnikatelům, kteří vedou daňovou evidenci. K vyplnění kolonek na této straně tedy slouží jako podklad například peněžní deník a jiné účetní dokumenty."><i class="fas fa-question-circle"></i></a>
        <small class="form-text text-muted">Podnikatelé, kteří vedou daňovou evidenci vyplňují tabulku obsahující informace o majetku podniku, o cizích zdrojích krytí majetku a úhrn mezd.</small><br>
        <table id="tabulka" class="table table-sm table-light table-striped">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Na začátku zdaňovacího období</th>
              <th scope="col">Na konci zdaňovacího období</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">&nbsp 1. Hmotný majetek
              <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Hmotný majetek" data-content="Majetek, který měl pořizovací cenu vyšší než 40 tis. Kč a který se odepisuje (evidence dlouhodobého majetku – inventární karty)."><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="hmotnyMajetekPred" id="hmotnyMajetekPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="hmotnyMajetekPo" id="hmotnyMajetekPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 2. Peněžní prostředky v hotovosti
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Peněžní prostředky v hotovosti" data-content="Nepovinná položka"><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="vHotovostiPred" id="vHotovostiPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="vHotovostiPo" id="vHotovostiPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 3. Peněžní prostředky na bankovních účtech
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Peněžní prostředky na bankovních účtech" data-content="Nepovinná položka"><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="naUctuPred" id="naUctuPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="naUctuPo" id="naUctuPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 4. Zásoby
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Zásoby" data-content="Věci, které jsou nakoupeny, ale ještě nebyly použity pro podnikání (skladová evidence – skladní karty)."><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="zasobyPred" id="zasobyPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="zasobyPo" id="zasobyPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 5. Pohledávky včetně poskytnutých úvěrů a zápůjček
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Pohledávky včetně poskytnutých úvěrů a zápůjček" data-content="Vznikají v případě, že někdo odebíral zboží nebo služby, ale zatím nezaplatil. Může se jednat i o zapůjčené peníze (kniha pohledávek)."><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="pohledavkyPred" id="pohledavkyPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="pohledavkyPo" id="pohledavkyPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 6. Ostatní majetek
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Ostatní majetek" data-content="Nepovinná položka"><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="ostatniMajetekPred" id="ostatniMajetekPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="ostatniMajetekPo" id="ostatniMajetekPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 7. Dluhy včetně přijatých úvěrů a zápůjček
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Dluhy včetně přijatých úvěrů a zápůjček" data-content="<b>30%</b> - příjmy z pronájmu a příjmy z nájmu majetku zařazeného v obchodním majetku <br> <b>40%</b> - příjmy ze samostatné činnosti, s výjimkou příjmů společníka veřejné obchodní společnosti a komplementáře komanditní společnosti a příjmů autora <br><b>60%</b> - příjmy z živností volných, vázaných i koncesovaných<br><b>80%</b> - příjmy ze zemědělské výroby, lesního a vodního hospodářství a z příjmů z živnostenského podnikání řemeslného;"><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="dluhyPred" id="dluhyPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="dluhyPo" id="dluhyPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 8. Rezervy
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Rezervy" data-content="Tvoří se na budoucí opravy majetku (pomocná evidence k rezervám)"><i class="fas fa-question-circle"></i></a>
              </th>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="rezervyPred" id="rezervyPred" class="form-control form-control-sm"></td>
              <td><input placeholder="Prosím uveďte částku v celých Kč..." name="rezervyPo" id="rezervyPo" class="form-control form-control-sm"></td>
            </tr>
            <tr>
              <th scope="row">&nbsp 9. Mzdy
                <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Mzdy" data-content="Úhrn hrubých příjmů všech zaměstnanců."><i class="fas fa-question-circle"></i></a>
              </th>
              <td colspan="2"><input placeholder="Prosím uveďte částku v celých Kč..." name="mzdy" id="mzdy" class="form-control form-control-sm"></td>
            </tr>
          </tbody>
        </table>

<br><br>

</div>

				<div class="custom-control custom-radio hightlight">
					<input type="radio" class="my_features" data-id="div2" name="radio2" autocomplete="off">
					<label for="ucetnictvi"><span style="margin-left:15px;">Vedu účetnictví</span></label>
				</div><br>

				<!-- ÚČETNICTVÍ -->
  <div id="div3" class="none">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Příjmy</label>
        <input placeholder="Vaše příjmy..." name="prijmyUcet" id="prijmyUcet" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
       </div>

      <div class="form-group col-md-6">
        <label>Zaplacené zálohy na daň</label>
        <input placeholder="Vaše výdaje..." name="vydajeUcet" id="zalohyUcet" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required="required">
      </div>
    </div>

    <div class="form-group">
      <label>Název činnosti</label>
      <small class="form-text text-muted">Vaši činnost si můžete vyhledat <a href="http://apl.czso.cz/irsw/" target="_blank">zde</a>.</small>
      <input placeholder="Název vaší činnosti..." name="cinnostUcet" id="cinnostUcet" class="form-control">
    </div>
  <br><br>

  </div>
			</div>

	</div>
                      <div class="tab-pane" id="tab2">
  <h3 class="otazka">Zahájil, přerušil, ukončila či obnovil jsem v letoším roce podnikaní<a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Údaje o samostatné činnosti" data-content="
Vyplňujte údaje pouze tehdy, pokud jste v roce 2018 zahájil(a), přerušil(a), ukončila(a) či obnovil(a) své podnikání <br>
<b>Pište prosím datum změny. Například: 1.1.2018</b>"><i class="fas fa-question-circle"></i></a>  </h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div8').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div8" class="none">
      <!-- Údaje o samostatné činnosti -->
      <div class="form-row">
        <div class="form-group col-md-3 date">
          <input placeholder="Datum zahájení činnosti..." id="datumZahajeniCinnosti" class="datepicker form-control"/>
         </div>

        <div class="form-group col-md-3">
          <input placeholder="Datum přerušení činnosti..." id="datumPreruseniCinnosti" class="datepicker form-control">
        </div>

        <div class="form-group col-md-3">
          <input placeholder="Datum ukončení činnosti..." id="datumUkonceniCinnosti" class="datepicker form-control">
        </div>

        <div class="form-group col-md-3">
          <input placeholder="Datum obnovení činnosti..." id="datumObnoveniCinnosti" class="datepicker form-control">
        </div>
      </div>

    </div>

</div>
                      <div class="tab-pane" id="tab3">
  <h3 class="otazka">Počet měsíců, po které trvala v uplynulém roce má činnost <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Uplatnění výdajů" data-content="
Poplatník v tomto případě neuplatňujete skutečné výdaje, díky čemuž je v průběhu roku nemusí sledovat. Výdaje se počítají jako určité procento z příjmů. Kromě příjmů je tedy nutné vybrat sazbu výdajů, kde jsou na výběr čtyři možnosti."><i class="fas fa-question-circle"></i></a></h3><br>

  <div class="vyber">
    <div class="form-group">
      <select class="form-control form-control-lg" name="pocetMesicuCinnosti" id="pocetMesicuCinnosti" required="required">
        <option selected="selected" value="">Počet měsíců činnosti...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </div>
  </div>
  <br><hr>

</div>
                      <div class="tab-pane" id="tab4">
  <h3 class="otazka">Byl jsem v letošním roce zaměstnán</h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div9').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div9" class="none">

      <div class="form-group">
        <label>Typ pracovního úvazku
          <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Typ pracovního úvazku" data-content="
          <b>Pracovní poměr</b> -  <br>
          <b>Dohoda o pracovní činnosti</b> - <br>
          <b>Dohoda o provedené práce</b> - "><i class="fas fa-question-circle"></i></a></label>
        <select class="form-control" name="typPracPomeru" id="typPracPomeru">
          <option selected="selected" value="" required="required">Vyberte typ pracovního úvazku...</option>
          <option value="PP">Pracovní poměr</option>
          <option value="DPC">Dohoda o pracovní činnosti</option>
          <option value="DPP">Dohoda o provedené práce</option>
        </select>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Celkový hrubý příjem <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Celkový hrubý příjem" data-content="
            Prosím uvádějte částky v celých Kč.">
            <i class="fas fa-question-circle"></i></a></label>
          <input placeholder="Celkový hrubý příjem..." name="hrubyPrijemPP" id="hrubyPrijemPP" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
         </div>

        <div class="form-group col-md-6">
          <label>Celková sražená záloha na daň <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Celková sražená záloha na daň" data-content="
            Prosím uvádějte částky v celých Kč.">
            <i class="fas fa-question-circle"></i></a></label>
          <input placeholder="Celková sražená záloha na daň..." name="zalohaNaDanPP" id="zalohaNaDanPP" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        </div>

        <div class="form-group col-md-6">
          <label>Daňový bonus <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Daňový bonus" data-content="
            Prosím uvádějte částky v celých Kč.">
            <i class="fas fa-question-circle"></i></a></label>
          <input placeholder="Daňový bonus..." name="danovyBonusPP" id="danovyBonusPP" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        </div>

        <div class="form-group col-md-6">
          <label>Pojištění placené zaměstnavatelem <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Pojištění placené zaměstnavatelem" data-content="
            Prosím uvádějte částky v celých Kč.">
            <i class="fas fa-question-circle"></i></a></label>
          <input placeholder="Pojištění placené zaměstnavatelem..." name="pojisteniPP" id="pojisteniPP" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        </div>
      </div>

    </div>

</div>
                      <div class="tab-pane" id="tab5">
  <h3 class="otazka">Měl jsem v letošním roce příjmy z nájmu <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy z nájmu" data-content="
Poplatník může mít kromě podnikání či zaměstatní také jiné zdroje příjmu. V případě nájmu je nutno uvést <b>celkové příjmy z nájmu,
příjem pouze z nájmu nemovitých věcí (tato hodnota musí být menší nebo shodná s celkovým příjmem z nájmu),
celkové výdaje na nájem a zaplacené zálohy na daň.</b>"><i class="fas fa-question-circle"></i></a></h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div10').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div10" class="none">
      <label>Chci uplatnit výdaje pocentem z příjmu <a class="napoveda" tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Typ pracovního úvazku" data-content="Příjmy z nájmu můžete snížit o skutečné nebo paušální výdaje ve výši 30 % z příjmů z nájmu. Použití paušálních výdajů je výhodnější, pokud jsou skutečné výdaje nižší než paušální nebo pokud skutečné výdaje neevidujete. <br> Skutečné výdaje mohou zahrnovat: výdaje na opravu a údržbu, pojištění, zaplacenou daň z nemovitých věcí, odpisy, úroky z úvěru použitého na získání nemovitosti atd."><i class="fas fa-question-circle"></i></a></label><br>

      <div class="custom-control custom-radio hightlight">
        <input type="radio" class="my_features" data-id="div4" name="radio2" autocomplete="off">
        <label for="evidence"><span style="margin-left:15px;">ANO</span></label>
      </div>

            <div id="div5" class="none">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Celkové příjmy z nájmu<a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Celkové příjmy z nájmu" data-content="
                    Prosím uvádějte částky v celých Kč.">
                    <i class="fas fa-question-circle"></i></a></label>
                  <input placeholder="Celkový hrubý příjem..." id="prijmyZnajmu1" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                 </div>

                <div class="form-group col-md-6">
                  <label>Příjmy z nájmu nemovitých věcí<a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy z nájmu nemovitých věcí" data-content="
                    Prosím uvádějte částky v celých Kč.">
                    <i class="fas fa-question-circle"></i></a></label>
                  <input placeholder="Celkové příjmy z nájmu..." id="prijmyZnajmuNemovitychVeci1" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                </div>

                <div class="form-group col-md-6">
                  <label>Celkové výdaje na nájem <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Skutečné výdaje na nájem" data-content="
                    Prosím uvádějte částky v celých Kč.">
                    <i class="fas fa-question-circle"></i></a></label>
                  <input placeholder="Skutečné výdaje na nájem..." id="vydajeNaNajem1" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" disabled>
                </div>

                <div class="form-group col-md-6">
                  <label>Zaplacené zálohy na daň<a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Zaplacené zálohy na daň" data-content="
                    Prosím uvádějte částky v celých Kč.">
                    <i class="fas fa-question-circle"></i></a></label>
                  <input placeholder="Zaplacené zálohy na daň..." id="zaplaceneZalohyNajem1" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                </div>
              </div>
            </div>


      <div class="custom-control custom-radio hightlight">
        <input type="radio" class="my_features" data-id="div5" name="radio2" autocomplete="off">
        <label for="evidence"><span style="margin-left:15px;">NE</span></label>
      </div>

        <div id="div4" class="none">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Celkové příjmy z nájmu<a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Celkové příjmy z nájmu" data-content="
                Prosím uvádějte částky v celých Kč.">
                <i class="fas fa-question-circle"></i></a></label>
              <input placeholder="Celkový hrubý příjem..." id="prijmyZnajmu2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
             </div>

            <div class="form-group col-md-6">
              <label>Příjmy z nájmu nemovitých věcí<a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Příjmy z nájmu nemovitých věcí" data-content="
                Prosím uvádějte částky v celých Kč.">
                <i class="fas fa-question-circle"></i></a></label>
              <input placeholder="Celkové příjmy z nájmu..." id="prijmyZnajmuNemovitychVeci2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
            </div>

            <div class="form-group col-md-6">
              <label>Skutečné výdaje na nájem <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Skutečné výdaje na nájem" data-content="
                Prosím uvádějte částky v celých Kč.">
                <i class="fas fa-question-circle"></i></a></label>
              <input placeholder="Skutečné výdaje na nájem..." id="vydajeNaNajem2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
            </div>

            <div class="form-group col-md-6">
              <label>Zaplacené zálohy na daň<a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Zaplacené zálohy na daň" data-content="
                Prosím uvádějte částky v celých Kč.">
                <i class="fas fa-question-circle"></i></a></label>
              <input placeholder="Zaplacené zálohy na daň..." id="zaplaceneZalohyNajem2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
            </div>
          </div>
        </div>


    </div>

</div>
                      <div class="tab-pane" id="tab6">
  <h3 class="otazka">Měl jsem v letošním roce příjmy z kapitálového majetku</h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div10_1').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div10_1" class="none">
      <div class="form-group">
        <label>Příjmy z kapitálového majetku </label>
        <input placeholder="Vaše příjmy..." id="kapitalMajetekPrijem" class="form-control form-control-lg" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
       </div>
    </div>

</div>
                      <div class="tab-pane" id="tab7">
  <h3 class="otazka">Měl jsem v letošním roce jiné příjmy</h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div11').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div11" class="none">

      <div class="form-group">
        <label>Zdroj příjmu</label>
        <select class="form-control" name="zdrojPrijmuOstatni" id="zdrojPrijmu" onchange="show_KU()">
          <option selected="selected" value="" required="required">Vyberte o jaký typ příjmu se jedná...</option>
          <option value="A – příležitostná činnost">A – příležitostná činnost</option>
          <option value="B – prodej nemovitostí">B – prodej nemovitostí</option>
          <option value="C – prodej movitých věcí">C – prodej movitých věcí</option>
          <option value="E – příjmy z převodu podle § 10 odst. 1, písm.">E – příjmy z převodu</option>
          <option value="F – jiné ostatní příjmy">F – jiné ostatní příjmy</option>
          <option value="G – bezúplatné příjmy">G – bezúplatné příjmy</option>
        </select>
      </div>

      <div class="form-group">
        <label>Kód </label>
        <select class="form-control" name="kodOstatni" id="kodOstatni">
          <option selected="selected" value="">Vyberte kód...</option>
          <option value="p">Příjmy ze zemědělské výroby</option>
          <option value="s">Příjmy plynoucí z majetku, který je ve společném jmění manželů</option>
          <option value="z">Příjmy plynoucí ze zdrojů v zahraničí</option>
          <option value="n">Bezúplatný příjem (a zároveň jde o nemovitost)</option>
          <option value="">Žádná z uvedených možností</option>
        </select>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label>Příjmy </label>
          <input placeholder="Vaše příjmy..." id="prijmyOstatni" class="form-control" type="text" onkeyup="ostatni_procenta1()" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
         </div>

        <div class="form-group col-md-4">
          <label>Výdaje </label>
          <input placeholder="Vaše výdaje..." id="vydajeOstatni" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
        </div>
        <div class="form-group col-md-4 none" id="KU">
          <label>Číslo rozhodnutí KÚ </label>
          <input placeholder="Číslo rozhodnutí KÚ..." id="cisloRozhodnutiKU" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
        </div>
      </div>

      <!-- 2.příjem -->
      <button id="pridat1" class="btn btn-outline-danger" onclick="$('#ostatni2').slideDown();">+ Přidat činnost</button>
        <div id="ostatni2" class="none">
          <hr><button id="odebratOstatni2" class="btn btn-outline-danger" onclick="$('#ostatni2').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
            <h2>2.příjem</h2>
              <div class="form-group">
                <label>Zdroj příjmu </label>
                <select class="form-control" name="zdrojPrijmuOstatni2" id="zdrojPrijmu2" onchange="show_KU2()">
                  <option selected="selected" value="" required="required">Vyberte o jaký typ příjmu se jedná...</option>
                  <option value="A – příležitostná činnost">A – příležitostná činnost</option>
                  <option value="B – prodej nemovitostí">B – prodej nemovitostí</option>
                  <option value="C – prodej movitých věcí">C – prodej movitých věcí</option>
                  <option value="E – příjmy z převodu podle § 10 odst. 1, písm.">E – příjmy z převodu</option>
                  <option value="F – jiné ostatní příjmy">F – jiné ostatní příjmy</option>
                  <option value="G – bezúplatné příjmy">G – bezúplatné příjmy</option>
                </select>
              </div>

              <div class="form-group">
                <label>Kód </label>
                <select class="form-control" name="kodOstatni2" id="kodOstatni2">
                  <option selected="selected" value="">Vyberte kód...</option>
                  <option value="p">Příjmy ze zemědělské výroby</option>
                  <option value="s">Příjmy plynoucí z majetku, který je ve společném jmění manželů</option>
                  <option value="z">Příjmy plynoucí ze zdrojů v zahraničí</option>
                  <option value="n">Bezúplatný příjem (a zároveň jde o nemovitost)</option>
                  <option value="">Žádná z uvedených možností</option>
                </select>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Příjmy</label>
                  <input placeholder="Vaše příjmy..." id="prijmyOstatni2" class="form-control" type="text" onkeyup="ostatni_procenta2()" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                 </div>

                <div class="form-group col-md-4">
                  <label>Výdaje</label>
                  <input placeholder="Vaše výdaje..." id="vydajeOstatni2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                </div>
                <div class="form-group col-md-4 none" id="KU2">
                  <label>Číslo rozhodnutí KÚ </label>
                  <input placeholder="Číslo rozhodnutí KÚ..." id="cisloRozhodnutiKU2" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                </div>
              </div>
            <button id="pridat2" class="btn btn-outline-danger" onclick="$('#ostatni3').slideDown();">+ Přidat činnost</button>
          </div>

            <!-- 3.příjem -->
            <div id="ostatni3" class="none">
              <hr><button id="odebratOstatni3" class="btn btn-outline-danger" onclick="$('#ostatni3').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
                <h2>3.příjem</h2>
                  <div class="form-group">
                    <label>Zdroj příjmu</label>
                    <select class="form-control" name="zdrojPrijmuOstatni3" id="zdrojPrijmu3" onchange="show_KU3()">
                      <option selected="selected" value="" required="required">Vyberte o jaký typ příjmu se jedná...</option>
                      <option value="A – příležitostná činnost">A – příležitostná činnost</option>
                      <option value="B – prodej nemovitostí">B – prodej nemovitostí</option>
                      <option value="C – prodej movitých věcí">C – prodej movitých věcí</option>
                      <option value="E – příjmy z převodu podle § 10 odst. 1, písm.">E – příjmy z převodu</option>
                      <option value="F – jiné ostatní příjmy">F – jiné ostatní příjmy</option>
                      <option value="G – bezúplatné příjmy">G – bezúplatné příjmy</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Kód</label>
                    <select class="form-control" name="kodOstatni3" id="kodOstatni3">
                      <option selected="selected" value="">Vyberte kód...</option>
                      <option value="p">Příjmy ze zemědělské výroby</option>
                      <option value="s">Příjmy plynoucí z majetku, který je ve společném jmění manželů</option>
                      <option value="z">Příjmy plynoucí ze zdrojů v zahraničí</option>
                      <option value="n">Bezúplatný příjem (a zároveň jde o nemovitost)</option>
                      <option value="">Žádná z uvedených možností</option>
                    </select>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label>Příjmy</label>
                      <input placeholder="Vaše příjmy..." id="prijmyOstatni3" class="form-control" type="text" onkeyup="ostatni_procenta3()" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                     </div>

                    <div class="form-group col-md-4">
                      <label>Výdaje</label>
                      <input placeholder="Vaše výdaje..." id="vydajeOstatni3" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                    </div>
                    <div class="form-group col-md-4 none" id="KU3">
                      <label>Číslo rozhodnutí KÚ</label>
                      <input placeholder="Číslo rozhodnutí KÚ..." id="cisloRozhodnutiKU3" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                    </div>
                  </div>
                <button id="pridat3" class="btn btn-outline-danger" onclick="$('#ostatni4').slideDown();">+ Přidat činnost</button>
              </div>

                <!-- 4.příjem -->
                <div id="ostatni4" class="none">
                  <hr><button id="odebratOstatni3" class="btn btn-outline-danger" onclick="$('#ostatni4').slideUp();" style="margin-left: 915px;">- Odebrat činnost</button>
                    <h2>4.příjem</h2>
                      <div class="form-group">
                        <label>Zdroj příjmu</label>
                        <select class="form-control" name="zdrojPrijmuOstatni4" id="zdrojPrijmu4" onchange="show_KU4()">
                          <option selected="selected" value="" required="required">Vyberte o jaký typ příjmu se jedná...</option>
                          <option value="A – příležitostná činnost">A – příležitostná činnost</option>
                          <option value="B – prodej nemovitostí">B – prodej nemovitostí</option>
                          <option value="C – prodej movitých věcí">C – prodej movitých věcí</option>
                          <option value="E – příjmy z převodu podle § 10 odst. 1, písm.">E – příjmy z převodu</option>
                          <option value="F – jiné ostatní příjmy">F – jiné ostatní příjmy</option>
                          <option value="G – bezúplatné příjmy">G – bezúplatné příjmy</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Kód</label>
                        <select class="form-control" name="kodOstatni4" id="kodOstatni4">
                          <option selected="selected" value="">Vyberte kód...</option>
                          <option value="p">Příjmy ze zemědělské výroby</option>
                          <option value="s">Příjmy plynoucí z majetku, který je ve společném jmění manželů</option>
                          <option value="z">Příjmy plynoucí ze zdrojů v zahraničí</option>
                          <option value="n">Bezúplatný příjem (a zároveň jde o nemovitost)</option>
                          <option value="">Žádná z uvedených možností</option>
                        </select>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Příjmy</label>
                          <input placeholder="Vaše příjmy..." id="prijmyOstatni4" class="form-control" type="text" onkeyup="ostatni_procenta4()" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                         </div>

                        <div class="form-group col-md-4">
                          <label>Výdaje</label>
                          <input placeholder="Vaše výdaje..." id="vydajeOstatni4" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                        </div>
                        <div class="form-group col-md-4 none" id="KU4">
                          <label>Číslo rozhodnutí KÚ</label>
                          <input placeholder="Číslo rozhodnutí KÚ..." id="cisloRozhodnutiKU4" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                      </div>
                  </div>
        </div>
</div>
                      <!-- SLEVY -->
                      <div class="tab-pane" id="tab8">
  <h3 class="otazka">Byl jsem v loni ženatý/vdaná a partnerovy příjmy nepřesáhly 68 tisíc Kč
      <a tabindex="0" class="napoveda" data-toggle="popover" data-html="true" data-trigger="focus"  data-placement="top" title="Sleva na manželku/manžela" data-content="
      Zákon umožňuje využít slevu na manželku/manžela žijící s poplatníkem ve společné
      domácnosti. K uplatnění této slevy nesmí příjmy protějšku poplatníka přesáhnout
      hranici 68 000 Kč za rok. Stejně jako v případě slevy na poplatníka, tak i sleva
      na manželku/manžela činí 24 840 Kč. Pokud je manžel/manželka držitelem průkazu
      ZTP/P, zvyšuje se sleva na dvojnásobek. V případě, že manželství netrvalo po celý
      kalendářní rok, sleva za jeden měsíc činí dvanáctinu celkové slevy, tedy 2 070 Kč.
      "><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div12').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div12" class="none">
      <div class="form-group">
        <label>Kolik měsíců trvalo v uplynulém roce manželství?</label>
        <select class="form-control form-control-lg" name="pocetMesicuManzelstvi" id="pocetMesicuManzelstvi" required="required">
          <option value="0">Počet měsíců manželství...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Jméno a příjmení manžela/manželky </label>
          <input placeholder="Uveďte jméno a příjmení manžela/manželky..." id="jmenoAprijemniPartnera" class="form-control form-control-lg" type="text" required>
         </div>

        <div class="form-group col-md-6">
          <label>Rodné číslo manžela/manželky </label>
          <input placeholder="Uveďte rodné číslo manžela/manželky s lomítkem..." id="RCPartnera" class="form-control form-control-lg" type="text" required>
        </div>
      </div>

      <center><button type="button" class="btn btn-outline-danger btn-lg" onclick="$('#div12_1').slideDown();">Můj manžel/manželka je držitelem průkazu ZTP</button><br>

        <div id="div12_1" class="none">
          <div class="form-group"><br>
            <label>Kolik měsíců byl/a v uplynulém roce držetelem průkazu ZTP?</label>
            <select class="form-control form-control-lg" name="pocetMesicuZTPmanzel" id="pocetMesicuZTPmanzel" required="required">
              <option value="0">Počet měsíců manželstí...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
        </div>

    </div>

</div>
                      <div class="tab-pane" id="tab9">
  <h3 style="text-align:center; margin-top:15px;">V domácnosti se mnou žije dítě do 18 let či student do 26 let
      <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Sleva na mateřskou školu" data-content="
      Vyživovaným dítětem je nezletilé dítě, které sdílí s poplatníkem společnou domácnost.
      Jedná se o dítě, které nedovršilo 18 let či případně 26 let a stále se připravuje na své
      další povolání. Od roku 2018 je sleva na první vyživované dítě 15 204 Kč, na druhé
      vyživované dítě pak 19 404 Kč a u třetího a dalších je výše daňového zvýhodnění 24 204 Kč za rok.
      "><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div style="text-align:center;">
      <button type="button" class="buttonRadio" onclick="$('#div15').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div15" class="none">


    </div>

</div>
                      <div class="tab-pane" id="tab10">
  <h3 style="text-align:center; margin-top:15px;">Uplatňuji slevu na invaliditu
      <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Základní a rozšířená sleva na invaliditu" data-content="
      Pokud poplatní pobírá invalidní důchod po invaliditu prvního nebo druhého stupně,
      může uplatnit základní slevu na invaliditu ve výši 2 520 Kč ročně. Do rozšířené slevy
      na invaliditu pak spadá invaliditu třetího stupně, která činí 5 040 Kč.
      "><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div style="text-align:center;">
      <button type="button" class="buttonRadio" onclick="$('#div13').slideDown();">ANO</button>
      <button type="button" id="next" class="buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div13" class="none">


    </div>

</div>
                      <div class="tab-pane" id="tab11">
  <h3 class="otazka">Uplatňuji slevu na mateřskou školu
      <a tabindex="0" class="napoveda" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Sleva na mateřskou školu" data-content="
      Rodiče mohou využít slevy na zaplacený poplatek za školku. Celková výše slevy činí v
      tomto případě 12 200 Kč za díte, avšak odečíst si ji může pouze jeden z rodičů.
      <br><b>K daňovému přiznání je zapotřebí doložit také potvrzení o zaplacení poplatku z mateřské školy!</b>"><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div14').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div14" class="none">
      <div class="form-group">
          <label>Počet dětí, pro které uplatňuji školkovné</label>
          <select class="form-control form-control-lg" name="pocetDetiSkolka" id="pocetDetiSkolka" onchange="check_skolka()" required="required">
            <option value="0">Počet dětí, pro které uplatňuji školkovné...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
        </div>

        <div class="form-group">
          <label>Celkové výdaje za školku</label>
          <small>Za jedno dítě lze uplatnit maximálně 12 200 Kč!</small>
          <input placeholder="Uveďte celkové výdaje za školku..." id="vydajeZaSkolku" class="form-control form-control-lg" type="text" onblur="check_skolka()" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
        </div>

    </div>

</div>
                      <div class="tab-pane" id="tab12">
  <h3 style="text-align:center; margin-top:15px;">Měl jsem v loňském roce povinnost využít poprvé EET
      <a tabindex="0" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Sleva na EET " data-content="
      Sleva na evidenci tržeb se týká pouze podnikajících fyzických osob. Právnické osoby
      žádný nárok na slevu na dani v souvislosti se spuštěním EET nemají. Poplatníci
      začínající s elektronickou evidencí tržeb mají nárok na jednorázovou slevu 5 000 Kč
      bez ohledu na to, jaké skutečné náklady poplatník na pořízené zařízení vynaložil.
      "><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div style="text-align:center;">
      <button type="button" class="buttonRadio" onclick="$('#div16').slideDown();">ANO</button>
      <button type="button" id="next" class="buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div16" class="none">


    </div>

</div>
                      <div class="tab-pane" id="tab13">
  <h3 class="otazka">Byl(a) jsem v uplynulém roce studentem
      <a tabindex="0" class="napoveda" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Sleva na studenta " data-content="
      Aby měl poplatník nárok na tuto slevu, <b>je nutno dodat potvrzení o studiu</b>. Co se týče
      studia na vysoké škole, může se jednat jak o prezenční, tak i distanční či kombinovanou
      formu studia. Této slevy mohou využít studenti do 26 let nebo do 28 let u prezenční
      formy doktorského studia. Sleva na studenta pro letošní rok činí 4 040 Kč (335 Kč/měsíc)."><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div17').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div17" class="none">
      <div class="form-group">
        <label>Počet měsíců, během nichž jsem byl(a) loni studentem</label>
        <select class="form-control form-control-lg" name="pocetMesicuStudia" id="pocetMesicuStudia" required="required">
          <option value="0">Počet měsíců studia...</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </div>

    </div>

</div>

                      <div class="tab-pane" id="tab14">
  <h3 class="otazka">Daroval jsem v uplynulém roce krev, její složky nebo orgán
      <a tabindex="0" class="napoveda" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Dárcovství krve a složek krve" data-content="
      Mezi dary se počítá také dárcovství krve či složek krve, mezi něž patří plazma a
      krevní destičky. Hodnota jednoho daru je zákonem ohodnocena na 3 000 Kč. Odpočet
      základu daně sice není určet počtem odběrů krve, ale v daňovém přiznání lze odečíst
      maximálně částku ve výši 15% ze základu daně.<br>
      <b>Ke každému odběru musí být doloženo potvrzením, které Vám vystaví personál při odběru krve nebo transplantačního centra.<b>/
      "><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div18').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div18" class="none">
        <div class="form-group">
          <label>Počet odběrů krve</label>
          <input placeholder="Uveďte počet odběrů krve..." id="darcovstviKrve" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
        </div>

        <center><button type="button" class="btn btn-outline-danger btn-lg" onclick="$('#div18_1').slideDown();">Daroval jsem orgán, kostní dřeň či kmenové buňky</button></center><br>
        <div id="div18_1" class="none"><br>
          <div class="form-group">
            <label>Počet odběrů</label>
            <input placeholder="Uveďte počet odběrů..." id="darcovstviOrganu" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
          </div>
        </div>

    </div>

</div>
                      <div class="tab-pane" id="tab15">
  <h3 class="otazka">Poskytl jsem dar
      <a tabindex="0" class="napoveda" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" title="Poskytnutí daru" data-content="
      Mezi dary se počítá také dárcovství krve či složek krve, mezi něž patří plazma a
      krevní destičky. Hodnota jednoho daru je zákonem ohodnocena na 3 000 Kč. Odpočet
      základu daně sice není určet počtem odběrů krve, ale v daňovém přiznání lze odečíst
      maximálně částku ve výši 15% ze základu daně.<br>
      <b>Ke každému odběru musí být doloženo potvrzením, které Vám vystaví personál při odběru krve nebo transplantačního centra.<b>/
      "><i class="fas fa-question-circle"></i></a>
  </h3><br>

  <div class="vyber">
      <button type="button" class="buttonRadio" onclick="$('#div19').slideDown();">ANO</button>
      <button type="button" class="next buttonRadio">NE</button>
  </div>
  <br><hr>

    <div id="div19" class="none">
        <div class="form-group">
          <label>Celková darovaná částka</label>
          <input placeholder="Uveďte darovanou částku..." id="dar" class="form-control" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
        </div>
    </div>

</div>
                      <!-- ÚDAJE O POPLATNÍKOVI -->
                    	<div class="tab-pane" id="tab16">
		<h3 class="otazka">Osobní údaje</h3><br>

		<br>

			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Jméno</label>
					<input placeholder="Jméno..." id="jmeno" class="form-control">
				</div>

				<div class="form-group col-md-4">
					<label>Příjmení</label>
					<input placeholder="Příjmení..." id="prijmeni" class="form-control">
				</div>

				<div class="form-group col-md-4">
					<label>Rodné příjmení</label>
					<input placeholder="Rodné příjmení..." id="rodnePrijmeni" class="form-control">
				</div>

				<div class="form-group col-md-4">
					<label>Rodné číslo</label>
					<input placeholder="Rodné číslo..." id="rodneCislo" class="form-control" >
				</div>

				<div class="form-group col-md-4">
					<label>Titul</label>
					<input placeholder="Titul..." id="titul" class="form-control">
				</div>

				<div class="form-group col-md-4">
					<label>Číslo pasu</label>
					<input placeholder="Číslo pasu..." id="cisloPasu" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
				</div>
			</div>

				<div class="form-group">
					<label>Státní příslušnost</label>
					<select class="form-control" id="statniPrislusnost" name="statniPrislusnost">
						<option selected="selected" value=""> Vyberte stát... </option>
						<option value="CZ">Česká republika</option>
						<option value="AF">Afghánistán</option>
						<option value="AL">Albánie</option>
						<option value="DZ">Alžírsko</option>
						<option value="AS">Americká Samoa</option>
						<option value="VI">Americké Panenské ostrovy</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AQ">Antarktida</option>
						<option value="AG">Antigua a Barbuda</option>
						<option value="AR">Argentina</option>
						<option value="AM">Arménie</option>
						<option value="AW">Aruba</option>
						<option value="AU">Austrálie</option>
						<option value="AZ">Ázerbájdžán</option>
						<option value="BS">Bahamy</option>
						<option value="BH">Bahrajn</option>
						<option value="BD">Bangladéš</option>
						<option value="BB">Barbados</option>
						<option value="BE">Belgie</option>
						<option value="BZ">Belize</option>
						<option value="BJ">Benin</option>
						<option value="BM">Bermudy</option>
						<option value="BY">Bělorusko</option>
						<option value="BT">Bhútán</option>
						<option value="BO">Bolívie</option>
						<option value="BA">Bosna a Hercegovina</option>
						<option value="BW">Botswana</option>
						<option value="BV">Bouvetův ostrov</option>
						<option value="BR">Brazílie</option>
						<option value="IO">Britské Indickooceánské území</option>
						<option value="VG">Britské Panenské ostrovy</option>
						<option value="BN">Brunej</option>
						<option value="BG">Bulharsko</option>
						<option value="BF">Burkina Faso</option>
						<option value="BI">Burundi</option>
						<option value="CK">Cookovy ostrovy</option>
						<option value="TD">Čad</option>
						<option value="CN">Čína</option>
						<option value="DK">Dánsko</option>
						<option value="CD">Demokratická republika Kongo</option>
						<option value="DM">Dominika</option>
						<option value="DO">Dominikánská republika</option>
						<option value="DJ">Džibutsko</option>
						<option value="EG">Egypt</option>
						<option value="EC">Ekvádor</option>
						<option value="ER">Eritrea</option>
						<option value="EE">Estonsko</option>
						<option value="ET">Etiopie</option>
						<option value="FO">Faerské ostrovy</option>
						<option value="FK">Falklandy</option>
						<option value="FJ">Fidži</option>
						<option value="PH">Filipíny</option>
						<option value="FI">Finsko</option>
						<option value="FR">Francie</option>
						<option value="GF">Francouzská Guyana</option>
						<option value="TF">Francouzská jižní území</option>
						<option value="PF">Francouzská Polynésie</option>
						<option value="GA">Gabon</option>
						<option value="GM">Gambie</option>
						<option value="GZ">Gaza</option>
						<option value="GH">Ghana</option>
						<option value="GI">Gibraltar</option>
						<option value="GD">Grenada</option>
						<option value="GL">Grónsko</option>
						<option value="GE">Gruzie</option>
						<option value="GP">Guadeloupe</option>
						<option value="GU">Guam</option>
						<option value="GT">Guatemala</option>
						<option value="GG">Guernsey</option>
						<option value="GN">Guinea</option>
						<option value="GW">Guinea-Bissau</option>
						<option value="GY">Guyana</option>
						<option value="HT">Haiti</option>
						<option value="HM">Heardův ostrov a McDonaldovy ostrovy</option>
						<option value="HN">Honduras</option>
						<option value="HK">Hongkong</option>
						<option value="CL">Chile</option>
						<option value="HR">Chorvatsko</option>
						<option value="IN">Indie</option>
						<option value="ID">Indonésie</option>
						<option value="IQ">Irák</option>
						<option value="IR">Írán</option>
						<option value="IE">Irsko</option>
						<option value="IS">Island</option>
						<option value="IT">Itálie</option>
						<option value="IL">Izrael</option>
						<option value="JM">Jamajka</option>
						<option value="JP">Japonsko</option>
						<option value="YE">Jemen</option>
						<option value="JE">Jersey</option>
						<option value="ZA">Jihoafrická republika</option>
						<option value="GS">Jižní Georgie a Jižní Sandwichovy ostrovy</option>
						<option value="KR">Jižní Korea</option>
						<option value="JO">Jordánsko</option>
						<option value="KY">Kajmanské ostrovy</option>
						<option value="KH">Kambodža</option>
						<option value="CM">Kamerun</option>
						<option value="CA">Kanada</option>
						<option value="CV">Kapverdy</option>
						<option value="QA">Katar</option>
						<option value="KZ">Kazachstán</option>
						<option value="KE">Keňa</option>
						<option value="KI">Kiribati</option>
						<option value="CC">Kokosové ostrovy</option>
						<option value="CO">Kolumbie</option>
						<option value="KM">Komory</option>
						<option value="CG">Kongo</option>
						<option value="CR">Kostarika</option>
						<option value="CU">Kuba</option>
						<option value="KW">Kuvajt</option>
						<option value="CY">Kypr</option>
						<option value="KG">Kyrgyzstán</option>
						<option value="LA">Laos</option>
						<option value="LS">Lesotho</option>
						<option value="LB">Libanon</option>
						<option value="LR">Libérie</option>
						<option value="LY">Libye</option>
						<option value="LI">Lichtenštejnsko</option>
						<option value="LT">Litva</option>
						<option value="LV">Lotyšsko</option>
						<option value="LU">Lucebursko</option>
						<option value="MO">Macao</option>
						<option value="MG">Madagaskar</option>
						<option value="HU">Maďarsko</option>
						<option value="MK">Makedonie</option>
						<option value="MY">Malajsie</option>
						<option value="MW">Malawi</option>
						<option value="MV">Maledivy</option>
						<option value="ML">Mali</option>
						<option value="MT">Malta</option>
						<option value="MA">Maroko</option>
						<option value="MH">Marshallovy ostrovy</option>
						<option value="MQ">Martinik</option>
						<option value="MU">Mauricius</option>
						<option value="MR">Mauritánie</option>
						<option value="YT">Mayotte</option>
						<option value="MX">Mexiko</option>
						<option value="FM">Mikronésie</option>
						<option value="MD">Moldavsko</option>
						<option value="MC">Monako</option>
						<option value="MN">Mongolsko</option>
						<option value="MS">Montserrat</option>
						<option value="MZ">Mosambik</option>
						<option value="MM">Myanmar</option>
						<option value="NA">Namibie</option>
						<option value="NR">Nauru</option>
						<option value="NP">Nepál</option>
						<option value="DE">Německo</option>
						<option value="NE">Niger</option>
						<option value="NG">Nigérie</option>
						<option value="NI">Nikaragua</option>
						<option value="NU">Niue</option>
						<option value="AN">Nizozemské Antily</option>
						<option value="NL">Nizozemsko</option>
						<option value="NF">Norfolk</option>
						<option value="NO">Norsko</option>
						<option value="NC">Nová Kaledonie</option>
						<option value="NZ">Nový Zéland</option>
						<option value="OM">Omán</option>
						<option value="IM">Ostrov Man</option>
						<option value="PK">Pákistán</option>
						<option value="PW">Palau</option>
						<option value="PA">Panama</option>
						<option value="PG">Papua Nová Guinea</option>
						<option value="PY">Paraguay</option>
						<option value="PE">Peru</option>
						<option value="PN">Pitcairn</option>
						<option value="CI">Pobřeží slonoviny</option>
						<option value="PL">Polsko</option>
						<option value="PR">Portoriko</option>
						<option value="PT">Portugalsko</option>
						<option value="AT">Rakousko</option>
						<option value="RE">Réunion</option>
						<option value="GQ">Rovníková Guinea</option>
						<option value="RU">Rusko</option>
						<option value="RO">Rumunsko</option>
						<option value="RW">Rwanda</option>
						<option value="GR">Řecko</option>
						<option value="PM">Saint Pierre a Miquelon</option>
						<option value="SV">Salvador</option>
						<option value="WS">Samoa</option>
						<option value="SM">San Marino</option>
						<option value="SA">Saúdská Arábie</option>
						<option value="SN">Senegal</option>
						<option value="KP">Severní Korea</option>
						<option value="MP">Severní Mariany</option>
						<option value="SC">Seychely</option>
						<option value="SL">Sierra Leone</option>
						<option value="SG">Singapur</option>
						<option value="SK">Slovensko</option>
						<option value="SI">Slovinsko</option>
						<option value="SO">Somálsko</option>
						<option value="AE">Spojené arabské emiráty</option>
						<option value="US">Spojené státy</option>
						<option value="UM">Spojené státy – menší odlehlé ostrovy</option>
						<option value="CS">Srbsko</option>
						<option value="LK">Srí Lanka</option>
						<option value="CF">Středoafrická republika</option>
						<option value="SR">Surinam</option>
						<option value="SD">Súdán</option>
						<option value="SJ">Svalbard</option>
						<option value="SH">Svatá Helena</option>
						<option value="KN">Svatý Kryštof a Nevis</option>
						<option value="LC">Svatá Lucie</option>
						<option value="ST">Svatý Tomáš</option>
						<option value="VC">Svatý Vincenc a Grenadiny</option>
						<option value="SZ">Svazijsko</option>
						<option value="SY">Sýrie</option>
						<option value="SB">Šalamounovy ostrovy</option>
						<option value="ES">Španělsko</option>
						<option value="SE">Švédsko</option>
						<option value="CH">Švýcarsko</option>
						<option value="TJ">Tádžikistán</option>
						<option value="TZ">Tanzanie</option>
						<option value="TH">Thajsko</option>
						<option value="TW">Tchaj-wan</option>
						<option value="TG">Togo</option>
						<option value="TK">Tokelau</option>
						<option value="TO">Tonga</option>
						<option value="TT">Trinidad a Tobago</option>
						<option value="TN">Tunisko</option>
						<option value="TR">Turecko</option>
						<option value="TM">Turkmenistán</option>
						<option value="TC">Turks a Caicos</option>
						<option value="TV">Tuvalu</option>
						<option value="UG">Uganda</option>
						<option value="UA">Ukrajina</option>
						<option value="UY">Uruguay</option>
						<option value="UZ">Uzbekistán</option>
						<option value="CX">Vánoční ostrov</option>
						<option value="VA">Vatikán</option>
						<option value="VU">Vanuatu</option>
						<option value="VE">Venezuela</option>
						<option value="GB">Velká Británie</option>
						<option value="VN">Vietnam</option>
						<option value="TP">Východní Timor</option>
						<option value="WF">Wallis a Futuna</option>
						<option value="ZM">Zambie</option>
						<option value="EH">Západní Sahara</option>
						<option value="ZW">Zimbabwe</option>
					</select>
				</div>

	</div>
                    		<div class="tab-pane" id="tab17">
		<h3 style="text-align:center; margin-top:15px;">Bydliště</h3><br>

		<br>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>Obec</label>
					<input placeholder="Obec..." name="obec" id="obec" class="form-control">
				</div>

				<div class="form-group col-md-6">
					<label>Ulice</label>
					<input placeholder="Ulice..." name="ulice" id="ulice" class="form-control">
				</div>

				<div class="form-group col-md-6">
					<label>Číslo popisné</label>
					<input placeholder="Číslo popisné..." name="CP" id="CP" class="form-control">
				</div>

				<div class="form-group col-md-6">
					<label>PSČ</label>
					<input placeholder="Poštovní směrovací číslo..." name="PSC" id="PSC" class="form-control">
				</div>


				<div class="form-group col-md-6">
					<label>Telefon</label>
					<input placeholder="Telefon..." name="telefon" id="telefon" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
				</div>

				<div class="form-group col-md-6">
					<label>Email</label>
					<input placeholder="Email..." name="email" id="email" class="form-control">
				</div>
			</div>

				<div class="form-group">
					<label>Stát</label>
					<select class="form-control" id="stat" name="stat">
						<option selected="selected" value="">Vyberte stát... </option>
						<option value="ČR">Česká republika</option>
						<option value="Afghánistán">Afghánistán</option>
						<option value="Albánie">Albánie</option>
						<option value="Alžírsko">Alžírsko</option>
						<option value="Americká Samoa">Americká Samoa</option>
						<option value="Americké Panenské ostrovy">Americké Panenské ostrovy</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antarktida">Antarktida</option>
						<option value="Antigua a Barbuda">Antigua a Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Arménie">Arménie</option>
						<option value="Aruba">Aruba</option>
						<option value="Austrálie">Austrálie</option>
						<option value="Ázerbájdžán">Ázerbájdžán</option>
						<option value="Bahamy">Bahamy</option>
						<option value="Bahrajn">Bahrajn</option>
						<option value="Bangladéš">Bangladéš</option>
						<option value="Barbados">Barbados</option>
						<option value="Belgie">Belgie</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bermudy">Bermudy</option>
						<option value="Bělorusko">Bělorusko</option>
						<option value="Bhútán">Bhútán</option>
						<option value="Bolívie">Bolívie</option>
						<option value="Bosna a Hercegovina">Bosna a Hercegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Bouvetův ostrov">Bouvetův ostrov</option>
						<option value="Brazílie">Brazílie</option>
						<option value="Britské Indickooceánské území">Britské Indickooceánské území</option>
						<option value="Britské Panenské ostrovy">Britské Panenské ostrovy</option>
						<option value="Brunej">Brunej</option>
						<option value="Bulharsko">Bulharsko</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cookovy ostrovy">Cookovy ostrovy</option>
						<option value="Čad">Čad</option>
						<option value="Čína">Čína</option>
						<option value="Dánsko">Dánsko</option>
						<option value="Demokratická republika Kongo">Demokratická republika Kongo</option>
						<option value="Dominika">Dominika</option>
						<option value="Dominikánská republika">Dominikánská republika</option>
						<option value="Džibutsko">Džibutsko</option>
						<option value="Egypt">Egypt</option>
						<option value="Ekvádor">Ekvádor</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonsko">Estonsko</option>
						<option value="Etiopie">Etiopie</option>
						<option value="Faerské ostrovy">Faerské ostrovy</option>
						<option value="Falklandy">Falklandy</option>
						<option value="Fidži">Fidži</option>
						<option value="Filipíny">Filipíny</option>
						<option value="Finsko">Finsko</option>
						<option value="Francie">Francie</option>
						<option value="Francouzská Guyana">Francouzská Guyana</option>
						<option value="Francouzská jižní území">Francouzská jižní území</option>
						<option value="Francouzská Polynésie">Francouzská Polynésie</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambie">Gambie</option>
						<option value="Gaza">Gaza</option>
						<option value="Ghana">Ghana</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Grenada">Grenada</option>
						<option value="Grónsko">Grónsko</option>
						<option value="Gruzie">Gruzie</option>
						<option value="Guadeloupe">Guadeloupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guernsey">Guernsey</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Honduras">Honduras</option>
						<option value="Hongkong">Hongkong</option>
						<option value="Chile">Chile</option>
						<option value="Chorvatsko">Chorvatsko</option>
						<option value="Indie">Indie</option>
						<option value="Indonésie">Indonésie</option>
						<option value="Irák">Irák</option>
						<option value="Írán">Írán</option>
						<option value="Irsko">Irsko</option>
						<option value="Island">Island</option>
						<option value="Itálie">Itálie</option>
						<option value="Izrael">Izrael</option>
						<option value="Jamajka">Jamajka</option>
						<option value="Japonsko">Japonsko</option>
						<option value="Jemen">Jemen</option>
						<option value="Jersey">Jersey</option>
						<option value="Jihoafrická republika">Jihoafrická republika</option>
						<option value="Jižní Korea">Jižní Korea</option>
						<option value="Jordánsko">Jordánsko</option>
						<option value="Kajmanské ostrovy">Kajmanské ostrovy</option>
						<option value="Kambodža">Kambodža</option>
						<option value="Kamerun">Kamerun</option>
						<option value="Kanada">Kanada</option>
						<option value="Kapverdy">Kapverdy</option>
						<option value="Katar">Katar</option>
						<option value="Kazachstán">Kazachstán</option>
						<option value="Keňa">Keňa</option>
						<option value="Kiribati">Kiribati</option>
						<option value="CC">Kokosové ostrovy</option>
						<option value="Kolumbie">Kolumbie</option>
						<option value="Komory">Komory</option>
						<option value="Kongo">Kongo</option>
						<option value="Kostarika">Kostarika</option>
						<option value="Kuba">Kuba</option>
						<option value="Kuvajt">Kuvajt</option>
						<option value="Kypr">Kypr</option>
						<option value="Kyrgyzstán">Kyrgyzstán</option>
						<option value="Laos">Laos</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Libanon">Libanon</option>
						<option value="Libérie">Libérie</option>
						<option value="Libye">Libye</option>
						<option value="Lichtenštejnsko">Lichtenštejnsko</option>
						<option value="Litva">Litva</option>
						<option value="Lotyšsko">Lotyšsko</option>
						<option value="Lucebursko">Lucebursko</option>
						<option value="Macao">Macao</option>
						<option value="Madagaskar">Madagaskar</option>
						<option value="Maďarsko">Maďarsko</option>
						<option value="Makedonie">Makedonie</option>
						<option value="Malajsie">Malajsie</option>
						<option value="Malawi">Malawi</option>
						<option value="Maledivy">Maledivy</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Maroko">Maroko</option>
						<option value="Marshallovy ostrovy">Marshallovy ostrovy</option>
						<option value="Martinik">Martinik</option>
						<option value="Mauricius">Mauricius</option>
						<option value="Mauritánie">Mauritánie</option>
						<option value="Mayotte">Mayotte</option>
						<option value="Mexiko">Mexiko</option>
						<option value="Mikronésie">Mikronésie</option>
						<option value="Moldavsko">Moldavsko</option>
						<option value="Monako">Monako</option>
						<option value="Mongolsko">Mongolsko</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Mosambik">Mosambik</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibie">Namibie</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepál">Nepál</option>
						<option value="Německo">Německo</option>
						<option value="Niger">Niger</option>
						<option value="Nigérie">Nigérie</option>
						<option value="Nikaragua">Nikaragua</option>
						<option value="Niue">Niue</option>
						<option value="Nizozemské Antily">Nizozemské Antily</option>
						<option value="Nizozemsko">Nizozemsko</option>
						<option value="Norfolk">Norfolk</option>
						<option value="Norsko">Norsko</option>
						<option value="Nová Kaledonie">Nová Kaledonie</option>
						<option value="Nový Zéland">Nový Zéland</option>
						<option value="Omán">Omán</option>
						<option value="Pákistán">Pákistán</option>
						<option value="Palau">Palau</option>
						<option value="Panama">Panama</option>
						<option value="Papua Nová Guinea">Papua Nová Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Pitcairn">Pitcairn</option>
						<option value="Pobřeží slonoviny">Pobřeží slonoviny</option>
						<option value="Polsko">Polsko</option>
						<option value="Portoriko">Portoriko</option>
						<option value="Portugalsko">Portugalsko</option>
						<option value="Rakousko">Rakousko</option>
						<option value="Réunion">Réunion</option>
						<option value="Rovníková Guinea">Rovníková Guinea</option>
						<option value="Rusko">Rusko</option>
						<option value="Rumunsko">Rumunsko</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Řecko">Řecko</option>
						<option value="Salvador">Salvador</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Saúdská Arábie">Saúdská Arábie</option>
						<option value="Senegal">Senegal</option>
						<option value="Severní Korea">Severní Korea</option>
						<option value="Severní Mariany">Severní Mariany</option>
						<option value="Seychely">Seychely</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapur">Singapur</option>
						<option value="Slovensko">Slovensko</option>
						<option value="Slovinsko">Slovinsko</option>
						<option value="Somálsko">Somálsko</option>
						<option value="SAE">Spojené arabské emiráty</option>
						<option value="USA">Spojené státy</option>
						<option value="Srbsko">Srbsko</option>
						<option value="Srí Lanka">Srí Lanka</option>
						<option value="Středoafrická republika">Středoafrická republika</option>
						<option value="Surinam">Surinam</option>
						<option value="Súdán">Súdán</option>
						<option value="Svalbard">Svalbard</option>
						<option value="Svatá Helena">Svatá Helena</option>
						<option value="Svatý Kryštof a Nevis">Svatý Kryštof a Nevis</option>
						<option value="Svatá Lucie">Svatá Lucie</option>
						<option value="Svatý Tomáš">Svatý Tomáš</option>
						<option value="Svazijsko">Svazijsko</option>
						<option value="Sýrie">Sýrie</option>
						<option value="Šalamounovy ostrovy">Šalamounovy ostrovy</option>
						<option value="Španělsko">Španělsko</option>
						<option value="Švédsko">Švédsko</option>
						<option value="Švýcarsko">Švýcarsko</option>
						<option value="Tádžikistán">Tádžikistán</option>
						<option value="Tanzanie">Tanzanie</option>
						<option value="Thajsko">Thajsko</option>
						<option value="Tchaj-wan">Tchaj-wan</option>
						<option value="Togo">Togo</option>
						<option value="Tokelau">Tokelau</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad a Tobago">Trinidad a Tobago</option>
						<option value="Tunisko">Tunisko</option>
						<option value="Turecko">Turecko</option>
						<option value="Turkmenistán">Turkmenistán</option>
						<option value="Turks a Caico">Turks a Caicos</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukrajina">Ukrajina</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistán">Uzbekistán</option>
						<option value="Vánoční ostrov">Vánoční ostrov</option>
						<option value="Vatikán">Vatikán</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Velká Británie">Velká Británie</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Východní Timor">Východní Timor</option>
						<option value="Zambie">Zambie</option>
						<option value="Západní Sahara">Západní Sahara</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select>
				</div>
	</div>
                      <div class="tab-pane" id="tab18">
  <h3 style="text-align:center; margin-top:15px;">Ostatní</h3><br>

  <div class="form-group">
    <label>Kraj</label>
    <select class="form-control" id="kraj">
        <option value="">Vyberte kraj...</option>
        <option value="hlavní město Prahu">hlavní město Praha</option>
        <option value="Středočeský kraj">Stredočeský kraj</option>
        <option value="Jihočeský kraj">Jihočeský kraj</option>
        <option value="Plzeňský kraj">Plzeňský kraj</option>
        <option value="Karlovarský kraj">Karlovarský kraj</option>
        <option value="Ústecký kraj">Ústecký kraj</option>
        <option value="Liberecký kraj">Liberecký kraj</option>
        <option value="Královéhradecký kraj">Královéhradecký kraj</option>
        <option value="Pardubický kraj">Pardubický kraj</option>
        <option value="Kraj Vysočina">Kraj Vysočina</option>
        <option value="Jihomoravský kraj">Jihomoravský kraj</option>
        <option value="Olomoucký kraj">Olomoucký kraj</option>
        <option value="Moravskoslezský kraj">Moravskoslezský kraj</option>
        <option value="Zlínský kraj">Zlínský kraj</option>
        <option value="Specializovaný finančí úřad">Specializovaný finančí úřad</option>
    </select>
  </div>

  <div class="form-group">
    <label>Územní pracoviště</label>
    <select class="form-control" id="pracoviste">
        <option value="">Vyberte územní pracoviště</option>
    </select>
  </div>

<div class="form-row">
  <div style="margin-left: 5px; margin-right: 10px;">
  <label>Začátek zdaňovacího období:</label>
  </div>
  <div class="form-group col-md-2">
      <select class="form-control" id="denOd">
          <option value="1." selected>1</option>
          <option value="2.">2</option>
          <option value="3.">3</option>
          <option value="4.">4</option>
          <option value="5.">5</option>
          <option value="6.">6</option>
          <option value="7.">7</option>
          <option value="8.">8</option>
          <option value="9.">9</option>
          <option value="10.">10</option>
          <option value="11.">11</option>
          <option value="12.">12</option>
          <option value="13.">13</option>
          <option value="14.">14</option>
          <option value="15.">15</option>
          <option value="16.">16</option>
          <option value="17.">17</option>
          <option value="18.">18</option>
          <option value="19.">19</option>
          <option value="20.">20</option>
          <option value="21.">21</option>
          <option value="22.">22</option>
          <option value="23.">23</option>
          <option value="24.">24</option>
          <option value="25.">25</option>
          <option value="26.">26</option>
          <option value="27.">27</option>
          <option value="28.">28</option>
          <option value="29.">29</option>
          <option value="30.">30</option>
          <option value="31.">31</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <select class="form-control" id="mesicOd">
          <option value="1." selected>Leden</option>
          <option value="2.">Únor</option>
          <option value="3.">Březen</option>
          <option value="4.">Duben</option>
          <option value="5.">Květen</option>
          <option value="6.">Červen</option>
          <option value="7.">Červenec</option>
          <option value="8.">Srpen</option>
          <option value="9.">Září</option>
          <option value="10.">Říjen</option>
          <option value="11.">Listopad</option>
          <option value="12.">Prosinec</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <select class="form-control" id="rokOd">
          <option value="2018" selected>2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
      </select>
    </div>


    <div style="margin-left: 5px; margin-right: 25px;">
      <label>Konec zdaňovacího období:</label>
    </div>
    <div class="form-group col-md-2">
        <select class="form-control" id="denDo">
            <option value="1.">1</option>
            <option value="2.">2</option>
            <option value="3.">3</option>
            <option value="4.">4</option>
            <option value="5.">5</option>
            <option value="6.">6</option>
            <option value="7.">7</option>
            <option value="8.">8</option>
            <option value="9.">9</option>
            <option value="10.">10</option>
            <option value="11.">11</option>
            <option value="12.">12</option>
            <option value="13.">13</option>
            <option value="14.">14</option>
            <option value="15.">15</option>
            <option value="16.">16</option>
            <option value="17.">17</option>
            <option value="18.">18</option>
            <option value="19.">19</option>
            <option value="20.">20</option>
            <option value="21.">21</option>
            <option value="22.">22</option>
            <option value="23.">23</option>
            <option value="24.">24</option>
            <option value="25.">25</option>
            <option value="26.">26</option>
            <option value="27.">27</option>
            <option value="28.">28</option>
            <option value="29.">29</option>
            <option value="30.">30</option>
            <option value="31." selected>31</option>
        </select>
      </div>

      <div class="form-group col-md-2">
        <select class="form-control" id="mesicDo">
            <option value="1.">Leden</option>
            <option value="2.">Únor</option>
            <option value="3.">Březen</option>
            <option value="4.">Duben</option>
            <option value="5.">Květen</option>
            <option value="6.">Červen</option>
            <option value="7.">Červenec</option>
            <option value="8.">Srpen</option>
            <option value="9.">Září</option>
            <option value="10.">Říjen</option>
            <option value="11.">Listopad</option>
            <option value="12." selected>Prosinec</option>
        </select>
      </div>

      <div class="form-group col-md-2">
        <select class="form-control" id="rokDo">
            <option value="2018" selected>2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
        </select>
      </div>


</div>

</div>
                      <div class="tab-pane" id="tab19">
  <h3 class="otazka">Dokončili jste vyplňování daňového přiznání</h3><br>

  <center>
    <input type="button" class="btn btn-danger btn-lg btn-block" id="generovat" style="max-width: 500px;" value="Vygenerovat daňové přiznání"/>
    <button type="button" class="download btn btn-danger btn-lg btn-block" style="max-width: 500px;">Uložit do počítače</button><br><br>
  </center>

</div>


                      <input type="hidden" id="celkemVydajeSazba" name="celkemVydajeSazba">
                      <input type="hidden" id="celkemPrijemSazba" name="celkemPrijemSazba">
                      <input type="hidden" id="rozdilPrijemVydaje" name="rozdilPrijemVydaje">

                      <input type="hidden" id="celkemVydajeOstatni" name="celkemVydajeOstatni">
                      <input type="hidden" id="celkemPrijemOstatni" name="celkemPrijemOstatni">
                      <input type="hidden" id="rozdilPrijemVydajeOstatni" name="rozdilPrijemVydajeOstatni">

                      <input type="hidden" id="slevaNaPoplatnika" name="slevaNaPoplatnika" value="24840">

                      <ul class="pager wizard">
                          <li id="btnPrev" class="previous"><a class="smer" href="#">Předchozí</i></a></li>
                          <div class="vypocet"><li id="btnNext" class="next"><a class="smer" href="#">Další</a></li></div>
                      </ul>

                      <div class="alert alert-warning res" role="alert">
                          Vaše daň vychází na: <input id="celkovaDan" class="dan" disabled>Kč
                      </div>
                    </div>
                </div>
            </form>
          </div>

		</div>
	</div>

    <!-- Footer -->
    <footer class="footer2 py-5 bg-black">
        <p class="m-0 text-center text-white small">Copyright &copy; Daně jednoduše 2019</p>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/createPDF.js"></script>
    <script>
    $.datepicker.regional['cs'] = {
          closeText: 'Cerrar',
          prevText: 'Předchozí',
          nextText: 'Další',
          currentText: 'Hoy',
          monthNames: ['Leden','Únor','Březen','Duben','Květen','Červen', 'Červenec','Srpen','Září','Říjen','Listopad','Prosinec'],
          monthNamesShort: ['Le','Ún','Bř','Du','Kv','Čn', 'Čc','Sr','Zá','Ří','Li','Pr'],
          dayNames: ['Neděle','Pondělí','Úterý','Středa','Čtvrtek','Pátek','Sobota'],
          dayNamesShort: ['Ne','Po','Út','St','Čt','Pá','So',],
          dayNamesMin: ['Ne','Po','Út','St','Čt','Pá','So'],
          weekHeader: 'Sm',
          dateFormat: 'dd.mm.yy',
          firstDay: 1,
          isRTL: false,
          showMonthAfterYear: false,
          yearSuffix: ''};
    $.datepicker.setDefaults($.datepicker.regional['cs']);
    $(".datepicker").datepicker({dateFormat: "d.m.yy"});
    </script>
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
