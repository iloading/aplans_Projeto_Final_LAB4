<?php
    require_once '../../connections/connection.php';

    // Create a new DB connection
    $link = new_db_connection();

    /* create a prepared statement */
    $stmt = mysqli_stmt_init($link);

    $query = "SELECT nome, email, telemovel, morada, codigo_postal, role FROM users INNER JOIN roles ON roles.id = ref_roles_id";

    if (mysqli_stmt_prepare($stmt, $query)) {
        /* execute the prepared statement */
        if (mysqli_stmt_execute($stmt)){
            /* bind result variables */
            mysqli_stmt_bind_result($stmt, $nome, $email, $telemovel, $morada, $cp, $role);

            /* fetch values */
            $data = array();
            while (mysqli_stmt_fetch($stmt)) {
                $row_result = array();
                $row_result["nome"] = htmlspecialchars($nome);
                $row_result["email"] = htmlspecialchars($email);
                $row_result["telemovel"] = htmlspecialchars($telemovel);
                $row_result["morada"] = htmlspecialchars($morada);
                $row_result["codigo_postal"] = htmlspecialchars($cp);
                $row_result["role"] = htmlspecialchars($role);
                $data[] = $row_result;
            }
            print json_encode($data);
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        /* close statement */
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($link);
    }

    /* close connection */
    mysqli_close($link);