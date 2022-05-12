<?php

class Produto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("ProdutoModel");
        $this->load->model("TipoProdutoModel");
        if (!isset($_SESSION["tesi2022"])) {
            echo "você precisa estar logado";
            header("location: http://127.0.0.1/codeigniter/index.php/login/");
        }
    }

    public function index()
    {
        $this->load->model("produtomodel");

        $produtos = $this->produtomodel->selecionarTodos();
        $tabela = "";
        foreach ($produtos as $item) {
            $tabela .= "
                    <tr>";
            if (isset($_SESSION["tesi2022"])) {
                $tabela .= "
                <td style='cursor: pointer'>
                    <a href='/codeigniter/index.php/produto/alterar?codigo=" . $item->id . "'>
                    EDITAR
                    </a>
                    <a href='/codeigniter/index.php/produto/excluir?codigo=" . $item->id . "'>
                    APAGAR
                    </a>
                </td>";
            }
            $tabela .= "
                        <td>" . $item->nome . "</td>
                        <td>" . ($item->perecivel == 1 ? "Sim" : "Não") . "</td>
                        <td>" . $item->valor . "</td>
                        <td>" . $item->tipo_produto . "</td>
                    </tr>
                ";
        }
        $variavel = array(
            "lista_produtos" => $produtos,
            "tabela" => $tabela,
            "titulo" => "Bem-vindo a Padaria Barba",
            "sucesso" => "Produto adicionado!",
            "erro" => "Ocorreu um erro!"
        );

        $this->template->load("templates/adminTemp", "produto/index", $variavel);
    }

    public function inserir()
    {
        $nome = $_POST["nome"];
        $perecivel = $_POST['perecivel'];
        $valor = $_POST['valor'];
        $tipo_produto = $_POST['tipo_produto'];

        $data = array(
            "nome" => $nome,
            "perecivel" => $perecivel,
            "valor" => $valor,
            "tipo_produto" => $tipo_produto,
        );
        $this->ProdutoModel->inserir($data);
        header('location: /codeigniter/index.php/produto');
    }

    private function montaComboTipos($idTipoProduto)
    {
        $produtos = $this->TipoProdutoModel->selecionarTodos();
        $option = "";
        foreach ($produtos as $linhas) {
            $selecionado = "";
            if ($idTipoProduto == $linhas->id) {
                $selecionado = "selected";
            }
            $option .= "<option value ='" . $linhas->id . "'
            " . $selecionado . "
            >"
                . $linhas->nome_tipo . " </option>";
        }

        return $option;
    }

    public function excluir()
    {

        $id = $_GET["codigo"];

        $retorno = $this->ProdutoModel->excluir($id);

        if ($retorno) {
            header('location: /codeigniter/index.php/produto');
        } else {
            echo "houve erro na alteração";
        }
    }

    public function salvaralteracao()
    {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $perecivel = $_POST['perecivel'];
        $valor = $_POST['valor'];
        $tipo = $_POST['tipo_produto'];

        $data = array(
            "id" => $id,
            "nome" => $nome,
            "perecivel" => $perecivel,
            "valor" => $valor,
            "tipo_produto" => $tipo,
        );

        $retorno = $this->ProdutoModel->salvaralteracao($data, $id);

        if ($retorno) {
            header('location: /codeigniter/index.php/produto');
        } else {
            echo "houve erro na alteração";
        }
    }

    public function selecionarTodos()
    {
        $retorno = $this->db->query("SELECT * FROM `produto`");
        
    }

}
