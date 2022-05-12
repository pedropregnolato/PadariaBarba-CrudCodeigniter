<?php
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model("LoginModel");
    }

    public function salvarRegistro()

    {
        $data = array(
            "email" => $_POST["email"],
            "nome" => $_POST["nome"],
            "senha" => $_POST["senha"]
        );

        //$this->load->model("LoginModel");
        $retorno = $this->LoginModel->registrar($data);

        if ($retorno){
            echo "<script>
            alert('Usuário cadastrado!');
            </script>";
            $this->template->load("templates/login",'login/login');
        }
        else{
            echo "<script>
            alert('Ocorreu um erro!');
            </script>";
        }
            
    }

    public function registro()
    {
        $this->template->load("templates/register",'login/registrarSenha');
    }


    public function index()
    {
        $this->template->load("templates/login",'login/login');
    }


    public function validaLogin(){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //$this->load->model("LoginModel");

        $retorno = $this->LoginModel->ValidaLogin($email, $senha);

        if ($retorno){
            $_SESSION["tesi2022"] = array(
                "email" => $email,
                "admin" => true
            );
            header("location: http://127.0.0.1/codeigniter/index.php/produto"); 
        } else {
            echo "<script>
            alert('Usuário ou senha inválidos');
            </script>";
            $this->template->load("templates/login",'login/login');
        }
    }

    public function deslogar () {
        unset($_SESSION["tesi2022"]);
        header("location: http://127.0.0.1/codeigniter/index.php/login/ ");
    }
}