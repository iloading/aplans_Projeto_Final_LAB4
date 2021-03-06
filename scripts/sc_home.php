<?php 
require_once "../connections/connection.php";

session_start();
$id_user = $_SESSION['id_user_aplans'];
$data = array();

$link = new_db_connection();

$stmt = mysqli_stmt_init($link);

$query = "SELECT id, name, date FROM event WHERE ref_creator_id = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id, $nomeEventoCriado, $dataEventoCriado);

        /* fetch values */
        
        while (mysqli_stmt_fetch($stmt)) {


            $data_adaptada= date ('Y-m-d\TH:i:s', strtotime($dataEventoCriado));
            $dia = date ('Y-m-d', strtotime($dataEventoCriado));
            $hora = date ('H:i', strtotime($dataEventoCriado));


            
            $row_result = array();
            $row_result["id_evento"] = htmlspecialchars($id);
            $row_result["nomeEventoCriado"] = htmlspecialchars($nomeEventoCriado);
            $row_result["diaEventoCriado"] = htmlspecialchars($dia);
            $row_result["horaEventoCriado"] = htmlspecialchars($hora);
            $data['created'][] = $row_result;
        }
        if (mysqli_stmt_num_rows($stmt) == 0) {
            $row_result = "vazio";
            $data['created'][] = $row_result;
        }
        // print json_encode($data);
        mysqli_stmt_close($stmt);
    }else {
        $row_result["erro"] = '1';
        $data[] = $row_result;
        print json_encode($data);
    }
}else {
    $row_result["erro"] = '2';
    $data[] = $row_result;
    print json_encode($data);
}






//SELECT event.id, event_type.url FROM event INNER JOIN event_type ON ref_event_type_id = event_type.id WHERE ref_event_type_id = ?

$stmt = mysqli_stmt_init($link);

$query = "SELECT event.id, event.name, event_type.url FROM event INNER JOIN event_type ON event_type.id = ref_event_type_id ORDER BY event.date";



if (mysqli_stmt_prepare($stmt, $query)) {
   
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id_evento, $nome_evento, $icon_url);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {

        
            $row_result = array();
            $row_result["id_evento"] = htmlspecialchars($id_evento);
            $row_result["nome_evento"] = htmlspecialchars($nome_evento);
            $row_result["icon_tipo"] = htmlspecialchars($icon_url);

            $data["upcoming"][] = $row_result;
        }
        if (mysqli_stmt_num_rows($stmt) == 0) {
            $row_result = "vazio";
            $data['upcoming'][] = $row_result;
        }

        //print json_encode($data);
        



        mysqli_stmt_close($stmt);
    } else {
        $row_result["erro"] = '1';
        $data[] = $row_result;
        print json_encode($data);
    }
} else {
    $row_result["erro"] = '2';
    $data[] = $row_result;
    print json_encode($data);
}










$stmt = mysqli_stmt_init($link);

$query = "SELECT users.nome,users.url,users.id FROM users INNER JOIN amigos ON users.id = user_id1  WHERE user_id2 = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $nomeAmigo,$imagemAmigo, $id_utilizador);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["nomesAmigos"] = htmlspecialchars($nomeAmigo);
            $row_result["imagem_amigo"] = htmlspecialchars($imagemAmigo);
            $row_result["id_utilizador"] = htmlspecialchars($id_utilizador);
            $data["amigos"][] = $row_result;
        }
        if (mysqli_stmt_num_rows($stmt) == 0) {

            $amigos1 = 0;

        }else{
            $amigos1 = 1;
        }

        //print json_encode($data);




        mysqli_stmt_close($stmt);
    } else {
        $row_result["erro"] = '1';
        $data[] = $row_result;
        print json_encode($data);
    }
} else {
    $row_result["erro"] = '2';
    $data[] = $row_result;
    print json_encode($data);
}


$stmt = mysqli_stmt_init($link);

$query = "SELECT users.nome,users.url,users.id FROM users INNER JOIN amigos ON users.id = user_id2  WHERE user_id1 = ?";



if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    // Devemos validar também o resultado do execute!

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $nomeAmigo, $imagemAmigo, $id_utilizador);

        /* fetch values */

        while (mysqli_stmt_fetch($stmt)) {
            $row_result = array();
            $row_result["nomesAmigos"] = htmlspecialchars($nomeAmigo);
            $row_result["imagem_amigo"] = htmlspecialchars($imagemAmigo);
            $row_result["id_utilizador"] = htmlspecialchars($id_utilizador);
            $data["amigos"][] = $row_result;
        }

        if (mysqli_stmt_num_rows($stmt) == 0) {

            $amigos2 = 0;
        
        } else {
            $amigos2 = 1;
        }

        //print json_encode($data);




        mysqli_stmt_close($stmt);
    } else {
        $row_result["erro"] = '1';
        $data[] = $row_result;
        print json_encode($data);
    }
} else {
    $row_result["erro"] = '2';
    $data[] = $row_result;
    print json_encode($data);
}


    if ($amigos1 == 0 && $amigos2 == 0) {

        $row_result = "vazio";
        $data['amigos'][] = $row_result;
        
    }









/*----------------- Ir buscar os dados do utilizador logado ----------------*/

$stmt = mysqli_stmt_init($link);

$query = "SELECT id, url, ref_roles_id FROM users WHERE id = ?";

if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_bind_param($stmt, 'i', $id_user);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $id, $url, $role);


        while (mysqli_stmt_fetch($stmt)) {



            $row_result = array();
            $row_result["id"] = htmlspecialchars($id);
            $row_result["url"] = htmlspecialchars($url);
            $row_result["role"] = htmlspecialchars($role);
         

            $data['user'][] = $row_result;
        }
    }
}


print json_encode($data);


?>