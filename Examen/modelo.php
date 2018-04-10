<?php
function connect() {
    $ENV = "prod";
    if ($ENV == "dev") {
        $mysql = mysqli_connect("localhost","linetes","","Examen");
    } else  if ($ENV == "prod"){
        $mysql = mysqli_connect("127.0.0.1","Linetes","cesarb13","lab14", 8889);
    }
    $mysql->set_charset("utf8");
    return $mysql;
}


function disconnect($mysql) {
    mysqli_close($mysql);
}

function login($user, $passwd) {
    $db = connect();
    if ($db != NULL) {

        //Specification of the SQL query
        $query='SELECT nombre FROM usuarios WHERE nombre="'.$user.
            '" AND passwd="'.$passwd.'"';
        $query;
        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        // cycle to explode every line of the results

        if (mysqli_num_rows($results) > 0)  {
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }
    return false;
}

function getIncidentes() {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT i.id, l.lugar, t.tipo, i.fecha
                FROM Incidentes i, Lugares l, Tipos t
                WHERE i.idlugar = l.id
                AND i.idtipo = t.id
                ORDER BY i.id";
                
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $html .= '<tr class=\'\'>
                          <td> '. $row["id"] .' </td>
                          <td> '. $row["lugar"] .' </td>
                          <td> '. $row["tipo"] .' </td>
                          <td> '. $row["fecha"] .' </td>
                          </tr>';
            }
            echo $html;
        }
    }
}

function getIncidentesTipo($tipo) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT t.tipo, count(i.fecha) as 'Cantidad'
                FROM Tipos t, Incidentes i
                WHERE t.id = '$tipo'
                AND i.idtipo = t.id
                GROUP BY t.tipo";
                
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $html .= '<tr class=\'\'>
                          <td> '. $row["tipo"] .' </td>
                          <td> '. $row["Cantidad"] .' </td>
                          </tr>';
            }
            echo $html;
        }
    }
}

function getLugares() {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT id, lugar FROM Lugares ORDER BY lugar ASC";
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $html .= '<option value="'. $row["id"] .'"> '. $row["lugar"] .' </option>';
            }
            echo $html;
        }
    }
}

function getTipos() {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT id, tipo FROM Tipos ORDER BY tipo ASC";
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $html .= '<option value="'. $row["id"] .'"> '. $row["tipo"] .' </option>';
            }
            echo $html;
        }
    }
}

function insertIn($lugar,$tipo){
    $db = connect();
    if ($db != NULL) {
        $sql = "INSERT INTO Incidentes (idlugar,idtipo) Values (\"" . $lugar . "\",\"" . $tipo . "\");";

        if (mysqli_query($db,$sql)) {
            echo "\nNew record created succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
        return false;
    }
    return false;
}

function delete_by_id($idIn){
    $db = connect();
    if ($db != NULL) {
        $sql = "DELETE FROM Incidentes WHERE id = '".$idIn."'";
        if (mysqli_query($db,$sql)) {
            echo "\nRecord deleted succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
        return false;
    }
    return false;
}
//var_dump(login('cesar', 'basket'));
?>