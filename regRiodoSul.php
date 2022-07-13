<!DOCTYPE html>
<html lang="en">
 
<?php
$titulo = "Feira Regional de Rio do Sul";
$feira = isset($_GET['feira'])?$_GET['feira']:"";
include_once "cabecalho.php";
?>

<body class=" container justify-content-center"> <!-- -->
  <div class = "container ">
      <div class="row" >
          <div class="col">
              <!-- NAVBAR -->
              <?php include "menu.php"; ?>
              <section>
                <!-- COMEÇO DO CAROUSEL 1-->
                <div class="row" >
                  <div class="col">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                          <img  id="banner1" src="imagens/banner1.svg" class="d-block w-100" alt="Logos Feira e Data/Local do Evento">
                          <div class="carousel-caption d-none d-md-block">              
                          </div>
                        </div>
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
            </section> <!-- FIM DO CAROUSEL-->

            <section class="informaçoes" id= "informaçoes" > <!-- INICIO INFORMAÇÕES -->
                <h1>24ª FRMat e XIII FRCTec – Regional Rio do Sul</h1>  
                <br>
                <h2>
                  <span style= "color: #339966;">
                    24ª Feira Regional de Matemática Rio do Sul e XIII Feira Regional de Ciências e Tecnologia da Regional de Rio do Sul
                  </span>
                </h2> <br> <br>

                <p> 
                  <b>Data:</b> 19 de agosto de 2022 <br>
                  <b>Local:</b> EEB Expedicionario Mário Nardelli <br>
                  <b>Rua:</b> Rua Irmã Lília, 203 <br>
                  <b>Bairro:</b> Jardim das Hortênsias <br>
                  <b>Cidade:</b> Rio do Oeste <br>
                </p><br>
            
                

                
                <h3>Arquivos para Download</h3><br><br>
                <p>
                  Template para o Relato de Experiência ou Trabalho de Pesquisa – clique aqui <br> 
                  Ficha de Avaliação para Trabalhos de Matemática – clique aqui <br> 
                  Tutorial – passo a passo para fazer a inscrição pelo sistema da AMAVI – clique aqui <br> 
                  Crachás para expositores e orientadores – clique aqui <br> 
                  Croqui – disposição dos trabalhos nos stands – clique aqui <br><br>
                </p> 
                
                <!--<h3>Certificados</h3><br> <br>
                <p>

                  <b>Feira de Matemática:</b> <br><br> 
                  Avaliador + Orientador de 2 trabalhos <br>
                  Avaliador + Orientador <br>
                  Coordenador + Orientador de 2 trabalhos <br>
                  Coordenador + Orientador <br>
                  Expositor <br>
                  Orientador de 2 trabalhos <br>
                  Orientador 
                  <br><br>
                  <b>Feira de Ciências e Tecnologias:</b> <br><br> 
                  Expositor <br>
                  Orientador de 2 trabalhos <br>
                  Orientador <br>
                </p> <br> <br> -->
                
                  <h3>Contatos Coordenação Geral das Feiras:</h3><br>
                  <p>
                    <ul class = "espaçamento">
                      <ul>
                        <ul>
                          <li>26ª CRE-Rio do Sul – Ivan Bechtold (e-mail: ivanb@sed.sc.gov.br)</li><br>
                          <li>IFC-Rio do Sul – Ruy Piehowiak (e-mail: ruy.piehowiak@ifc.edu.br)</li><br>
                        </ul>
                      </ul>
                    </ul>
                  </p><br><br>
                  
                  <p >
                    <b>
                      <span style="color: #339966;">
                        O PROJETO:
                      </span>
                    </b>
                    
                    O Projeto de Formação, Apoio à Organização e Participação de Professores e Alunos em Feiras de Matemática, 
                    Ciência e Tecnologia está contribuindo com esta feira na coordenação geral, na formação aos orientadores,
                    na comissão de avaliação e também na certificação da feira. (e-mail: projetofeiras.riodosul@ifc.edu.br).
                  </p>
                </section> <!-- FIM INFORMAÇÕES -->
                  
                <section class = "formacao" id = "formacao" > <!-- INICIO FORMAÇÃO -->
                  <h1>Formação 2022 – Regional de Rio do Sul</h1> <br> <!--TITULO-->
                  <!--SUBTITULO--><h2><span style= "color: #339966;">Formação para participantes das Feiras de Matemática 2022 – Regional de Rio do Sul</span></h2> <br> 
                  <p>
                    Os membros do Projeto de Apoio à Organização e Participação de Professores e Alunos em Feiras de Matemática, Ciência e Tecnologia,
                    do IFC Campus Rio do Sul convidam para a Formação para participantes das Feiras de Matemática 2022.
                  </p><br>
                  
                  <h2><b>Objetivo</b></h2><br> <!--SUBTITULO-->
                  <p>Promover um ambiente dialógico que contribua para a formação contínua e permanente de professores,
                    acadêmicos, gestores e demais interessados nas Feiras de Matemática.</p><br>
                    
                    <h2><b>Metodologia de desenvolvimento e periodicidade dos encontros</b></h2><br> <!--SUBTITULO-->
                    <p>A dinâmica da formação envolverá 4 (quatro) encontros presenciais,
                      tendo como local a Unidade Urbana do IFC – Campus Rio do Sul,
                      localizado à Rua Abraham Lincoln, 210, Bairro Jardim América, 
                      e atividades de estudo (não presenciais).</p> 
                      <p>Tais encontros ocorrerão na primeira segunda-feira dos meses de maio,
                        junho, julho e setembro (02/05, 06/06, 04/07 e 05/09),
                        com duração de 3h, no período de 13h30min às 16h30min.</p>
                        
                    <h2><b>Certificação</b></h2><br><!--SUBTITULO-->
                    <p>A certificação dos participantes será de 30h e está condicionada à presença de,
                      no mínimo, 3 (três) encontros presenciais e realização das atividades de estudo.</p>
                      
                      <h2><b>Inscrição</b></h2><!--SUBTITULO--> <br>
                      <p>A inscrição será realizada pelo link https://forms.gle/YJLggJSvaXB4mxvx7 até dia 02 de maio.</p><br>
                      <p><b>Contato:</b>projetofeiras.riodosul@ifc.edu.br</p>
            </section> <!-- FIM FORMAÇÃO -->
              
            <section class = "areadoparticipante" id = "areadoparticipante"> <!-- INICIO AREA DO PARTICIPANTE  -->
              <div class="container">
                <div class="section" >
                  <h1>Área do Participante</h1>
                  
                  <div class = "row">
                    <script>
                      var myModal = document.getElementById('myModal')
                      var myInput = document.getElementById('myInput')

                      myModal.addEventListener('shown.bs.modal', function () {
                        myInput.focus()
                      })
                    </script>
                    <div class = "col" >
                      <button type="button" style="width: 150px; height: 100px; background-color:blueviolet"  id="botao" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#localizaçao">
                        <h4> Localização </h4> 
                      </button> 
                          
                      <div class="modal fade" id="localizaçao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">A Feira ira acontecer 19 de agosto de 2022,na escola EEB Expedicionario Mario Nardelli, Rua Irma Lilia, 203. Bairo Jardim da Hortencias, Rio do Oeste </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.9904964928705!2d-49.81524668499615!3d-27.18803548300975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x551e6ab3e98cea1e!2sEscola%20de%20Educa%C3%A7%C3%A3o%20B%C3%A1sica%20Expedicion%C3%A1rio%20M%C3%A1rio%20Nardelli!5e0!3m2!1spt-BR!2sbr!4v1657655795398!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="col">
                      <button type="button" style="width: 150px; height: 100px; background-color:blue"  id="botao2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#datas">
                          <h4> Datas Importantes </h4> 
                        </button> 
                            
                        <div class="modal fade" id="datas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Datas Importantes </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                15/06 a 20/06 – Período de credenciamento das instituições <br> 
                                26/06 a 10/07 – Período de inscrição dos trabalhos 
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                          </div>
                        </div>       
                    </div>
                    <div class="col">
                      <button type="button" style="width: 150px; height: 100px; background-color:Green"  id="botao3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#documentos">
                          <h4> Documentos </h4> 
                        </button> 
                            
                        <div class="modal fade" id="documentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Documentos </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Regimento – 24ª FRMat – clique aqui <br> 
                                Relação dos Trabalhos Homologados – clique aqui <br> 
                                Tabela de Premiação dos Trabalhos – clique aqui <br> 
                                Ata da Assembleia Geral das Feiras – clique aqui 
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                              </div>
                            </div>
                          </div>
                        </div>       
                    </div>
                  </div>
              
                </div>
              </div>  
            </section> <!-- FIM AREA DO PARTICIPANTE -->

            
            <section class = "programacao" id = "programacao"> <!-- INICIO PROGRAMAÇÃO -->
              
              <h1>Programação - Rio Do Sul 2022</h1> <br>
              <h2><span style= "color: #339966;">Programação da Feira Regional de Matemática - 2022 Rio Do Sul</span></h2> <br> <br>
              <p>
                    8h30min – Abertura oficial das feiras <br>
                    8h30min – Reunião com os avaliadores <br>
                    9h – Exposição dos trabalhos e visitação pública <br>
                    11h30min – Almoço dos orientadores e expositores <br>
                    13h – Retorno da exposição e visitação pública <br>
                    15h30min – Desmontagem dos trabalhos <br>
                    15h45min – Premiação 
                  </p> <br>
            </section> <!-- FIM PROGRAMAÇÃO -->
            
            <section class = "organizacao" id = "organizacao"> <!-- INICIO ORGANIZAÇÃO E APOIO -->
              <h1>Organização e Apoio</h1><br>
              <h2>
                <span style= "color: #339966;">Organização e Apoio da Feira Regional de Matemática - 2022 Rio Do Sul</span>
              </h2>
              
              <p>
                 <br><br> 
                  A formação oficial de uma Comissão Permanente das Feiras Regionais de Matemática da Região de Rio do Sul fortalece a participação das escolas dessa região,
                  a manutenção dos princípios intrínsecos na origem, em 1985, das Feiras de Matemática,
                  a formação de professores e estudantes na área de Educação Matemática e a organização e gestão das Feiras Regionais de Matemática da Região de Rio do Sul. 
                  Criada em novembro de 2015 tendo como participantes pelo menos duas pessoas de cada instituição e sendo coordenada pelos representantes das instituições 26ª Coordenadoria Regional de Ensino (CRE-Rio do Sul) e IFC-Campus Rio do Sul.
                    Tem como objetivo organizar as Feiras Regionais de Matemática da referida regional da qual fazem parte sete municípios – Agrolândia, Agronômica, Braço do Trombudo, Laurentino, Rio do Oeste, Rio do Sul e Trombudo Central.
                    <br><br>
                    
                    Oficialização da feira junto à CPFMat – <a href="http://projeto-de-feiras.ifc-riodosul.edu.br/wp-content/uploads/2022/06/OF-01-Oficializacao-da-24-FRMat.pdf" >clique aqui</a><br>
                    Ofício prorrogação credenciamento – <a href="http://projeto-de-feiras.ifc-riodosul.edu.br/wp-content/uploads/2022/06/OF-02-Credenciamento-da-24-FRMat.pdf">clique aqui</a> <br>
                    1ª Ata CPFRMat 2022 – <a href="http://projeto-de-feiras.ifc-riodosul.edu.br/wp-content/uploads/2022/06/Ata-01-1a-Reuniao-CFRMat-2022_cor.pdf">clique aqui</a> <br>
                    2ª Ata CPFRMat 2022 – <a href="http://projeto-de-feiras.ifc-riodosul.edu.br/wp-content/uploads/2022/06/Ata-02-2a-Reuniao-CFRMat-2022.pdf">clique aqui</a><br>
                    3ª Ata CPFRMat 2022 – clique aqui <br>
                    4ª Ata CPFRMat 2022 – clique aqui 
              </p> 
            </section> <!-- FIM ORGANIZAÇÃO E APOIO -->

            <section class = "galeria" id = "galeria"> <!-- INICIO GALERIA  -->
                <h1>Galeria</h1>
                <h2 >
                  <span style="color: #339966;">
                    Geleria de Fotos - Feira de Matemática 2018
                  </span>
                </h2>
                <div class="row" >
                  <div class="col">
                    <div id="galeriacar" class="carousel carousel-dark slide" data-bs-ride="carousel">
            
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                          <img  id="imagem1" src="imagens/FRMat2018/IMG_8010.JPG" class="d-block w-100" alt="imagem1">
                          <div class="carousel-caption d-none d-md-block"> </div>            
                        </div>
                        
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem2" src="imagens/FRMat2018/IMG_8011.JPG" class="d-block w-100" alt="imagem2">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                        
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem3" src="imagens/FRMat2018/IMG_8019.JPG" class="d-block w-100" alt="imagem3">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem4" src="imagens/FRMat2018/IMG_8135.JPG" class="d-block w-100" alt="imagem4">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem5" src="imagens/FRMat2018/IMG_8160.JPG" class="d-block w-100" alt="imagem5">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem6" src="imagens/FRMat2018/IMG_8162.JPG" class="d-block w-100" alt="imagem6">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem7" src="imagens/FRMat2018/IMG_8167.JPG" class="d-block w-100" alt="imagem7">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem8" src="imagens/FRMat2018/IMG_8180.JPG" class="d-block w-100" alt="imagem8">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem9" src="imagens/FRMat2018/IMG_8190.JPG" class="d-block w-100" alt="imagem9">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
                        <div class="carousel-item " data-bs-interval="2000">
                          <img  id="imagem10" src="imagens/FRMat2018/IMG_8198.JPG" class="d-block w-100" alt="imagem10">
                          <div class="carousel-caption d-none d-md-block"></div>
                        </div>
            
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
            </section> <!-- FIM GALERIA  -->
          </div>     
        </div>
      </div>
</body>
</html>