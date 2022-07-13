<!DOCTYPE html>
<html lang="pt-BR">
<?php

$titulo = "Feiras 2022";
$feira = "";
include_once "cabecalho.php";

?>
    <script src="js/script.js"></script>
<body class="justify-content-center">
  <div class="container-fluid corpo">
    <!-- NAVBAR -->
    <?php include "menu.php"; ?>

    <div class='sticky-top redes' id='redes'>
      <ul class='list-group list-group-flush'>
        <li class='list-group-item'>
          <a href="https://www.instagram.com/projetofeirards/" target='_blank' class='btn btn-success flex-fill' alt='Instagram'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </a>  
        </li>
        <li class='list-group-item'>
          <a class='btn btn-success  target='_blank'  flex-fill' alt='Twitter'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg> 
          </a> 
        </li>
        <li class='list-group-item'>
          <a href="https://www.facebook.com/matematica.ifc.riodosul"  target='_blank'  class='btn btn-success flex-fill' alt='Facebook'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </a>
        </li>
        
      </ul>
    </div>
    <div class="container" id="topo" data-bs-spy="scroll" data-bs-target="#nav-menu" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      

      <section class="feiras" id="feiras">
        <div class="row">
          <div class='col'>
            <div class='row titulo'>
              <div class='col'>
                <h1>Feiras de Matemática</h1>
                <p>Regionais, Catarinense e Nacional</p>

              </div>
            </div>
            <ul class="list-group list-group-horizontal-lg flex-fill listalinks">
              <li class="list-group-item">
                <a href="regRiodoSul.php" target="_blank" class='btn btn-success linkfeira'>
                    <img src="imagens/logo-rds.png" alt="Logo Rio do Sul" class="d-block w-100">
                    Rio do Sul
                </a>
              </li>
              <li class="list-group-item">
                <a href="regItuporanga.php" target="_blank" class='btn btn-success linkfeira'>
                      <img src="imagens/logo-ituporanga.png" alt="Logo Ituporanga" class="d-block w-100">
                      Ituporanga
                  </a>
              </li>
              <li class="list-group-item">
                <a href="regIbirama.php" target="_blank" class='btn btn-success linkfeira'>
                      <img src="imagens/logo-ibirama.png" alt="Logo Ibirama" class="d-block w-100">
                      Ibirama
                  </a>

              </li>
              <li class="list-group-item">
              <a href="regTaio.php" target="_blank" class='btn btn-success linkfeira'>
                    <img src="imagens/logo-taio.png" alt="Logo Taió" class="d-block w-100">
                    Taió
                </a>
              </li>
              <li class="list-group-item">
                <a class='btn btn-success linkfeira'>
                  <img src="imagens/logo-sc.png" alt="Logo Santa Catarina" class="d-block w-100">
                    Catarinense
                </a>
              </li>
              <li class="list-group-item">
               <a class='btn btn-success linkfeira'>
                  <div >
                  <img src="imagens/logo-brasil.png" alt="Logo Brasil" class="d-block w-100">
                    Nacional
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </section>
      <section class="projeto" id="projeto">
          <!-- COMEÇO DA PÁG 1-->
          <div class="row">
            <div class="col">
              <h1 id='pp'>Projeto de Formação, Apoio à Organização e Participação de Professores e Alunos em Feiras de Matemática, Ciência e Tecnologia</h1>
            </div>
          </div>
          <div class="row" >
            <div class="col">
              <img src="imagens/faixa_site_projeto-feiras_02.png" alt="Projeto Feiras de Matemática" class="d-block w-100">
            </div>
          </div>
          <div class="row">
            <div class="col">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img   src="imagens/FRMat2018/IMG_8010.JPG"  class="d-block w-100" alt="Logos Feira e Data/Local do Evento">
                    <div class="carousel-caption d-none d-md-block">              
                    </div>
                  </div>
                  
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="imagens/FRMat2018/IMG_8011.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/FRMat2018/IMG_8160.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div> 
                  <div class="carousel-item">
                    <img src="imagens/FRMat2018/IMG_8198.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>             
                  <div class="carousel-item">
                    <img src="imagens/FRMat2018/IMG_8135.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div> 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Próxima</span>
                </button>
              </div> 
      
            </div>
            <div class="col">
              <p class='lead'>O Instituto Federal Catarinense (IFC) Campus Rio do Sul participa com membros efetivos da Comissão Permanente do Movimento das Feiras Catarinenses de Matemática desde 1996. Desde então, foi parceiro na formação de professores, no estudo de publicação científica dos trabalhos, na garantia do caráter público das feiras, na evolução com estudo epistemológico de avaliação em eventos, dentre outros. 
                A partir do Movimento das Feiras de Matemática foi instituído no campus as FEIMAS (Feira Interdisciplinar de Matemática Aplicada). 
                Culminando assim na inserção da matriz curricular da EAFRS (Escola Agrotécnica no IFC Campus Rio do Sul), o Projeto de Iniciação Científica (desde 2001), e levou a necessidade da substituição das FEIMAS pelas FETECs (Feira de Conhecimento Tecnológico e Científico), que ocorre atualmente no IFC Campus Rio do Sul, evento que divulga esta Instituição em todas as escolas da região. 
                
              </p>
            </div>
          </div>
          <div class="rown">
            <div class="col">
              <p class='lead'>Em 2012 a Reitoria do IFC assinou um convênio entre a Fundação Universidade Regional de Blumenau – FURB e o IFC com o objetivo da cooperação técnico-científica na área da Educação Matemática para implantação de Feiras de Matemática nas Unidades Federativas do Brasil, através da Pró-Reitoria de Extensão do IFC.
                Fortalecendo assim o já existente Projeto de Apoio à Organização e Participação de docentes e alunos em Feiras de Matemática, Ciência e Tecnologia. 
                No decorrer do projeto, docentes e acadêmicos do Curso de Licenciatura em Matemática participaram da avaliação de diversas feiras de matemática de âmbito local, regional, estadual e nacional. 
                Ressalta-se ainda a participação na organização e na apresentação de trabalhos na XIII FETEC, XVI Feira Regional de Matemática, XVIII Feira Catarinense de Matemática, XIV FETEC, XVII Feira Regional de Matemática, XXIX Feira Catarinense de Matemática, II Feira Nacional de Matemática e também realização do V Seminário Nacional de Avaliação e Gestão das Feiras de Matemática no campus de Rio do Sul do IFC, o qual contou com a participação de 223 pessoas, sendo estas representantes de 43 municípios catarinenses e 13 estados.
                  O projeto visa continuar participando do processo de discussão e participação da Organização de eventos, num viés de cooperação e não de competição, aproximando-se das necessidades da sala de aula.</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <cite>Texto elaborado por Silvana Catarine Bauer – Acadêmica do Curso de Licenciatura em Matemática, revisado por Fátima Peres Zago de Oliveira – Professora do Curso de Licenciatura em Matemática e Ruy Piehowiak – Coordenador do Projeto de Apoio à Organização e Participação de Docentes e Alunos em Feiras de Matemática, Ciência e Tecnologia (2015).</cite>
            </div>
          </div>
      </section> 
      <section class="organizacao" id="organizacao">
          <div class="row">
            <div class="col">
              <p>Organização:</p>
              <div class="row">
                <div class="col">
                  <img src="imagens/IFC_vertical.png"  class="d-block w-100"  alt="IFC">
                </div>
                <div class="col">
                  <img src="imagens/IFSC_vertical_marca2015_PNG.png" class="d-block w-100"  alt="IFSC">
                </div>
                <div class="col">
                  <img src="imagens/FURB.png" class="d-block w-100"  alt="FURB">
                </div>  
              </div>
            </div>
            <div class="col">
              <p>Apoio:</p>
              <div class="row">
                <div class="col">
                  <img src="imagens/SBEM.png" class="d-block w-100"  alt="SBEM">
                </div>
                <div class="col">
                  <img src="imagens/UFSC Blumenau.png" class="d-block w-100"  alt="UFSC">
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  </div>

</body>
</html>