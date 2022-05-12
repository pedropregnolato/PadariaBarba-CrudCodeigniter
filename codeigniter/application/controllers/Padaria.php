<?php

class Padaria extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model("ProdutoModel");
    $this->load->model("TipoProdutoModel");
  }

  public function index()
  {
    $this->load->model("produtomodel");

    $produtos = $this->produtomodel->selecionarTodos();
    $tabela = "";
    $col1 = "";
    $col2 = "";
    $i = 0;
    foreach ($produtos as $item) {
      $tabela .= "
          <td>" . $item->nome . "</td>
          <td>" . ($item->perecivel == 1 ? "Sim" : "Não") . "</td>
          <td>" . $item->valor . "</td>
          <td>" . $item->tipo_produto . "</td>
      </tr>
  ";
      if ($i <= (sizeof($produtos) / 2)) {
        $col1 .= "<div class='post-entry-1'>
                <h2><a href='single-post.html'>" . $item->nome . "</a></h2>
                <h2><a href='single-post.html'>R$" . $item->valor . "</a></h2>
              </div>";
      } else {
        $col2 .= "<div class='post-entry-1'>
                <h2><a href='single-post.html'>" . $item->nome . "</a></h2>
                <h2><a href='single-post.html'>R$" . $item->valor . "</a></h2>
              </div>";
      }
      $i++;
    }

    $variavel = array(
      "lista_produtos" => $produtos,
      "tabela" => $tabela,
      "col1" => $col1,
      "col2" => $col2,
      "titulo" => "Bem-vindo a Padaria Barba",
      "sucesso" => "Produto adicionado!",
      "erro" => "Ocorreu um erro!"
    );

    $this->template->load("templates/index", "padaria/index", $variavel);
  }
}