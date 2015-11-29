<!DOCTYPE html>
<html lang="es-CO">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>iuris Project - Software para Abogados</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_background.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css">
    <link rel="shortcut icon" type="image/xicon" href="<?php echo base_url(); ?>images/favicon.ico"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/clientes.css">

    <!--Editor de Texto-->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body>
    <!--Boton/Barra de Herramientas-->
    <div class="fixed-action-btn" style="bottom: 50px; right: 24px;">
      <a class="btn-floating btn-large red">
      <i class="large material-icons">settings</i></a>

      <ul>
        <li><a class="btn-floating red" href="<?php echo base_url(); ?>Welcome/nuevoProceso"><i class="material-icons">description</i></i></a></li>
        <li><a class="btn-floating red darken-1" href="<?php echo base_url(); ?>Welcome/verTerceros"><i class="material-icons">perm_contact_calendar</i></a></li>
        <li><a class="btn-floating red"><i class="material-icons">today</i></a></li>
        <li><a class="btn-floating red"><i class="material-icons">email</i></a></li>
        <li><a class="btn-floating red"><i class="material-icons">dns</i></i></a></li>
        <li><a class="btn-floating orange"><i class="material-icons">equalizer</i></a></li>
        <li><a class="btn-floating orange"><i class="material-icons">attach_money</i></a></li>
      </ul>
    </div>

    <nav>
      <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label for="search"><i class="material-icons">search</i></label>
          </div>
        </form>
      </div>
    </nav>
    <br><br><br><br><br>

    <div id="pic_list_2" class="scroll_horizontal">
      <div class="box">
        <ul class="list">
          <a href="#"><li><img src="<?php echo base_url(); ?>images/temp_pic_1.png" width="93" height="108"></li></a>
          <a href="#"><li><img src="<?php echo base_url(); ?>images/temp_pic_2.png"></li></a>
          <a href="#"><li><img src="<?php echo base_url(); ?>images/temp_pic_3.png"></li></a>
          <a href="#"><li><img src="<?php echo base_url(); ?>images/temp_pic_4.png"></li></a>
          <a href="#"><li><img src="<?php echo base_url(); ?>images/temp_pic_5.png"></li></a>
        </ul>
      </div>
    </div>

    <!--Importar jQuery Antes de materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-markdown.js"></script>
    <script>
      $("#texteditor").markdown({autofocus:false,savable:false})
    </script>

    <!--Cargar Aechivos js-->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/materialize.min.js"></script>

    <!--Importar jQuery Antes de materialize.js-->
    <script>
      $(document).ready(function(){
        $('select').material_select();
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
        $('.modal-trigger').leanModal();
      });
    </script>

    <script src="http://cdn.staticfile.org/jquery/1.7.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.cxscroll.min.js"></script>
    <script>
      $("#pic_list_1").cxScroll();
      $('#pic_list_2').cxScroll({
        direction: 'left'
      });
      $('#pic_list_3').cxScroll({
        direction: 'bottom'
      });
      $('#pic_list_4').cxScroll({
        direction: 'top'
      });
    </script>

    <!--Footer-->
    <footer>
      <div class="row">
        <br><img src="<?php echo base_url(); ?>images/datos_clientes_iuris_project.png" width="794" height="203" usemap="#Map"><br><br><br>
        <a href="#"><img src="<?php echo base_url(); ?>images/menu_iuris.png" width="202" height="59" usemap="#Map"></a>
        <map name="Map">
          <area shape="rect" coords="252,326,479,397" href="#">
          <area shape="rect" coords="641,56,714,74" href="#">
        </map>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="input-field col s1"><br>
                <br>
              </div>
              <div class="footer-copyright">
                <div class="container right">
                  <img src="<?php echo base_url(); ?>images/iuris_proyect_abogados.png" width="219" height="30">
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </footer>
  </body>
</html>