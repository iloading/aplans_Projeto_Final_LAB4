<?php
session_start();
require_once "../../connections/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <!-- Recolher todos os utilizadores na tabela users -->
    <script type="text/javascript">
        $(document).ready(function() {
            // var button = $(this).val();
            $.ajax({ // ajax call starts
                    url: '../ajax/users_table.php',
                    dataType: 'json', // Choosing a JSON datatype

                })
                .done(function(data) {
                    $('#users').html('');

                    for (var i in data) {
                        var linha = "<tr><th>" + data[i]["nome"] + "</th><th>" + data[i]["email"] + "</th><th>" + data[i]["role"] + "</th><th>" + data[i]["telemovel"] + "</th><th>" + data[i]["morada"] + "</th><th>" + data[i]["codigo_postal"] + "</th></tr>";

                        $('#users').append(linha);

                    };

                })
                .fail(function() { // Se existir um erro no pedido

                    $('#users').html('Data error'); // Escreve mensagem de erro na listagem de vinhos
                });
            return false; // keeps the page from not refreshing
        });
    </script>
    <!-- /.Recolher todos os utilizadores na tabela users -->
    <!-- /.Recolher todos os utilizadores na tabela users -->
    <script>
        $(document).ready(function() {
            $('#search').keyup(function() {

                $('#users').html(''); //limpa a tabela toda
                var searchField = $('#search').val(); //o que é inserido na pesquisa
                var expression = new RegExp(searchField, "i"); //cria uma REGEX que filtra de acordo com o que foi inserido na search
                $.getJSON('../ajax/users_table.php', function(data) { //abre o ficehrio JSON
                    for (var i in data) {
                        //se algum dos campos corresponder ao que foi escrito na search
                        if (data[i]["nome"].search(expression) != -1 || data[i]["email"].search(expression) != -1 || data[i]["role"].search(expression) != -1 || data[i]["telemovel"].search(expression) != -1 || data[i]["morada"].search(expression) != -1 || data[i]["codigo_postal"].search(expression) != -1) {
                            //volta a escrever a linha do utilizador correspondente
                            var linha = "<tr><th>" + data[i]["nome"] + "</th><th>" + data[i]["email"] + "</th><th>" + data[i]["role"] + "</th><th>" + data[i]["telemovel"] + "</th><th>" + data[i]["morada"] + "</th><th>" + data[i]["codigo_postal"] + "</th></tr>";

                            $('#users').append(linha);
                        }
                    }


                })
            });
        });
    </script>


    <script>
        function organizar($coluna, $ordenacao) {

            $ordenacao_atual = $ordenacao;

            function getorder($order, $ordenacao_a) {

                return function(a, b) {

                    if ($ordenacao_a == "ASC") {

                        $ordenacao_atual = "DES"

                        if (a[$order] > b[$order]) {
                            return 1;
                        } else if (a[$order] < b[$order]) {
                            return -1;
                        }
                        return 0;

                    } else {

                        $ordenacao_atual = "ASC"

                        if (a[$order] < b[$order]) {
                            return 1;
                        } else if (a[$order] > b[$order]) {
                            return -1;
                        }
                        return 0;

                    }
                }

            }

            $('#users').html(''); //limpa a tabela toda
            $('#colunaTabela').html(''); //limpa a tabela toda

            $.getJSON('../ajax/users_table.php', function(data) { //abre o ficehrio JSON

                data.sort(getorder($coluna, $ordenacao));
                var thead = "<tr class=\"bg-primary text-light cursorclick\"><th onclick=\"organizar('nome','" + $ordenacao_atual + "')\"><a>Nome</a></th><th onclick=\"organizar('email','" + $ordenacao_atual + "')\"><a>Email</a></th><th onclick = \"organizar('role','" + $ordenacao_atual + "')\"><a> Cargo </a> </th > <th onclick = \"organizar('telemovel','" + $ordenacao_atual + "')\" > <a> Telemóvel </a> </th > <th onclick = \"organizar('morada','" + $ordenacao_atual + "')\" > <a> Morada </a> </th > <th onclick = \"organizar('codigo_postal','" + $ordenacao_atual + "')\" > <a> Código Postal </a> </th ></tr>  "

                $('#colunaTabela').append(thead);

                for (var i in data) {

                    var linha = "<tr><th>" + data[i]["nome"] + "</th><th>" + data[i]["email"] + "</th><th>" + data[i]["role"] + "</th><th>" + data[i]["telemovel"] + "</th><th>" + data[i]["morada"] + "</th><th>" + data[i]["codigo_postal"] + "</th></tr>";

                    $('#users').append(linha);

                }
            });
        }
    </script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once "../components/c_navbars_side.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                //include_once "../components/c_navbars_top.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mt-4">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Gestão de utilizadores</h1>
                        <form class="d-none d-sm-inline-block form-inline ml-auto mr-0 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Utilizadores registados
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table table-striped table-hover">
                                            <thead id="colunaTabela">
                                                <tr class="bg-primary text-light cursorclick">
                                                    <th onclick="organizar('nome','ASC')">
                                                        <a>Nome</a>
                                                    </th>
                                                    <th onclick="organizar('email','ASC')">
                                                        <a>Email</a>
                                                    </th>
                                                    <th onclick="organizar('role','ASC')">
                                                        <a>Cargo</a>
                                                    </th>
                                                    <th onclick="organizar('telemovel','ASC')">
                                                        <a>Telemóvel</a>
                                                    </th>
                                                    <th onclick="organizar('morada','ASC')">
                                                        <a>Morada</a>
                                                    </th>
                                                    <th onclick="organizar('codigo_postal','ASC')">
                                                        <a>Código Postal</a>
                                                    </th>

                                                </tr>
                                            </thead>

                                            <!-- Conteudo a ser escrito dinamicamente em JS e AJAX -->
                                            <tbody id="users">

                                            </tbody>
                                            <!-- /.Conteudo a ser escrito dinamicamente em JS e AJAX -->


                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>



</html>