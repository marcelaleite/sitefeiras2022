<!DOCTYPE html>
<html lang="en">
<?php
$titulo = "Feira Regional de Ibirama";
$feira = isset($_GET['feira'])?$_GET['feira']:"";
include_once "cabecalho.php";
?>
<body class="container justify-content-center">
  <!-- NAVBAR -->
  <?php include "menu.php"; 
        include "carousel.php";?>
  
    <section id="prog">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <h2 class="titulo">XV Feira Regional de Matemática 
            e XIV Feira Regional de Ciência e Tecnologia de Ibirama</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="imagens/arvore.png" width="70%" alt="">
        </div>
        <div class="col-6">
          <h4><b>Data:  </b>13 de setembro de 2022</h4> 
          
          <h4><b>Local:  </b>Centro de Eventos Manoel Marchetti</h4>

          <h4><b>Rua:  </b>Rua Marquês do Herval, 239 – Centro</h4>

          <h4><b>Cidade:  </b>Ibirama</h4>

          <h3 id="programacao">Programação do dia 13/09/2022:</h3>
          <p>9h00min – Abertura oficial das feiras</p>
          <p>9h30min – Reunião com os avaliadores</p>
          <p>9h30min às 12h00min – Exposição dos trabalhos, visitação pública e avaliação dos trabalhos</p>
          <p>12h00min às 13h00min – Almoço dos orientadores e expositores</p>
          <p>13h00min às 15h00min – Exposição dos trabalhos, visitação pública e avaliação dos trabalhos</p>
          <p>15h30min – Desmontagem dos trabalhos</p>
          <p>15h45min – Encerramento e premiação</p>
        </div>
      </div>
    </section>
      <?php
      include_once "areaparticipante.php"?>
    
    <section id="informacoes">
      <h2 id="exposi">Expositores</h2>

      <h3 id="expo">O evento contou com a exposição de 52 trabalhos de escolas públicas 
          de 7 municípios da regional de educação de Ibirama: Apiúna, 
          Dona Emma, Ibirama, José Boiteux, Lontras, Presidente Getúlio e Witmarsum.</h3>

      <h2 class="titulo2">Convidados para abertura do evento:</h2>
        <ul id="convidados">
          <li><h4>FANFARRA com os alunos do Centro de Educação Infantil – 
            CEI Abelhinha Feliz de Ibirama</h4></li>

          <li><h4>CORAL com os alunos da EEB Gertrud Aichinger de Ibirama</h4></li>
        </ul>

      <h2 class="titulo2">Estandes Institucionais 
        com divulgação de cursos ofertados:</h2>
        <ul id="estan">
          <li><h4>IFC – Campus Ibirama</h4></li>

          <li><h4>IFC – Campus Rio do Sul</h4></li>

          <li><h4>UDESC – Campus Ibirama</h4></li>
        </ul>

        <h3 id="cert">Certificados (serão disponibilizados após o evento)</h3>
        <h4>Contato: 
          <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=feiradematematica.ibirama@ifc.edu.br">
            feiradematematica.ibirama@ifc.edu.br</a></h4>
    </section>
    
    <section id="organizacao">
      <div class="row">
        <h2 class="titulo">Realização</h2>
        <div class="col-1"></div>
        <div class="col-2">
          <img src="imagens/apoio.png" width="100%" alt="Organização e Apoio">
        </div>
        <div class="col-2">
          <img src="imagens/matematica.jpg" width="100%" alt="Organização e Apoio">
        </div>
        <div class="col-2">
          <img src="imagens/indice.png" width="100%" alt="Organização e Apoio">
        </div>
        <div class="col-2">
          <img src="imagens/prefeitura.jpg" width="100%" alt="Organização e Apoio">
        </div>
        <div class="col-2">
          <img src="imagens/secretaria.png" width="100%" alt="Organização e Apoio">
        </div>
        <div class="col-1"></div>
      </div>
    </section>
  </div>
</body>
</html>