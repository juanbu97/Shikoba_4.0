<?php
require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$db = new mysqli("localhost", "root", "root", "convivencia2");

//cabeceras para control del cors
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    die();
}

$app->get("/pruebas", function () use ($app) {
    echo "Hola mundo desde Slim";
});

$app->get("/", function () use ($app) {
    echo "Hola mundo la pagina principal";
});

//Devolver información de un solo alumno filtrando por nie
$app->get('/alumnos/:nie', function ($nie) use ($app, $db) {
    $sql = "SELECT * from alumno where nie = " . $nie;
    $query = $db->query($sql);

    $alumno = $query->fetch_assoc();

    if ($query->num_rows == 1) {
        $result = array(
            'status' => 'success',
            'code' => 200,
            'data' => $alumno
        );
        echo json_encode($alumno);
    } else {
        echo "No se ha encontrado ningun registro con ese nie.";
    }
});

//Devolver información de un solo alumno filtrando por nie
$app->get('/alumno/:email', function ($email) use ($app, $db) {
    $sql = "SELECT * from alumno where email = " . $email;
    $query = $db->query($sql);

    $alumno = $query->fetch_assoc();

    if ($query->num_rows == 1) {
        $result = array(
            'status' => 'success',
            'code' => 200,
            'data' => $alumno
        );
        echo json_encode($result);
    } else {
        echo "No se ha encontrado ningun registro con ese email.";
    }
});

//Devuleve la noticia dependiendo del alumno que haya iniciado sesión
/* $app->get('/noticiass/:email', function ($email) use ($app, $db) {

    $isLogged = false;

    $diaActual = date('Y-m-d H:i:s');
    $sql = "SELECT * FROM publicaciones where fecha_inicio <= '$diaActual' and fecha_final >= '$diaActual' and estado = 2 ORDER BY tipo_publicacion, prioridad DESC, fecha_creacion DESC;";

    $query = $db->query($sql);

    while ($publicacion = $query->fetch_assoc()) {
        $publicaciones[] = $publicacion;
    };

    foreach ($publicaciones as $value) {
        $query2 = $db->query($value['destinatario_sql']);

        while ($noticiaPublicada = $query2->fetch_assoc()) {
            $noticiasPublicadas[] = $noticiaPublicada;
        };

        foreach ($noticiasPublicadas as $array2) {
            foreach ($array2 as $j) {
                if ($j == $email) {
                    $isLogged = true;
                }
            }
        }

        $query3 = $db->query("select codigo_embebido from noticiasV2 where id = " . $value['id_noticia'] . ";");

        if ($isLogged) {
            break;
        }
    }

    while ($noticia = $query3->fetch_assoc()) {
        $noticiaPublicada[] = $noticia;
    };


    $result = array(
        'status' => 'success',
        'code'     => 200,
        'data' => $noticiaPublicada
    );

    echo json_encode($result);
}); */

//Listar todos los alumnos
$app->get('/alumnos', function () use ($app, $db) {
    $sql = "SELECT * FROM alumno ORDER BY id";
    $query = $db->query($sql);
    $alumnos = array();

    while ($alumno = $query->fetch_assoc()) {
        $alumnos[] = $alumno;
    };

    $result = array(
        'status' => 'success',
        'code' => 200,
        'data' => $alumnos
    );

    echo json_encode($result);
});


//Devuleve la noticia dependiendo del alumno que haya iniciado sesión
/* $app->get('/noticias/:email', function ($email) use ($app, $db) {

    $isLogged = false;
    $diaActual = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM publicaciones where fecha_inicio <= '$diaActual' and fecha_final >= '$diaActual' and estado = 2 ORDER BY tipo_publicacion, prioridad DESC, fecha_creacion DESC;";

    $query = $db->query($sql);

    while ($alumno = $query->fetch_assoc()) {
        $alumnos[] = $alumno;
    };
    
    foreach ($alumnos as $array) {


        $sql2 = $db->query($array['destinatario_sql']);

        while ($consulta = $sql2->fetch_assoc()) {
            $consultas[] = $consulta;
        };
    }
    print_r($consultas);

}); */


$app->get('/noticias/:email', function ($email) use ($app, $db) {

    $isLogged = false;

    $diaActual = date('Y-m-d H:i:s');
    $sql = "SELECT * FROM publicaciones where fecha_inicio <= '$diaActual' and fecha_final >= '$diaActual' and estado = 2 ORDER BY tipo_publicacion, prioridad DESC, fecha_creacion DESC;";

    $query = $db->query($sql);

    while ($publicacion = $query->fetch_assoc()) {
        $publicaciones[] = $publicacion;
    };

    foreach ($publicaciones as $value) {
        $query2 = $db->query($value['destinatarios_sql']);

        while ($noticiaPublicada = $query2->fetch_assoc()) {
            $noticiasPublicadas[] = $noticiaPublicada;
        };

        foreach ($noticiasPublicadas as $array2) {
            foreach ($array2 as $j) {
                if ($j == $email) {
                    $isLogged = true;
                }
            }
        }

        $query3 = $db->query("select * from noticiasV2 where id = " . $value['id_noticia'] . ";");

        if ($isLogged) {
            break;
        }
    }

    while ($noticia = $query3->fetch_assoc()) {
        $noticiaPublicada[] = $noticia;
    };


    $result = array(
        'status' => 'success',
        'code'     => 200,
        'data' => $noticiaPublicada
    );

    echo json_encode($result);
});
$app->run();
