<?php

class Marcas extends Controller
{

  public function __construct()
  {
    $this->marcaModel = $this->model('Marca');
  }


  public function index()
  {
    $marcas = $this->marcaModel->all();

    $data = ['productos' => $marcas];

    
    $this->view('marcas/index', $data);
    
  }
}
