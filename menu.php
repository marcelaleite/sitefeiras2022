
 <div class="container">
  <nav class="navbar menu fixed-top  navbar-expand-lg navbar-dark bg-dark" id='nav-menu'>
    <div class="container-fluid ">
      <a class="navbar-brand" href="index.php">
          <img src="imagens/Logo feira mtm-02a_sf.png" alt="" width="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#feiras">Home</a>
              </li>

            <?php if ($feira == "projeto"){   ?> <!--Quando na pagina index utiliza o Home do menu para mostrar o carrosel-->
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#projeto">Sobre</a> 
              </li>

            <?php } if($feira != "projeto"){?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#informaçoes">Informações</a> 
              </li>

              
            <?php }  if($feira != "projeto"){?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#formacao">Formação</a> 
              </li>
            <?php }?>
            <?php if($feira != "projeto"){ ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#feiras">Home</a>
            </li>
            
          <?php }if ($feira == ""){   ?> 
            <?php } ?>
              <!-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#feiras" id="mnregionais">Feiras</a>
              </li> -->
            <?php // } ?> 
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#programacao">Programação</a>
            </li> -->
            <?php
                if ($feira != "projeto"){ ?> 
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#projeto">Sobre</a> 
            </li>
            
          <?php } if($feira != ""){?>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#informaçoes">Informações</a> 
            </li>
              
          <?php }?>
          <?php if($feira != ""){ ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#areadoparticipante">Area do Participante</a>
            </li>
          <?php } ?>
                
          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#feiras" id="mnregionais">Feiras</a>
          </li> -->
          <?php if($feira!=null){ ?> 
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#programacao">Programação</a>
            </li>
          <?php }?> 
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#organizacao">Organização e apoio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#galeria">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="formacao.php">Formação</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="#contato">Contato</a>
            </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-current="page" href="#inscrever">Inscreva-se</a>
          </li>
        </ul>  
      </div>
    </div>

  </nav>
 </div> 