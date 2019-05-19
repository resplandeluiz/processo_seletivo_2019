<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator; 
use GuzzleHttp\Client;

class NoticiaController extends Controller
{
    
   public function index(Request $request)
    {   
        $cliente = new Client();       
        
        $urlAPi = 'http://www.marcha.cnm.org.br/webservice/noticias';
        
        $response = $cliente->request('GET', $urlAPi);
        
        $body = $response->getBody();        
        $contents =  $body->getContents();       
        $contents = json_decode($contents);        

        $noticias = $contents->noticias;    
        $qtd_noticia = $contents->total_noticias;       
        
        return view('noticia.index',compact('noticias'));
    }


}
