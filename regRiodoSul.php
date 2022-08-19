<!DOCTYPE html>
<html lang="en">
 
<?php
$titulo = "Feira Regional de Rio do Sul";
$feira =  "feira";
/* $feira = isset($_GET['feira'])?$_GET['feira']:""; */ 

include_once "cabecalho.php";
?>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>


<body class=" container justify-content-center"> <!-- -->
  <div class = "container">
      <div class="row" >
          <div class="col">
              <!-- NAVBAR -->
              
                <?php include "menu.php"; ?>
              <!--
              <section class="home" id="home">
                
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
                        <span class="visually-hidden">Anterior</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próxima</span>
                      </button>
                    </div>
                  </div>
                </div>
            </section>  FIM DO CAROUSEL-->
            <section >
              <div class="container">
                <div class="row">
                  <div class="col"><img id= "logo"src="imagens/rsllogo.jpeg"  alt=""></div>  
                  <div class="col">
                    <h1>24ª FRMat e XIII FRCTec – Regional Rio do Sul</h1>  
                    <br>
                    <h2>
                    <span style= "color: #339966;">
                      24ª Feira Regional de Matemática Rio do Sul e XIII Feira Regional de Ciências e Tecnologia da Regional de Rio do Sul
                    </span>
                  </div>  
                </div>
              </div>  
            </section>

            <section class="informaçoes" id= "informaçoes" > <!-- INICIO INFORMAÇÕES -->
                
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
                  
              
            <section class = "areadoparticipante" id = "areadoparticipante"> <!-- INICIO AREA DO PARTICIPANTE  -->
              <div class="container">
                <div class="section" >
                  <h1>Área do Participante</h1> 
                  <h2><span style= "color: #339966;">Área destinada aos participantes das Feiras de Matemática 2022 – Regional de Rio do Sul</span></h2><br><br>
                  <div class = "row"> <!--INICIO DA PAGINA MODAL E ICONES-->
                    <script>
                      var myModal = document.getElementById('modal fade')
                      var myInput = document.getElementById('myInput')

                      myModal.addEventListener('shown.bs.modal', function () {
                        myInput.focus()
                      })
                    </script>
                    <div class = "col" >
                      <i>
                        <center>
                          <svg xmlns="http://www.w3.org/2000/svg" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#localizaçao"  width="150" height="100" style="color:red" fill="currentColor"  class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                          <h4><span style="color:red"> Localização</span></h4>
                        </center> 
                      </i>
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
                        <i>
                          <center>
                          <svg xmlns="http://www.w3.org/2000/svg" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#datas" style="color:green" width="150" height="100" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                          </svg>
                            <h4><span style="color:Green"> Datas Importantes </span></h4>
                          </center> 
                        </i>
                            
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
                        <i>
                          <center>
                          <svg xmlns="http://www.w3.org/2000/svg" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#documentos" style="color:blue" width="150" height="100" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                          </svg>
                            <h4><span style="color:Blue"> Documentos </span></h4>
                          </center> 
                        </i> 
                            
                        <div class="modal fade" id="documentos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Documentos </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
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
                  </div> <!--FIM DA PAGINA MODAL E ICONES-->
                  <br>
                  <br>
                  <br>
                  <div class="row">
                    <div class="col">
                      <br> 
                      <i>
                        <center>
                          
                          <svg xmlns="http://www.w3.org/2000/svg" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#comissao" style="color:fuchsia" width="150" height="100"  fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                          </svg>
                          <h4><span style="color:fuchsia"> Comissão </span></h4>
                        </center> 
                      </i> 

                          
                      <div class="modal fade" id="comissao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Comissão </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              projetofeiras.riodosul@ifc.edu.br
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                      </div>       
                    </div>
                    <div class="col">
                      <br> 
                      <i>
                        <center>
                          
                        <svg xmlns="http://www.w3.org/2000/svg"class="btn btn-default" data-bs-toggle="modal" data-bs-target="#regimento" style="color:darkcyan" width="150" height="100" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                        </svg>
                          <h4><span style="color:darkcyan">Regimento</span></h4>
                        </center> 
                      </i> 

                          
                      <div class="modal fade" id="regimento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Regimento </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Regimento – 24ª FRMat – clique aqui <br> 
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div> 
                  <div class="col">
                      <br> 
                      <i>
                        <center>
                          
                        <svg xmlns="http://www.w3.org/2000/svg"class="btn btn-default" data-bs-toggle="modal" data-bs-target="#inscricao" style="color:goldenrod" width="150" height="100" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                        </svg>
                          <h4><span style="color:goldenrod">Tutorial Para Inscrição</span></h4>
                        </center> 
                      </i> 

                          
                      <div class="modal fade"  id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Comissão </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              
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
              </p> 
              
                  <input type="image" src="imagens/Logo feira mtm-01a_sf.png" class="image1" alt="">
              
            
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
                <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">

                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                      <img   src="imagens/FRMat2018/IMG_8010.JPG"  class="d-block w-100" alt="Logos Feira e Data/Local do Evento">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8011.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8160.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div> 
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8198.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>             
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8135.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8162.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8180.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div> 
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="imagens/FRMat2018/IMG_8198.JPG" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block"></div>
                    </div> 
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próxima</span>
                  </button>
                  

                </div>
              </div>
            </div>
            </section> <!-- FIM GALERIA  -->
          </div>     
        </div>
      </div>
    </div>
</body>
</html>