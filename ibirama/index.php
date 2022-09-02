<!DOCTYPE html>
<html lang="en">
<?php
$titulo = "Feira Regional de Ibirama";
$feira = isset($_GET['feira'])?$_GET['feira']:"";
include_once "cabecalho.php";
?>
<body class="container justify-content-center">
  <!-- NAVBAR -->
  <?php include "menu.php"; ?>
  <!-- COMEÇO DA PÁG 1-->
  <div class="container" id="topo" data-bs-spy="scroll" data-bs-target="#nav-menu" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

    <section id="home">
      <div class="row">
        <div class="col col-1"></div>
        <div class="col col-10">
          <img src="imagens/logo_projeto feiras.jpg" alt="Logo Projeto Feiras" height="110vw">
          <img src="imagens/Logo feira mtm-01a_sf.png" alt="Logo Feira de Matemática" height="110vw">
          <img src="imagens/ifc_logo.png" alt="Logo IFC" height="110vw">
        </div>
        <div class="col col-1"></div>
      </div>
      
    </section>
    <!-- COMEÇO DA PÁG 2-->
    <section>
      <div class="row">
              <h1>XV FRMat – Ibirama</h1>
              <h2>
              <span style="color: #339966;">XV Feira Regional de Matemática – Ibirama</span> 
              </h2>
              <p>
              A XV Feira Regional de Matemática de Ibirama está prevista para ocorrer no dia 13/09/2022 no município de Ibirama.
              </p>
              <h6 style="color: #339966;">Em breve divulgaremos novas informações!</h6>
        </div>
    </section>
  </div>
</body>
</html>