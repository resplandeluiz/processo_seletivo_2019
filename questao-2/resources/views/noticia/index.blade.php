<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desafio - 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="index, follow" />



  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">


  <!-- CSS -->
  <link rel=" stylesheet" href="{{ asset('css/geral.css') }}">

  <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
  <![endif]-->

</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  <section class="conteudo-internas">
    <div class="centraliza">
      <div class="conteudo-esquerda">
        <div class="lista">
          <!--Lista de Noticias-->

          <form action="" class="form-group row">
            <div class="col-12 busca">
              <input type="text" class="form-control col-8" placeholder="Digite sua busca">
              <button class="btn btn-primary col-2"> Buscar </button>
            </div>

          </form>

          <article class="box-noticia">
            <!--Notícia-->
            <a href="/noticias/nova-previdencia-e-os-municipios-editorial-do-estadao-trata-o-assunto-e-menciona-a-cnm">
              <figure>
                <img src="http://www.cnm.org.br/cms/images/stories/comunicacao_novo/geral/18072016_divulgacao_jornal.jpg" alt="">
              </figure>
              <div class="texto-lista-noticias">
                <span class="data-lista-noticia">segunda, 15 de abril de 2019</span>
                <h1>Nova Previdência e os Municípios: editorial do Estadão trata o assunto e menciona a CNM</h1>
                <p>A Nova Previd&ecirc;ncia e o impacto nos Munic&iacute;pios foram os assuntos de editorial do O Estado
                  de S&atilde;o Paulo desta segunda-feira, 15 de abril. Ao afirmar al&iacute;vio fiscal de cerca de R$
                  171 bilh&otilde;es, que a reforma da Previd&ecirc;ncia pode propiciar aos Munic&iacute;pios em 10
                  anos, o texto menci...</p>
              </div>
            </a>
          </article>
          <!--Fim Notícia-->
          <hr>



          <ul class="pagination">
            <li class="active page-item"><a class="page-link" href="">1</a></li>
            <li class="page-item"><a class="page-link" href="">2</a></li>
            <li class="page-item"><a class="page-link" href="">3</a></li>
            <li class="page-item">
              <a class="page-link" href="" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>


          <!--Fim Paginação-->

        </div>
        <!--Fim Lista de Noticias-->

      </div> <!-- final conteudo-esquerda -->


    </div> <!-- final centraliza -->

  </section>

  <script src="{{ asset('js/jquery.min.js') }}"></script>


  <script>
    $(document).ready(function() {

    });
  </script>

</body>

</html>