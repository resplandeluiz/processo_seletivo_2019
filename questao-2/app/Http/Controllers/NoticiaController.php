<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Route;

class NoticiaController extends Controller
{
    private $url;

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function index(Request $request)
    {

        $cliente = new Client();
        $noticia = new NoticiaController();

        if ($request->page) {

            $pagina = $request->page;
        } else {

            $pagina = 1;
        }

        if (!$request->pesquisa) {

            $noticia->setUrl("http://www.marcha.cnm.org.br/webservice/noticias?page=" . $pagina);
        } else if ($request->pesquisa && $request->page) {
           
            $noticia->setUrl("http://www.marcha.cnm.org.br/webservice/noticias?pesquisa=" . $request->pesquisa . "&page=" . $pagina);
            
        } else {

            $noticia->setUrl("http://www.marcha.cnm.org.br/webservice/noticias?pesquisa=" . $request->pesquisa);
        }


        $response = $cliente->request('GET', $noticia->getUrl());

        $body = $response->getBody();
        $contents =  $body->getContents();
        $contents = json_decode($contents);

        if (isset($request->pesquisa)) {

            $paginacao = $noticia->criaPaginacao($contents->total_noticias, $request->pesquisa);
        } else {

            $paginacao = $noticia->criaPaginacao($contents->total_noticias);
        }
        

        if (!isset($contents->noticias)) {

            $noticias = null;
        } else {

            $noticias = $contents->noticias;
        }

        return view('noticia.index', compact('noticias','paginacao'));
    }


    public function criaPaginacao($qtdNoticia, $pesquisa = null)
    {
        if ($qtdNoticia <= 0) {

            return null;
        }

        $paginacao = $qtdNoticia / 15;
       

        $paginate = ['paginacao' => $paginacao, 'pesquisa' => $pesquisa];
        return $paginate;
    }
}
