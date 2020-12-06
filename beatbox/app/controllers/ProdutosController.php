<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosController
{

    public function produtos()
    {
        $pagination = new Paginacao('produtos', 2);

        $produtos = App::get('database')->paginaRows('produtos', $pagination->limiteDeItens, $pagination->offset);
        $categorias = App::get('database')->selectAll('categorias');

        $parametros = [
            'pagination' => $pagination,
            'produtos' => $produtos,
            'categorias' => $categorias
        ];

        $title = "Beatbox Produtos";
        $css_pages = [
            '/public/css/styles-produtos.css',
            'public/css/styles-produto.css',
        ];
        
        require 'app/views/site/partials/header.php';

        return view('/site/produtos', $parametros);
    }

    public function filtrar()
    {
        $filtro = array();
        $pagination = new Paginacao('produtos', 2);

        if (isset($_POST['busca'])) {
            $pesquisar = $_POST['busca'];
        } else {
            $pesquisar = "";
        }

        if (isset($_POST['criterio'])) {
            $filtro[] = $_POST['criterio'];
        }
        if (empty($filtro)) {
            if ($pesquisar == "") {
                $produtos = App::get('database')->filtro('produtos', $filtro,$pagination->limiteDeItens, $pagination->offset);
            } else {
                $produtos = App::get('database')->pesquisa('produtos', $filtro, $pesquisar, "OR",$pagination->limiteDeItens, $pagination->offset);
            }
        } else {

            if ($pesquisar == "") {
                $produtos = App::get('database')->filtro('produtos', $filtro[0],$pagination->limiteDeItens, $pagination->offset);
            } else {
                $produtos = App::get('database')->pesquisa('produtos', $filtro[0], $pesquisar, "AND",$pagination->limiteDeItens, $pagination->offset);
            }
        }
        if ($pesquisar == "" && empty($filtro)) {
            $produtos = App::get('database')->selectAll('produtos');
        }

        $categorias = App::get('database')->selectAll('categorias');

        $parametros = [
            'categorias' => $categorias,
            'pagination' => $pagination,
            'produtos' => $produtos
        ];
        $title = 'Beatbox Instumentos';
        $css_pages = [
            'public/css/styles-produto.css',
            '/public/css/styles-produtos.css'
        ];

        require 'app/views/site/partials/header.php';

        return view('/site/produtos', $parametros);
    }
}
