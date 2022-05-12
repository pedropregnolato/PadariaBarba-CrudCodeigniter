<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Criar conta</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crie uma conta!</h1>
                            </div>
                            <form class="user" method="POST" action="http://127.0.0.1/codeigniter/index.php/login/salvarRegistro">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nome" placeholder="Nome" name="nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="senha" placeholder="Senha" name="senha">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirmação de senha">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-user btn-block">
                                    Criar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="http://127.0.0.1/codeigniter/index.php/login">Já possui conta? Entre aqui</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="http://127.0.0.1/codeigniter/index.php/padaria">Início</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>public/js/sb-admin-2.min.js"></script>

</body>

</html>