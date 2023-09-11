<?php
// echo "base de dato";


// conexion
$db = new PDO('mysql:host=localhost;dbname=deporte;charset=utf8', 'root', '');
$consulta='SELECT * FROM jugador';
$query=$db->prepare($consulta);
$query->execute();

$resultado=$query->fetchAll(PDO::FETCH_OBJ);
// var_dump($resultado);
// foreach($resultado as $r){
//         echo $r->id;
//         echo $r->nombre;
//         echo $r->edad;
//         echo "<br>";
//     }
// $resultado=$query->fetchAll(PDO::FETCH_NUM);
// foreach($resultado as $r){
//     echo $r[0];
//     echo $r[1];
//     echo $r[2];
//     echo $r[3];
//     echo "<br>";
// }
// $resultado=$query->fetchAll(PDO::FETCH_ASSOC);
// foreach($resultado as $r){
//     echo $r['id'];
//     echo $r['nombre'];
//     echo $r['edad'];
//     echo $r['club'];
//     echo "<br>";
// }


// $consulta='INSERT INTO jugador (nombre,edad,club) VALUES (?,?,?)';
// $query=$db->prepare($consulta);
// $query->execute(["tercero",3,2]);


// $consulta='SELECT * FROM jugador';
// $query=$db->prepare($consulta);
// $query->execute();


// $resultado=$query->fetchAll(PDO::FETCH_BOTH);
// foreach($resultado as $r){
//     echo $r['id'];
//     echo $r['nombre'];
//     echo $r[2];
//     echo $r[3];
//     echo "<br>";
// }


// -------------------


// $consulta='SELECT * FROM jugador WHERE id=?';
// $query=$db->prepare($consulta);
// $query->execute([2]);

// $jug=$query->fetch(PDO::FETCH_OBJ);
// echo $jug->id;
// echo $jug->nombre;
// echo $jug->edad;
// echo $jug->club;

// $consulta='SELECT * FROM club WHERE id=?';
// $query=$db->prepare($consulta);
// $query->execute([$jug->club]);

// $club=$query->fetch(PDO::FETCH_OBJ);
// // echo $club->id;
// echo $club->nombre;
// echo $club->direccion;

// -------------------
$consulta='SELECT jugador.nombre as nombreJ, jugador.edad, club.nombre as nombreC, club.direccion FROM jugador JOIN club  ON jugador.club=club.id WHERE jugador.id=?';
$query=$db->prepare($consulta);
$query->execute([2]);

$resp=$query->fetch(PDO::FETCH_OBJ);
echo $resp->nombreJ;
echo $resp->edad;
echo $resp->nombreC;
echo $resp->direccion;
?>
