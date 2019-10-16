<?php

namespace App\Controller;

use App\Controller\AppController;

class ProdutosController extends AppController
{
  public function index()
  {
    $msg = "Bem vindos ao cake php!
      (esta msg veio do controller)";

    $this->set('msg', $msg);
  }
}
