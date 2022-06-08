<!DOCTYPE html>
<html lang="pt-BR">
<?php
$titulo = "Feiras 2022";

include_once "cabecalho.php";
?>
<body class="justify-content-center">
  <div class="container corpo">
    <!-- NAVBAR -->
    <?php include "menu.html"; ?>

    <section class="home" id="home">
      <!-- COMEÇO DA PÁG 1-->
      <div class="row" >
        <div class="col">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img  id="banner1" src="imagens/banner1.svg" class="d-block w-100" alt="Logos Feira e Data/Local do Evento">
                <div class="carousel-caption d-none d-md-block">              
                </div>
              </div>
              <!-- <div class="carousel-item" data-bs-interval="2000">
                <img src="imagens/trilha-nova.svg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
              </div>
              <div class="carousel-item">
                <img src="imagens/trilha.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
  </section>
  <section class="feiras" id="feiras">
    <script src="node_modules/vivus/dist/vivus.js"></script>

    <div class="row" >
      <div class="col">
          <object id="my-svg" class="trilha img-fluid"" type="image/svg+xml" data="imagens/trilha-nova2.svg" width="100%"></object>
      </div>

    </div>


    <script>
      function f(){
      //  alert('oi');
      }

      $('#mnregionais').on('click',function(){
        myvivus.stop().reset().play(2);
      });


      myvivus = new Vivus('my-svg', { type:'sync', duration: 100 }, f);
    </script>
  </section>
  <!-- FINAL DA PÁG 2
  <!-- COMEÇO DA PÁG 3 --> 
  <!-- <div style=" height: 75px;" id="cronograma"></div> -->
  <!-- <div class="container full justify-content-center"> </div> -->
</div>
</body>
</html>