<?php
include("template/header.php");
?>

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

<script>
  vydaje_procenta1();
  vydaje_procenta2();
  vydaje_procenta1_2();
  vydaje_procenta2_2();
  vydaje_procenta1_3();
  vydaje_procenta2_3();
  vydaje_procenta1_4();
  vydaje_procenta2_4();
  clear_sazba_cinnost2();
  clear_sazba_cinnost3();
  clear_sazba_cinnost4();
  clear_evidence_cinnost2();
  clear_evidence_cinnost3();
  clear_evidence_cinnost4();
  uzemni_pracoviste();
  celkem_prijmy();
  celkem_vydaje();
  rozdil_prijmy_vydaje();
</script>

	<div class="wrapper">

    <div style="overflow:auto; padding-top:20px; background-color: #e0e0e0; width:250px; position: absolute;
    right: 1px;">
      <div class="form-group" style="margin-left:10px;">
        <button type="button" id="download" class="buttonRadio">Uložit</button>
        <input type="button"  id="button1" class="buttonRadio" value="Vygenerovat"/>
        <button type="button" class="buttonRadio" onclick="$('#ulozit').slideDown();">Nahrát</button>
            <div id="ulozit" class="none" style="margin-top:10px;"><hr>
              <input id="upload" type="file">
            </div>
      </div>
    </div>
      <div class="container">
		      <div class="color card-2" style="background-color: #fff;">

            <div id="rootwizard">
               <div class="navbar">
                        <ul class="nav nav-pills" style="background-color: #efefef;">
                            <li><a href="#tab1" data-toggle="tab">1</a></li><li><a href="#tab2" data-toggle="tab">2</a></li><li><a href="#tab3" data-toggle="tab">3</a></li>
                            <li><a href="#tab4" data-toggle="tab">4</a></li><li><a href="#tab5" data-toggle="tab">5</a></li> <li><a href="#tab6" data-toggle="tab">6</a></li>
                            <li><a href="#tab7" data-toggle="tab">7</a></li><li><a href="#tab8" data-toggle="tab">8</a></li><li><a href="#tab9" data-toggle="tab">9</a></li>
                            <li><a href="#tab10" data-toggle="tab">10</a></li><li><a href="#tab11" data-toggle="tab">11</a></li><li><a href="#tab12" data-toggle="tab">12</a></li>
                            <li><a href="#tab13" data-toggle="tab">13</a></li><li><a href="#tab14" data-toggle="tab">14</a></li><li><a href="#tab15" data-toggle="tab">15</a></li>
                            <li><a href="#tab16" data-toggle="tab">16</a></li><li><a href="#tab17" data-toggle="tab">17</a></li>
                        </ul>
                </div>

                <div id="bar" class="progress">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>

              <form id="csvForm">
                      <div class="tab-content">



                          <!-- PŘÍJMY -->
                        	<?php include("form/prijmy/samostatna_cinnost.php"); ?>
                          <?php include("form/prijmy/udaje_o_samostatne_cinnosti.php"); ?>
                          <?php include("form/prijmy/pocet_mesicu.php"); ?>
                          <?php include("form/prijmy/zamestnani.php"); ?>
                          <?php include("form/prijmy/najem.php"); ?>
                          <?php include("form/prijmy/kapitalovy_majetek.php"); ?>
                          <?php include("form/prijmy/ostatni.php"); ?>
                          <!-- SLEVY -->
                          <?php include("form/slevy/na_manzelku.php"); ?>
                          <?php include("form/slevy/na_vyzivovane_dite.php"); ?>
                          <?php include("form/slevy/na_invaliditu.php"); ?>
                          <?php include("form/slevy/na_materskou_skolu.php"); ?>
                          <?php include("form/slevy/na_EET.php"); ?>
                          <?php include("form/slevy/na_studenta.php"); ?>
                          <!-- ÚDAJE O POPLATNÍKOVI -->
                        	<?php include("form/udaje/udaje.php"); ?>
                        	<?php include("form/udaje/pobyt.php"); ?>
                          <?php include("form/udaje/info.php"); ?>
                          <?php include("form/udaje/zaver.php"); ?>

                          <input type="hidden" id="slevaNaPoplatnika" name="slevaNaPoplatnika" value="24840">

                            <ul class="pager wizard">
                              <li  id="btnPrev" class="previous"><a href="#"><i class="fas fa-angle-left"></i></a></li>
                              <li id="btnNext" class="next"><a href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                </div>
            </form>
          </div>

		</div>
	</div>

    <!-- Footer -->
    <footer class="footer2 py-5 bg-black">
<?php
include("template/footer.php");
?>
