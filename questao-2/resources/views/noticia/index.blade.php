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

          <form class="form-group row">

            <div class="col-12 busca">

              <input type="text" name="pesquisa" class="form-control col-8" placeholder="Digite sua busca">

              <input type="submit" class="btn btn-primary col-2 ml-3" value="Buscar">


            </div>

          </form>
          @if($noticias)
          @foreach($noticias as $noticia)

          <article class="box-noticia">
            <!--Notícia-->
            <a href="{{ $noticia->url }}">
              <figure>
                <img src="{{ $noticia->imagem }}" class="rounded float-left" style="height:200px;" alt="">
              </figure>
              <div class="texto-lista-noticias " style="overflow: hidden;">
                <span class="data-lista-noticia">{{ $noticia->categoria }} - {{ $noticia->data_formatada }}</span>
                <h1>{{ $noticia->titulo }}</h1>
                <span name="mensagem" maxlength="300" disabled>{{ substr($noticia->texto, 0, 300) }}</span>

                <p></p>
              </div>
            </a>
          </article>
          <!--Fim Notícia-->
          <hr>

          @endforeach
          @else
          <article class="box-noticia">
            <!--Notícia-->

            <div class="texto-lista-noticias " style="overflow: hidden;">
              <h1>Nenhuma notícia encontrada</h1>
            </div>

          </article>
          <!--Fim Notícia-->
          <hr>
          @endif
          <form class="form-group row">
            <ul class="pagination">


              @if( isset($paginacao['pesquisa']) )


                @for ($i = 0; $i < $paginacao['paginacao']; $i++) <li class="page-item"><a class="page-link" href="?pesquisa={{$paginacao['pesquisa']}}&page={{$i+1}}">{{$i+1}}</a></li>

                @endfor
              @else
                @for ($i = 0; $i < $paginacao['paginacao']; $i++) 
                
                <li class="page-item"><a class="page-link" href="?page={{$i+1}}">{{$i+1}}</a></li>

                @endfor
              @endif




            </ul>
          </form>

          <!--Fim Paginação-->

        </div>
        <!--Fim Lista de Noticias-->

      </div> <!-- final conteudo-esquerda -->


    </div> <!-- final centraliza -->

  </section>

  <script src="{{ asset('js/jquery.min.js') }}"></script>




</body>

</html>