<?php session_start();
require_once "connections/connection.php";
require_once "admin/scripts/sc_check_admin.php";

if (!isset($_COOKIE['email']) && !isset($_COOKIE['id']) && !isset($_COOKIE['role'])) {
    header("location: login.php");
} else {
    $_SESSION["email_aplans"] = $_COOKIE['email'];
    $_SESSION['id_user_aplans'] = $_COOKIE['id'];
    $_SESSION['role_aplans'] = $_COOKIE['role'];
}

// if (isset($_SESSION["msg"])) {
//     $msgInfo = $_SESSION["msg"];
//     switch ($msgInfo) {
//         case '1':
//             $msgConteudo = '<div class="alert alert-success m-0 p-3">O evento foi criado com sucesso! <span id="close-info" class="close">x</span></li></div>';
//             break;
//         case '2':
//             $msgConteudo = '<div class="alert alert-danger m-0 p-3">Ocorreu um erro na criação do evento. Não inseriu os dados todos corretamente.<span id="close-info" class="close">x</span></li></div>';
//             break;

//         default:
//             $msgConteudo = "";
//             break;
//     }
// } else {
//     $msgConteudo = "";
// }


if (isset($_SESSION['email_aplans'])) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <?php include_once "helpers/help_meta.php" ?>
        <title>Aplans</title>
        <?php include_once "helpers/help_css.php" ?>

    </head>

    <body class="p-0">
        <div id="mensagemInfo" class="d-none"></div>
        <div id="conteudoPagina">


        </div>


        <?php include_once "helpers/help_js.php" ?>
        <?php include_once "ajax/home.html" ?>
        <?php include_once "ajax/evento.html" ?>
        <?php include_once "ajax/criar_evento.html" ?>
        <?php include_once "ajax/editar_perfil.html" ?>
        <?php include_once "ajax/perfil.html" ?>
        <?php include_once "ajax/settings.html" ?>




        <script>
            /*Calcula a altura do conteudo consoante o tamanho do ecra que estamos a usar para que não fique com barras brancas no final da página*/
            function alturaConteudo() {
                if ($(window).height() > $("main").height()) {
                    $("main").css("height", $(window).height())
                }
            }

            /*Sistema de Mensagem de Informação funcional em todas as páginas da app*/
            function mostrarInfo(msg) {

                switch (msg) {
                    case '1':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">O evento foi criado com sucesso! <span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '2':
                        msgConteudo = '<div class="alert alert-danger m-0 p-3">Ocorreu um erro na criação do evento. Não inseriu os dados todos corretamente.<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '3':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Foi adicionado ao evento com sucesso<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '4':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Abandonou o evento com sucesso<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '5':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Já não é o organizador do evento! Pode agora abandonar o mesmo.<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '6':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Perfil atualizado com sucesso!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;

                    case '7':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">O email inserido não é valido<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;

                    case '8':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Dados por preencher<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '9':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Nº de telemovel invalido<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '10':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Codigo Postal invalido<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '11':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Tamanho da imagem demasiado grande<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '12':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Formato de imagem inválido<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '13':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Evento eliminado com sucesso!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '14':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Nome de evento inválido!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '15':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Data de evento inválida!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '16':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Local de evento inválido!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '17':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Descrição de evento inválida!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '18':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Número de participantes inválido!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '19':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Evento alterado com sucesso!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '20':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Data do evento inválida!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '21':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Amigo removido com sucesso!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;

                    case '22':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Amigo adicionado com sucesso!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '23':
                        msgConteudo = '<div class="alert alert-success m-0 p-3">Tarefa associada com sucesso!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '24':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Tarefa já está associada a si!<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;
                    case '25':
                        msgConteudo = '<div class="alert alert-warning m-0 p-3">Foi desassociado da tarefa !<span id="tempoClose"></span><span id="close-info" class="close">x</span></li></div>';
                        break;





                    default:
                        msgConteudo = "";
                        break;

                }

                $('#mensagemInfo').removeClass("d-none");
                $('#mensagemInfo').html(msgConteudo);


                setTimeout(() => {
                    $('#mensagemInfo').html(" ");
                    $('#mensagemInfo').addClass("d-none");
                }, 5000);

            }
            /*Quando se clica na mensagem, ela desaparece*/
            $('#mensagemInfo').on('click', function() {
                $(this).addClass("d-none");
                $(this).html(" ");

            })

            /*Carrega a página Home quando a página index.php é carregada pela primeira vez*/
            $(document).ready(function() {
                mostrarHome();

            });

            /*
            Quando se clica num evento, o conteudo da div "conteudoPagina" é apagado e reescrito através desta nova funçao que irá mostrar a interface do evento
            É necessário este formato visto que escrevemos os elementos dinamicamente na página e não seriam acessíveis de outra forma
            É passado o id do evento correspondente ao botao onde clicámos na página home como parametro da função
            */
            $(document).on('click', '.btn-evento', function() {
                idEvento = $(this).attr("id")

                mostrarEvento(idEvento)


            });

            /* Quando se clica no botão de adicionar evento, o conteudo da div "conteudoPagina" é apagado e reescrito através desta nova funçao que irá mostrar a interface de criação do evento*/
            $(document).on('click', '.add-event', function() {
                mostrarCriarEvento()
            });


            $(document).on('click', '#abrirPerfil', function() {
                perfil("")
            });

            $(document).on('click', '#editarPerfil', function() {
                editarPerfil()
            });

            $(document).on('click', '#logout', function() {
                document.location.href = 'scripts/sc_logout.php';
            });

            $(document).on('click', '#abrirAdmin', function() {
                document.location.href = 'admin/pages/users.php';
            });


            $(document).on('click', '.amigosPerfil', function() {
                idUtilizador = $(this).attr("id")

                perfil(idUtilizador)


            });

            $(document).on('click', '#voltarHome', function() {
                mostrarHome();
            });

            $(document).on('click', '#voltarPerfil', function() {
                perfil("");
            });

            $(document).on('click', '#voltarEvento', function() {
                mostrarEvento(idEvento);
            });

            $(document).on('click', '.botaoParticipar', function() {
                participarEvento(idEvento)

            });
            $(document).on('click', '.botaoAbandonar', function() {
                abandonarEvento(idEvento)
            });

            $(document).on('click', '.removerAmigo', function() {
                idUtilizadorRemover = $(this).attr("id")
                removerAmigo(idUtilizadorRemover);
            });

            $(document).on('click', '.add_Amigo', function() {
                idUtilizadorAdd = $(this).attr("id")
                add_Amigo(idUtilizadorAdd);

            });


            $(document).on("click", "#menuAmigos", function() {

                menu_amigos();
            });

            /*QUANDO SE CLICA PARA ABRIR O MODAL DE ADICIONAR AMIGOS*/
            $(document).on("click", "#abrirListaAdd", function() {
                menu_amigosAdd();
            });
            /*QUANDO SE CLICA PARA ABRIR O MODAL DE ADICIONAR AMIGOS - quando nao ha amigos ainda*/
            $(document).on("click", "#abrirListaAdd2", function() {
                menu_amigosAdd();
            });

            /*QUANDO SE CLICA APRA VER TODOS OS EVENTOS*/
            $(document).on("click", "#mostrarTodosPlanos", function() {
                $('#MostrarResultadosEventos').html(' ');
                $("#mostrarTodosEventoss").css("display", "block");
                searchEventos = $("#search_eventos").val(); /*le o valor que esta na input*/


                pesquisarEventos(searchEventos, 1)

            });




            $(document).on('click', '.perfilUpcoming', function() {
                idEvento = $(this).attr("id")

                mostrarEvento(idEvento)


            });

            $(document).on("click", ".checkboxTarefas", function() {
                id_tarefa_evento = $(this).attr("id")
                if ($(".checkboxTarefas").is(':checked')) {
                    
                    entrar_tarefa(id_tarefa_evento);

                } else {
                    
                    sair_tarefa(id_tarefa_evento);
                }


            });








            /*Quando se clica no botão das settings dentro de um evento, o conteudo da div "conteudoPagina" é apagado e reescrito através desta nova função que irá mostrar ainterface das settings de um evento*/
            $(document).on('click', '#settings_evento', function() {
                console.log(idEvento);
                settingsEvento(idEvento)
            });
        </script>


        <script>

        </script>

    </body>

    </html>
<?php
} else {
    header("Location: login.php");
}
