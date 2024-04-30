<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conselho das Secretarias Municipais de Saúde de Rondônia</title>   

    <?php wp_head(); ?>  
    
  </head>
<body>
    <div class="wide" id="all">  
      <!-- Navbar Sticky-->
      <header class="nav-holder make-sticky">
        <div class="navbar navbar-light bg-white navbar-expand-lg py-0" id="navbar">
          <div class="container py-3 py-lg-0 px-lg-0">
            <a class="navbar-brand" href="/"><img class="d-none d-md-inline-block" src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'?>" alt="logo" height="80px" width=auto><img class="d-inline-block d-md-none" src="img/logo-small.png" alt="Universal logo"><span class="sr-only">Universal - go to homepage</span></a>
          

            <button class="navbar-toggler text-primary border-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navigationCollapse" aria-controls="navigationCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="sr-only">Toggle navigation</span><i class="fas fa-align-justify"></i></button>
            <!-- Collapsed Navigation    -->
            <div class="collapse navbar-collapse" id="navigationCollapse">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                  <a class="nav-link active"  href="/" >Home</a>                    
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Institucional</a>
                  <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                    <li><a class="dropdown-item text-uppercase border-bottom" href="/index.php/sobre/">Quem Somos</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="/index.php/diretoria/">Diretoria</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="/index.php/conselho/">Conselho Fiscal</a></li>
                    <li><a class="dropdown-item text-uppercase border-bottom" href="/index.php/equipe/">Equipe</a></li>
                  </ul>
                </li>

                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="contactMegamenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transparência</a>
                    <ul class="dropdown-menu dropdown-menu-end m-0" aria-labelledby="contactMegamenu">
                      <li><a class="dropdown-item text-uppercase border-bottom" href="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/ESTATUTO-COSEMS-RO-2023-Pronto-Assinado.pdf">Estatuto</a></li>
                      <li><a class="dropdown-item text-uppercase border-bottom" href="https://cosemsrondonia.org.br/resolucoes/">Resoluções</a></li>
                      <li><a class="dropdown-item text-uppercase border-bottom" href="https://cosemsrondonia.org.br/notas/">Notas Técnicas</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link"  href="https://cosemsrondonia.org.br/blog/" >Notícias</a>                   
                  </li>
               
                  <li class="nav-item dropdown">
                    <a class="nav-link"  href="#contato" >Contatos</a>                    
                  </li>


              </ul>
            </div>
          </div>
        </div>
      </header>

