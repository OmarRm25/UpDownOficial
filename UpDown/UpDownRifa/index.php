<?php
try{
$bd = new PDO('mysql:host=localhost;dbname=u132537277_ali','u132537277_root','Dragon25@');
$qu = $bd->query('SELECT * FROM Carnes');
?>  

<!DOCTYPE html>
<html>
<head>
	<title>ALIMENTACION</title>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/es.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript">
        var audios = new Array();
          function rep(elaudio){
                  audios=document.getElementsByTagName('audio');
                  var i;
                      for (i=0; i<audios.length; i++) {
                          if (audios[i].id==elaudio){
                                 audios[i].load();
                                 audios[i].play();
                          }   else{
                                  audios[i].pause();
                              }
                      }

          }
      </script>
</head>
<body>
<nav>

  <div class="row card-panel hoverable grey lighten-5  ">
      <a href="#!" class="col s2 m4 2 black-text text-darken-2 "><i class="material-icons">&#xE5C4;</i> <h6>Pagina Anterior</h6></a>
      <H5 class="col s2 m6 black-text text-darken-2 left-align hide-on-small-only hide-on-med-only">Conoce los Diferentes alimentos.</H5>
      <h5 class="col s12 m6 black-text text-darken-2 center-align hide-on-large-only">Conoce los Diferentes alimentos.</h5>
      <a href="#!" class="col s12 m4 2 black-text text-darken-2 right-align right "><i class="material-icons">&#xE5C8;</i> <h6> Pagina Siguiente</h6></a>
      
  </div>
</nav>
<br><br><br><br>
<section>
  <br>
  <ul class="tabs tablas">
    <li class="tab col s1"><a href="#grano">GRANOS</a></li>
    <li class="tab col s1"><a href="#vege">VEGETABLES</a></li>
    <li class="tab col s1"><a href="#fruta">FRUTAS</a></li>
    <li class="tab col s1"><a href="#carne">CARNES</a></li>
    <li class="tab col s1"><a href="#lac">LACTEOS</a></li>
  </ul>
  <div id="grano" class="col s12 ">
    <div class="row">

    <?php 
    while ($fila = $qu->fetch(PDO::FETCH_ASSOC)) { ?>

          <audio preload="auto" id="<?php echo $fila['C_Nombre'];?>">
          <source src="media/<?php echo $fila['C_Audio'];?>.mp3" type="audio/mp3"/>
          <source src="media/<?php echo $fila['C_Audio'];?>.ogg" type="audio/ogg"/>
          </audio>
            <div class="col s4">
              <div class="card">
                <div class="card-image materialboxed" width="650">
                  <img src="<?php echo $fila['C_Imagen'];?>" >
                  <a class="btn-floating halfway-fab waves-effect waves-light red btn modal-trigger" href="#<?php echo $fila['id_Carne'];?>" onclick="rep('<?php echo $fila['C_Nombre'];?>');"><i class="material-icons">&#xE037;</i></a>
                </div>
                <div class="card-content">
                  <p><?php echo $fila['C_Nombre'];?></p>
                </div>
              </div>

            </div>
    <?php }
    $bd = null;
    } catch (PDOException $err) {
    // Mostramos un mensaje genérico de error.
  echo "Error: ejecutando consulta SQL.";
} 
    ?> 
    </div>
</div>


  <div id="vege" class="col s12 ">Test 2</div>
  <div id="fruta" class="col s12 ">Test 3</div>
  <div id="carne" class="col s12 ">Test 2</div>
  <div id="lac" class="col s12 ">Test 3</div>
</section>

        <footer class="page-footer card-panel  grey lighten-5 ">
          
            <div class="container center-align black-text text-darken-2">
            © 2017 Copyright 
            </div>
          
        </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>