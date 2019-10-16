<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ProdutosController extends AppController
{
  public function index()
  {
    // $msg = "Bem vindos ao cake php!
    //   (esta msg veio do controller)";

    // $this->set('msg', $msg);    

    $produtosTable = TableRegistry::get('Produtos');
    $produtos = $produtosTable->find('all');

    // $produtos = [];
    // $produtos[] = [
    //   "id" => 1,
    //   "nome" => "HD de 20 gigas",
    //   "preco" => 29.99,
    //   "descricao" => "hd muito bom da marca mega hd"
    // ];

    // $produtos[] = [
    //   "id" => 2,
    //   "nome" => "Playstation",
    //   "preco" => 999.99,
    //   "descricao" => "Videogame mto bom pra perder o tempo"
    // ];

    // $this->set('produto', $produto);
    $this->set('produtos', $produtos);
  }
}
